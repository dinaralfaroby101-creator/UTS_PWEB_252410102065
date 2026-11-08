# 🍚 SEGOKOT - Aplikasi Pengelolaan Nasi Cokot.

Sego Cokot adalah sebuah aplikasi web sederhana yang dibuat untuk memfasilitasi pengelolaan penjualan produk Nasi Cokot. Terdapat dua varian lauk dan dua porsi yang disediakan, yaitu varian lauk Ayam Suwir dan Sosis Telur, dan untuk variannya ada yang Porsi Normal (Rp 5.000) dan Porsi Jumbo (Rp 8.000).

Aplikasi ini berfokus pada implementasi arsitektur MVC, murni menggunakan Laravel, dengan mendemonstrasikan alur request-response dari form Login menuju halaman Dashboard dan Profil, serta menampilkan data dinamis menggunakan array dari Controller ke halaman Pengelolaan.

## 🛠 Tools & Library yang Digunakan
Proyek ini dibangun menggunakan teknologi berikut:
- **Framework Utama:** Laravel Murni (PHP)
- **Arsitektur:** MVC (Tanpa Database)
- **Templating Engine:** Laravel Blade (menggunakan fitur `@extends`, `@section`, `@yield`, `@include`, dan `x-component`)
- **Styling / UI:** Tailwind CSS

## 🚀 Fitur Utama
- **Simulasi Login:** Menerima input username dan mengirimkan datanya (melalui Request Parameter) ke halaman Dashboard dan Profil.
- **Dashboard & Profil:** Menampilkan halaman interaktif yang merespons data dari form login.
- **Pengelolaan Data Dinamis:** Merender daftar produk Nasi Cokot (harga, varian porsi, dan deskripsi) menggunakan data array dari Controller yang di-looping dengan `@foreach` di View.


<img width="1843" height="930" alt="Screenshot 2026-11-08 225639" src="https://github.com/user-attachments/assets/ef94e8c4-85fa-4947-8c67-8827c08afcdc" />
<img width="1838" height="926" alt="Screenshot 2026-11-08 225654" src="https://github.com/user-attachments/assets/15cea071-6bbb-4cb7-bc93-ef85b1076798" />
<img width="1842" height="923" alt="Screenshot 2026-11-08 225708" src="https://github.com/user-attachments/assets/303f3d89-e250-4293-aa10-8b51a5006d3e" />
<img width="1826" height="932" alt="Screenshot 2026-11-08 225720" src="https://github.com/user-attachments/assets/f4de16b1-48ba-4cf1-bfa3-2cf150189c7e" />
