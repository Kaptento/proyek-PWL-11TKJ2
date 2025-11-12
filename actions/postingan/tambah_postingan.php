<?php
session_start();

$user_id = $_SESSION['user']['id'];

require_once "../../config/db-connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Ambil input dan escape
    // $author  = mysqli_real_escape_string($connection, $_POST['id']);
    $title   = mysqli_real_escape_string($connection, $_POST['title']);
    $content = mysqli_real_escape_string($connection, $_POST['content']);

    // Upload gambar ke folder 'foto' (opsional)
    if(isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0){
        $target_dir = "../../foto-users/"; // folder 'foto' di proyek
        $image_name = basename($_FILES["gambar"]["name"]);
        $target_file = $target_dir . $image_name;

        if(!move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)){
            echo "Gagal meng-upload gambar.";
            exit;
        }
        // Nama file gambar tidak disimpan di database
    }

    // Simpan postingan ke database
    $sql = "INSERT INTO posts (title, content, user_id) VALUES ('$title', '$content', '$user_id')";

    if(mysqli_query($connection, $sql)){
        echo "Postingan berhasil disimpan!";
    } else {
        echo "Gagal menyimpan postingan: " . mysqli_error($connection);
    }

    mysqli_close($connection);
}
?>
