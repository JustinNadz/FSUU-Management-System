@echo off
echo ========================================
echo MySQL PDO Driver Setup
echo ========================================
echo.

echo Your PHP configuration file is located at:
echo C:\php-7.4.33-Win32-vc15-x64\php.ini
echo.

echo To enable MySQL PDO driver, please:
echo 1. Open the php.ini file in a text editor
echo 2. Find and uncomment these lines (remove the semicolon):
echo    extension=pdo_mysql
echo    extension=mysqli
echo 3. Save the file
echo 4. Restart your command prompt
echo.

echo After enabling the extensions, run:
echo php artisan migrate
echo php artisan db:seed
echo.

pause 