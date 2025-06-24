<p align="center">
  <img src="https:https://www.google.com/imgres?q=gambar%20servis%20kendaraan&imgurl=https%3A%2F%2Fwww.adira.co.id%2Fimg%2Ffrontend%2Fnews%2Fthumb_1.%2520Car%2520Service.jpg&imgrefurl=https%3A%2F%2Fwww.adira.co.id%2Fdetail_berita%2Fmetalink%2Fyuk-lakukan-servis-mobil-berkala-kapan-saja-waktunya&docid=t9kF4cCLh7X0BM&tbnid=5lFdO-xJp-vxyM&vet=12ahUKEwih5MHQrIqOAxWtUGcHHb6KMDUQM3oFCIoBEAA..i&w=825&h=525&hcb=2&ved=2ahUKEwih5MHQrIqOAxWtUGcHHb6KMDUQM3oFCIoBEAA" alt="Car Service Logo" width="100"/>
</p>

<h1 align="center">🚗 Aplikasi Servis Kendaraan</h1>

<p align="center">
  Sistem manajemen layanan bengkel kendaraan menggunakan Laravel + Filament.
</p>

<p align="center">
  <a href="https://laravel.com" target="_blank"><img src="https://img.shields.io/badge/Laravel-Framework-red" alt="Laravel"></a>
  <a href="#"><img src="https://img.shields.io/badge/status-active-brightgreen" alt="Project Status"></a>
  <a href="#"><img src="https://img.shields.io/github/license/AryaNuryawan/Uaspweb2" alt="License"></a>
</p>

---

## 📋 Deskripsi

**Aplikasi Servis Kendaraan** adalah sistem berbasis web yang dirancang untuk memudahkan manajemen layanan bengkel, montir, dan pelanggan. Dibangun dengan Laravel dan Filament untuk tampilan admin yang responsif dan mudah digunakan.

---

## ✨ Fitur Utama

- 🔧 CRUD data layanan, montir, dan kategori montir
- 📂 Upload gambar kendaraan (dokumentasi servis)
- 📊 Panel admin dengan tampilan menarik menggunakan Filament
- 🔎 Pencarian & filter data
- 📈 Statistik layanan
- ✅ Validasi form otomatis

---

## 🚀 Teknologi yang Digunakan

- Laravel 10
- Filament Admin Panel
- PHP 8+
- MySQL / MariaDB
- TailwindCSS

---

## Pengembang
- Arya Nuryawan
- Aisya Zahra
- Yusuf Andika
- Riez Rafa R


---

## 🛠️ Instalasi

```bash
git clone https://github.com/AryaNuryawan/Uaspweb2.git
cd Uaspweb2
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan storage:link
php artisan serve
