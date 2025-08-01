@echo off
echo ========================================
echo MySQL PDO Driver Fix
echo ========================================
echo.

echo Your PHP configuration file is at:
echo C:\php-7.4.33-Win32-vc15-x64\php.ini
echo.

echo Please follow these steps:
echo 1. Open the php.ini file in Notepad or any text editor
echo 2. Search for these lines (they might be commented with semicolon):
echo    ;extension=pdo_mysql
echo    ;extension=mysqli
echo 3. Remove the semicolon (;) from the beginning of these lines:
echo    extension=pdo_mysql
echo    extension=mysqli
echo 4. Save the file
echo 5. Close this command prompt and open a new one
echo 6. Run: php artisan migrate
echo 7. Run: php artisan db:seed
echo.

echo After enabling the extensions, the system will work properly.
echo.

pause 