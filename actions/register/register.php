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
        echo "<script>alert('Semua field harus diisi!'); history.back();</script>";
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
            // Redirect ke homepage.html setelah register berhasil
            header("Location: Homepage.html");
            exit();
        } else {
            echo "<script>alert('Gagal registrasi: " . $stmt->error . "'); history.back();</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Gagal menyiapkan query: " . $connection->error . "'); history.back();</script>";
    }
} else {
    echo "<script>alert('Form belum dikirim!'); history.back();</script>";
}
?>
