```shell
@echo off
title ZEDAPPS SCHOOL INSTALLER
mode con: cols=70 lines=5

if not exist "C:\Program Files\Git\git-bash.exe" (
    winget install --id Git.Git -e --source winget --silent
exit
)

cd \
if not exist "C:\zedapps-cbt" (
    git clone https://github.com/zulfikriyahya/zedapps-cbt.git
)

cd C:\zedapps-cbt
start "" /B "mysql_start.bat"
cd C:\zedapps-cbt\apache\bin
httpd -k install
httpd -k start

cd \zedapps-cbt
git init
git pull

start http://localhost

if not exist "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\cbt.cmd" (
    echo @echo off >> "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\cbt.cmd"
    echo title ZEDAPPS SCHOOL INSTALLER >> "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\cbt.cmd"
    echo mode con: cols=70 lines=5 >> "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\cbt.cmd"
    echo cd \zedapps-cbt >> "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\cbt.cmd"
    echo git init >> "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\cbt.cmd"
    echo git pull >> "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\cbt.cmd"
    echo start "" /B "mysql_start.bat" >> "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\cbt.cmd"
    echo start http://localhost >> "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\cbt.cmd"
    echo exit >> "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\cbt.cmd"
    )
    echo Penyiapan aplikasi selesai, silakan tutup jendela ini.

exit
```
