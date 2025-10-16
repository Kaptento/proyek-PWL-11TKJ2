<?php
require_once '../../config/db-connection.php'; // koneksi database

// Cek apakah tombol register ditekan
if (isset($_POST['store'])) {
    // Ambil input user dan bersihkan
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    // Validasi sederhana
    if (empty($name) || empty($email) || empty($password)) {
        echo "Semua field harus diisi!";
        exit();
    }

    // Hash password
    $passwordHashed = password_hash($password, PASSWORD_BCRYPT);

    // Siapkan query insert
    $query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $connection->prepare($query);

    if ($stmt) {
        $stmt->bind_param('sss', $name, $email, $passwordHashed);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Registrasi berhasil! Silakan login.";
        } else {
            echo "Gagal registrasi: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Gagal menyiapkan query: " . $connection->error;
    }
} else {
    echo "Form belum dikirim!";
}
?>
