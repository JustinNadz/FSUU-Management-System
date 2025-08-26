# MySQL PDO Driver Setup Script
Write-Host "========================================" -ForegroundColor Green
Write-Host "MySQL PDO Driver Setup" -ForegroundColor Green
Write-Host "========================================" -ForegroundColor Green
Write-Host ""

$phpIniPath = "C:\php-7.4.33-Win32-vc15-x64\php.ini"

if (Test-Path $phpIniPath) {
    Write-Host "Found PHP configuration file: $phpIniPath" -ForegroundColor Yellow
    Write-Host ""
    
    # Read the current php.ini file
    $content = Get-Content $phpIniPath
    
    # Check if extensions are already enabled
    $pdoMysqlEnabled = $content | Where-Object { $_ -match "^extension=pdo_mysql" }
    $mysqliEnabled = $content | Where-Object { $_ -match "^extension=mysqli" }
    
    if ($pdoMysqlEnabled -and $mysqliEnabled) {
        Write-Host "✅ MySQL PDO extensions are already enabled!" -ForegroundColor Green
    } else {
        Write-Host "⚠️  MySQL PDO extensions need to be enabled." -ForegroundColor Yellow
        Write-Host ""
        Write-Host "Please manually edit the php.ini file:" -ForegroundColor Cyan
        Write-Host "1. Open: $phpIniPath" -ForegroundColor White
        Write-Host "2. Find and uncomment these lines (remove the semicolon):" -ForegroundColor White
        Write-Host "   extension=pdo_mysql" -ForegroundColor White
        Write-Host "   extension=mysqli" -ForegroundColor White
        Write-Host "3. Save the file" -ForegroundColor White
        Write-Host "4. Restart your command prompt" -ForegroundColor White
    }
} else {
    Write-Host "❌ PHP configuration file not found at: $phpIniPath" -ForegroundColor Red
    Write-Host "Please locate your php.ini file and run this script again." -ForegroundColor Yellow
}

Write-Host ""
Write-Host "After enabling the extensions, run:" -ForegroundColor Cyan
Write-Host "php artisan migrate" -ForegroundColor White
Write-Host "php artisan db:seed" -ForegroundColor White
Write-Host ""
Write-Host "Press any key to continue..." -ForegroundColor Gray
$null = $Host.UI.RawUI.ReadKey("NoEcho,IncludeKeyDown") 