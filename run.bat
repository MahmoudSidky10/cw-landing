@echo off
setlocal
cd /d "%~dp0"

echo [cw-landing] Project root: %CD%
echo.

if not exist "vendor\" (
    echo Installing Composer dependencies...
    composer install
    if errorlevel 1 exit /b 1
    echo.
)

if not exist "node_modules\" (
    echo Installing npm dependencies...
    call npm install
    if errorlevel 1 exit /b 1
    echo.
)

if not exist ".env" (
    if exist ".env.example" (
        echo Creating .env from .env.example...
        copy /Y ".env.example" ".env" >nul
        php artisan key:generate --ansi
        echo.
    )
)

echo ------------------------------------------------------------------
echo  OPEN YOUR APP IN THE BROWSER AT:
echo    http://127.0.0.1:8000
echo  Do not use http://localhost alone (port 80) or only the Vite URL.
echo  Vite runs in another window for hot reload; Laravel serves pages.
echo ------------------------------------------------------------------
echo.

echo Starting Vite (assets) in a separate window...
start "cw-landing Vite" cmd /k "cd /d ""%CD%"" && npm run dev"

echo Starting Laravel...
echo Press Ctrl+C to stop the PHP server. Close the Vite window when done.
echo.
php artisan serve

endlocal
