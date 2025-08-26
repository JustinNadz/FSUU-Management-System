# Check MySQL PDO Driver Status
Write-Host "========================================" -ForegroundColor Green
Write-Host "MySQL PDO Driver Status Check" -ForegroundColor Green
Write-Host "========================================" -ForegroundColor Green
Write-Host ""

$phpIniPath = "C:\php-7.4.33-Win32-vc15-x64\php.ini"

if (Test-Path $phpIniPath) {
    Write-Host "✅ Found PHP configuration file: $phpIniPath" -ForegroundColor Green
    Write-Host ""
    
    # Read the current php.ini file
    $content = Get-Content $phpIniPath
    
    # Check if extensions are enabled
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
    Write-Host "To fix this issue:" -ForegroundColor Cyan
    Write-Host "1. Open: $phpIniPath" -ForegroundColor White
    Write-Host "2. Find these lines:" -ForegroundColor White
    Write-Host "   ;extension=pdo_mysql" -ForegroundColor Gray
    Write-Host "   ;extension=mysqli" -ForegroundColor Gray
    Write-Host "3. Remove the semicolon (;) from the beginning:" -ForegroundColor White
    Write-Host "   extension=pdo_mysql" -ForegroundColor Green
    Write-Host "   extension=mysqli" -ForegroundColor Green
    Write-Host "4. Save the file and restart your command prompt" -ForegroundColor White
} else {
    Write-Host "❌ PHP configuration file not found at: $phpIniPath" -ForegroundColor Red
}

Write-Host ""
Write-Host "After enabling the extensions, run:" -ForegroundColor Cyan
Write-Host "php artisan migrate" -ForegroundColor White
Write-Host "php artisan db:seed" -ForegroundColor White
Write-Host ""
Write-Host "Press any key to continue..." -ForegroundColor Gray
$null = $Host.UI.RawUI.ReadKey("NoEcho,IncludeKeyDown") 