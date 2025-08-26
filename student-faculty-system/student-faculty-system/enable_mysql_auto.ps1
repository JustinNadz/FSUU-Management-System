# Auto-enable MySQL PDO Extensions
Write-Host "========================================" -ForegroundColor Green
Write-Host "Auto-enabling MySQL PDO Extensions" -ForegroundColor Green
Write-Host "========================================" -ForegroundColor Green
Write-Host ""

$phpIniPath = "C:\php-7.4.33-Win32-vc15-x64\php.ini"

if (Test-Path $phpIniPath) {
    Write-Host "✅ Found PHP configuration file: $phpIniPath" -ForegroundColor Green
    Write-Host ""
    
    # Read the current php.ini file
    $content = Get-Content $phpIniPath
    
    # Check current status
    $pdoMysqlLine = $content | Where-Object { $_ -match "extension=pdo_mysql" }
    $mysqliLine = $content | Where-Object { $_ -match "extension=mysqli" }
    
    Write-Host "Current status:" -ForegroundColor Yellow
    if ($pdoMysqlLine) {
        if ($pdoMysqlLine -match "^;") {
            Write-Host "❌ pdo_mysql: DISABLED (commented out)" -ForegroundColor Red
        } else {
            Write-Host "✅ pdo_mysql: ENABLED" -ForegroundColor Green
        }
    } else {
        Write-Host "❌ pdo_mysql: NOT FOUND" -ForegroundColor Red
    }
    
    if ($mysqliLine) {
        if ($mysqliLine -match "^;") {
            Write-Host "❌ mysqli: DISABLED (commented out)" -ForegroundColor Red
        } else {
            Write-Host "✅ mysqli: ENABLED" -ForegroundColor Green
        }
    } else {
        Write-Host "❌ mysqli: NOT FOUND" -ForegroundColor Red
    }
    
    Write-Host ""
    Write-Host "Attempting to enable extensions..." -ForegroundColor Cyan
    
    # Create backup
    $backupPath = "$phpIniPath.backup"
    Copy-Item $phpIniPath $backupPath
    Write-Host "✅ Created backup: $backupPath" -ForegroundColor Green
    
    # Enable extensions by replacing commented lines
    $newContent = $content -replace "^;extension=pdo_mysql", "extension=pdo_mysql"
    $newContent = $newContent -replace "^;extension=mysqli", "extension=mysqli"
    
    # Write the modified content back
    Set-Content $phpIniPath $newContent
    
    Write-Host "✅ Extensions enabled!" -ForegroundColor Green
    Write-Host ""
    Write-Host "Please restart your command prompt and run:" -ForegroundColor Cyan
    Write-Host "php artisan migrate" -ForegroundColor White
    Write-Host "php artisan db:seed" -ForegroundColor White
    Write-Host ""
    Write-Host "If this doesn't work, you can restore the backup:" -ForegroundColor Yellow
    Write-Host "Copy-Item '$backupPath' '$phpIniPath'" -ForegroundColor Gray
    
} else {
    Write-Host "❌ PHP configuration file not found at: $phpIniPath" -ForegroundColor Red
}

Write-Host ""
Write-Host "Press any key to continue..." -ForegroundColor Gray
$null = $Host.UI.RawUI.ReadKey("NoEcho,IncludeKeyDown") 