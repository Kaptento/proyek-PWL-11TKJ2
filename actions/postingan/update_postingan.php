<?php
require_once "../../config/db-connection.php";

$id      = $_POST['id'];
$title   = mysqli_real_escape_string($connection, $_POST['title']);
$content = mysqli_real_escape_string($connection, $_POST['content']);

// Ambil postingan lama dulu
$old = mysqli_query($connection, "SELECT * FROM posts WHERE id = $id");
$oldData = mysqli_fetch_assoc($old);

// Jika gambar baru diupload
if(isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0){
    $target_dir = "../../images/posts/";
    $image_name = time() . "_" . basename($_FILES["gambar"]["name"]);
    $target_file = $target_dir . $image_name;

    if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)){
        $image_path = "images/posts/" . $image_name;

        // Hapus gambar lama jika ada
        if(!empty($oldData['image_path']) && file_exists("../../" . $oldData['image_path'])){
            unlink("../../" . $oldData['image_path']);
        }
    }
} else {
    // Tidak ganti gambar
    $image_path = $oldData['image_path'];
}

$sql = "UPDATE posts SET 
        title='$title', 
        content='$content',
        image_path='$image_path'
        WHERE id=$id";

if(mysqli_query($connection, $sql)){
    header("Location: ../../pages/postingan/postingan.php");
    exit;
} else {
    echo "Gagal update postingan: " . mysqli_error($connection);
}
