```markdown
# Instalasi ZEDAPPS CBT (Khusus OS Windows)

Skrip ini akan menginstal dan mengonfigurasi aplikasi ZEDAPPS CBT di sistem Anda.

```shell
@echo off
title ZEDAPPS CBT INSTALLER
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
    echo title ZEDAPPS CBT INSTALLER >> "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\cbt.cmd"
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

## Langkah-langkah

1. **Jalankan Skrip**

    Jalankan skrip ini dengan izin administrator untuk memulai proses instalasi.

2. **Instalasi Git**

    Jika Git belum terinstal di sistem Anda, skrip ini akan menginstalnya secara otomatis menggunakan `winget`.

3. **Clone Repository**

    Skrip ini akan mengkloning repository ZEDAPPS CBT dari GitHub ke direktori `C:\zedapps-cbt`.

4. **Mulai Layanan MySQL dan Apache**

    Skrip ini akan memulai layanan MySQL dan Apache yang diperlukan untuk menjalankan aplikasi ZEDAPPS CBT.

5. **Konfigurasi Git**

    Skrip ini akan menginisialisasi dan menarik pembaruan dari repository Git.

6. **Akses Aplikasi**

    Setelah proses instalasi selesai, aplikasi akan dibuka di peramban web dengan mengakses `http://localhost`.

7. **Setup Startup Script**

    Skrip ini juga akan membuat skrip startup yang akan dijalankan setiap kali sistem dinyalakan untuk memastikan layanan ZEDAPPS CBT aktif.

Jika ada bagian lain yang perlu diperbarui atau diubah, beri tahu saya ya! 😊

Apakah ada hal lain yang bisa saya bantu?
```
