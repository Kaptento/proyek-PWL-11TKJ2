<?php
<<<<<<< HEAD
session_start(); // MULAI SESSION DI SINI

require_once '../../config/db-connection.php'; // koneksi database

if (isset($_POST['store'])) {
=======
session_start();
require_once '../../config/db-connection.php';

if (isset($_POST['store'])) {

>>>>>>> louis/impelemet-tambah-postingan
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    if (empty($name) || empty($email) || empty($password)) {
        echo "<script>alert('Semua field harus diisi!'); history.back();</script>";
        exit();
    }

    $passwordHashed = password_hash($password, PASSWORD_BCRYPT);

    $query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $connection->prepare($query);

    if ($stmt) {
        $stmt->bind_param('sss', $name, $email, $passwordHashed);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
<<<<<<< HEAD
            // SET SESSION TANPA MEMANGGIL LAGI session_start()
            $_SESSION['user'] = $name;
            $_SESSION['user_id'] = $stmt->insert_id;

=======

            // ✅ Buat session login otomatis setelah register
            $_SESSION['user'] = [
                'name' => $name,
                'email' => $email
            ];

            // ✅ Redirect
>>>>>>> louis/impelemet-tambah-postingan
            header("Location: ../../pages/Homepage/Homepage.php");
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
