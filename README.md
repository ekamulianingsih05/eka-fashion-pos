# Eka Fashion POS

Aplikasi Point of Sale sederhana berbasis PHP Native MVC dan MySQL.

## Menjalankan di Laragon

1. Pastikan Apache dan MySQL Laragon aktif.
2. Buka `http://localhost/phpmyadmin`, lalu import file `eka-fashion.sql` (database yang dipakai adalah `eka-fashion`).
3. Pastikan konfigurasi di `config/database.php` sesuai: host `127.0.0.1`, port default MySQL Laragon, user `root`, password kosong.
4. Buka `http://localhost/eka-fashion/`.

Login demo: `admin / password` atau `kasir / password`.

## Struktur penting

- `index.php` adalah front controller di root.
- `app/controllers` berisi controller per fitur.
- `app/models` disiapkan untuk model per tabel.
- `app/views` berisi halaman dan partial template.
- `config` berisi koneksi, route, dan helper.
- `assets/css/style.css` berisi override visual cream-putih.

Hak akses diperiksa di controller. Menu admin dan endpoint admin tidak dapat dipakai oleh kasir.

## Catatan PDF

Halaman laporan memiliki tombol cetak yang dapat dipilih sebagai “Save to PDF” dari dialog browser. Untuk kebutuhan Dompdf, jalankan `composer require dompdf/dompdf` lalu integrasikan generator PDF pada `LaporanController`; aplikasi inti tidak membutuhkan Composer untuk berjalan di Laragon.
