<?php
require_once "../../config/db-connection.php";

$id = $_GET['id'];

// ambil data untuk hapus gambar
$get = mysqli_query($connection, "SELECT * FROM posts WHERE id = $id");
$data = mysqli_fetch_assoc($get);

// hapus gambar jika ada
if(!empty($data['image_path']) && file_exists("../../" . $data['image_path'])){
    unlink("../../" . $data['image_path']);
}

// hapus record postingan
mysqli_query($connection, "DELETE FROM posts WHERE id = $id");

header("Location: ../../pages/postingan/postingan.php");
exit;
?>
