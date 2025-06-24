<p align="center">
  <img src="https://img.icons8.com/external-flat-juicy-fish/64/000000/external-car-repair-garage-flat-flat-juicy-fish.png" alt="Car Service Logo" width="100"/>
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

## 🖼️ Screenshot

> (Kamu bisa menambahkan screenshot hasil tampilan di sini)

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
