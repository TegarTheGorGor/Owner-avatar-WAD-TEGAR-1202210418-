<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$DB = mysqli_connect('localhost:3307', 'root', '', 'modul4_wad');
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$DB) {
    die("Koneksi gagal terhubung " . mysqli_connect_error());
}
// 
 
?>