# ZEDAPPS SCHOOL

ZEDAPPS SCHOOL adalah platform digital yang dirancang untuk mengelola dan mengadakan ujian berbasis komputer (Computer Based Test atau CBT), Elearning, dan Rapor. Aplikasi ini memungkinkan pengguna untuk menyiapkan modul soal, mengelola data peserta, mengatur pengaturan ujian, dan mengelola aplikasi secara keseluruhan.

## Fitur Utama

- **Penambahan Modul dan Soal**  
  Pengguna dapat menambahkan modul, topik, dan soal secara online.

- **Import Data Peserta dan Soal**  
  Aplikasi memungkinkan pengguna untuk mengimpor data peserta dan soal dari file.

- **Pengelolaan Kelas dan Peserta**  
  Pengguna dapat mengelola kelas dan peserta yang akan mengikuti ujian.

- **Pengaturan Ujian**  
  Aplikasi menyediakan berbagai pengaturan untuk ujian, termasuk pengaturan waktu dan prioritas.

- **Laporan dan Analisis**  
  Pengguna dapat membuat laporan dan analisis statistik untuk mengevaluasi kinerja peserta dan mengidentifikasi area perbaikan.

## Keuntungan

Aplikasi ini dirancang untuk memudahkan proses ujian tanpa menggunakan kertas, sehingga lebih ramah lingkungan dan efisien. Aplikasi ini juga memanfaatkan teknologi rekayasa web untuk memberikan pengalaman pengguna yang lebih baik.

Untuk informasi lebih lanjut tentang aplikasi ZEDAPPS SCHOOL, kunjungi [situs resmi ZEDAPPS](https://github.com/zulfikriyahya/zedapps-school).

# Instalasi ZEDAPPS SCHOOL (Khusus OS Windows)

Skrip ini akan menginstal dan mengonfigurasi aplikasi ZEDAPPS SCHOOL di sistem Anda.

```shell
@echo off
title ZEDAPPS SCHOOL INSTALLER
mode con: cols=70 lines=5

if not exist "C:\Program Files\Git\git-bash.exe" (
    winget install --id Git.Git -e --source winget --silent
exit
)

cd \
if not exist "C:\zedapps-school" (
    git clone https://github.com/zulfikriyahya/zedapps-school.git
)

cd C:\zedapps-school
start "" /B "mysql_start.bat"
cd C:\zedapps-school\apache\bin
httpd -k install
httpd -k start

cd \zedapps-school
git init
git pull

start http://localhost

if not exist "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\zedapps-school.cmd" (
    echo @echo off >> "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\zedapps-school.cmd"
    echo title ZEDAPPS CBT INSTALLER >> "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\zedapps-school.cmd"
    echo mode con: cols=70 lines=5 >> "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\zedapps-school.cmd"
    echo cd \zedapps-cbt >> "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\zedapps-school.cmd"
    echo git init >> "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\zedapps-school.cmd"
    echo git pull >> "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\zedapps-school.cmd"
    echo start "" /B "mysql_start.bat" >> "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\zedapps-school.cmd"
    echo start http://localhost >> "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\zedapps-school.cmd"
    echo exit >> "%USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\zedapps-school.cmd"
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

    Skrip ini akan mengkloning repository ZEDAPPS CBT dari GitHub ke direktori `C:\zedapps-school`.

4. **Mulai Layanan MySQL dan Apache**

    Skrip ini akan memulai layanan MySQL dan Apache yang diperlukan untuk menjalankan aplikasi ZEDAPPS SCHOOL.

5. **Konfigurasi Git**

    Skrip ini akan menginisialisasi dan menarik pembaruan dari repository Git.

6. **Akses Aplikasi**

    Setelah proses instalasi selesai, buka peramban web client dan akses `http://<ip address komputer ini (server)>`.

7. **Setup Startup Script**

    Skrip ini juga akan membuat skrip startup yang akan dijalankan setiap kali sistem dinyalakan untuk memastikan layanan ZEDAPPS SCHOOL aktif.
