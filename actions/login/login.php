<?php
$host = "localhost";
$username = "root";
$password = ""; // Kosongkan jika tidak ada password
$database = "blogger";

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil!";

// Menutup koneksi (opsional, biasanya dilakukan di akhir skrip)
// mysqli_close($conn);
?>
