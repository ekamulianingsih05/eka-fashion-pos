<div align="center">

# ✦ Eka Fashion POS

### Sistem kasir, inventori, pelanggan, dan laporan penjualan untuk butik fashion

<p>
  <img src="https://img.shields.io/badge/PHP-Native-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP Native">
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap 5">
</p>

<p><i>Kelola penjualan dengan rapi, cepat, dan elegan.</i></p>

</div>

## Tentang aplikasi

Eka Fashion POS adalah aplikasi Point of Sale berbasis PHP Native MVC dan MySQL untuk membantu operasional toko fashion. Aplikasi ini menghubungkan proses kasir, stok produk, pelanggan, supplier, pengguna, dan laporan bulanan dalam satu dashboard bertema cream-white yang ringan dan responsif.

## ✨ Fitur utama

| Modul | Kemampuan |
|---|---|
| Dashboard | Ringkasan produk, stok, transaksi, dan pendapatan |
| Kasir / POS | Keranjang belanja, validasi stok, member, dan checkout |
| Pembayaran | Cash, QRIS demo, dan transfer |
| Uang cash | Format Rupiah otomatis, validasi uang kurang, dan hitung kembalian |
| Struk / invoice | Detail item, total, uang diterima, dan kembalian |
| Produk | CRUD, kode otomatis `EF-001`, kategori, supplier, stok, dan upload gambar |
| Pelanggan | CRUD data pelanggan dan pencarian data member |
| Supplier & kategori | Pengelolaan data pendukung produk |
| User management | Role admin/kasir dan reset password dengan aman |
| Laporan | Filter bulan/tahun, pendapatan, produk terjual, top produk, stok menipis, kategori, dan metode pembayaran |
| Export | Laporan dan struk siap dicetak atau disimpan sebagai PDF melalui browser |

## 🎨 Tema visual

- Palet cream, putih, gold, dan cokelat yang cocok untuk brand fashion.
- Layout responsif dengan Bootstrap 5.
- Ikon Bootstrap Icons dan tipografi Poppins.
- Tampilan admin yang sederhana, bersih, dan fokus pada data penting.

## Teknologi

- PHP Native dengan pola MVC sederhana
- MySQL / MariaDB
- PDO dengan prepared statement
- Bootstrap 5 melalui CDN
- Bootstrap Icons
- Google Fonts: Poppins
- Laragon atau Apache + MySQL

## Menjalankan secara lokal

### 1. Persiapan server

Pastikan **Apache** dan **MySQL** pada Laragon sudah aktif.

### 2. Database

Import file [`eka-fashion.sql`](eka-fashion.sql) melalui phpMyAdmin. File tersebut otomatis membuat database:

```sql
eka-fashion
```

Konfigurasi default pada [`config/database.php`](config/database.php):

```php
host: 127.0.0.1
port: 3306
database: eka-fashion
username: root
password: kosong
```

### 3. Jalankan aplikasi

Letakkan folder project di `C:\laragon\www\eka-fashion`, lalu buka:

```text
http://localhost/eka-fashion/
```

Jika menggunakan virtual host Laragon, sesuaikan URL dengan domain lokal yang dibuat Laragon.

## 🔐 Akun demo

| Role | Username | Password | Akses |
|---|---|---|---|
| Admin | `admin` | `password` | Semua modul dan laporan |
| Kasir | `kasir` | `password` | POS dan transaksi |

> Untuk penggunaan nyata, segera ganti password demo. Password user disimpan menggunakan `password_hash()`.

## Alur transaksi

1. Buka menu **Kasir / POS**.
2. Klik produk untuk memasukkannya ke keranjang.
3. Pastikan jumlah tidak melebihi stok.
4. Masukkan nomor HP member jika transaksi menggunakan pelanggan terdaftar.
5. Pilih metode pembayaran.
6. Untuk **Cash**, masukkan nominal seperti `10.000` atau `1.000.000`.
7. Sistem menghitung kembalian dan menolak pembayaran jika uang kurang.
8. Klik **Konfirmasi & bayar**.
9. Cetak struk atau simpan sebagai PDF.

## Struktur project

```text
eka-fashion/
├── app/
│   ├── controllers/       # Alur aplikasi dan validasi akses
│   ├── models/            # Model data sederhana
│   └── views/             # Halaman dan partial tampilan
├── assets/css/            # Tema dan responsive styling
├── config/
│   ├── database.php       # Koneksi PDO
│   ├── helpers.php        # Auth, flash, redirect, format Rupiah
│   └── routes.php         # Routing berbasis ?page=
├── uploads/products/      # Gambar produk
├── eka-fashion.sql        # Struktur dan data awal database
├── index.php              # Front controller
└── README.md
```

## Route penting

```text
?page=dashboard
?page=kasir
?page=produk
?page=pelanggan
?page=users
?page=laporan
?page=laporan/print&month=11&year=2026
```

## Catatan keamanan dan operasional

- Endpoint admin dilindungi `require_admin()`, bukan hanya disembunyikan dari menu.
- Query database menggunakan prepared statement pada proses input utama.
- Password tidak disimpan sebagai teks biasa.
- Upload gambar produk dibatasi JPG, PNG, dan WebP maksimal 2 MB.
- QRIS pada aplikasi adalah QR demo untuk simulasi, bukan pembayaran nyata.
- Pastikan folder `uploads/products/` tersedia dan dapat ditulis oleh Apache.
- Setelah perubahan JavaScript, gunakan `Ctrl + F5` untuk memuat versi terbaru.

## Pengembangan berikutnya

- Integrasi payment gateway nyata.
- Export PDF server-side menggunakan Dompdf.
- Grafik penjualan harian dan perbandingan antarbulan.
- Modul pembelian stok dan supplier.
- Backup database otomatis.

## Lisensi

Project ini dibuat untuk kebutuhan pembelajaran dan pengembangan sistem kasir Eka Fashion.

<div align="center">

**Eka Fashion — Simple tools for a more graceful retail workflow.** ✦

</div>
