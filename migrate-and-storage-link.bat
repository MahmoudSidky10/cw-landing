@echo off
cd /d "d:\New folder\cw-landing"
php artisan migrate
php artisan storage:link
echo.
pause
