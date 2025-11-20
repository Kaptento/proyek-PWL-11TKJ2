<?php
session_start();


require_once "../../config/db-connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $title   = mysqli_real_escape_string($connection, $_POST['title']);
    $content = mysqli_real_escape_string($connection, $_POST['content']);
    
    // Default jika tidak ada gambar
    $user_id = $_SESSION['user']['id'];
    $image_path = null;

    // Upload gambar
    if(isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0){
        $target_dir = "../../images/posts/";
        $image_name = time() . "_" . basename($_FILES["gambar"]["name"]); // biar unik
        $target_file = $target_dir . $image_name;


        if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)){
            $image_path = "images/posts/" . $image_name;  
        }
    }

    // Simpan postingan
    $sql = "INSERT INTO posts (title, content, user_id, image_path)
            VALUES ('$title', '$content', '$user_id', '$image_path')";

    if(mysqli_query($connection, $sql)){
        header("Location: ../../pages/postingan/postingan.php");
        exit;
    } else {
        echo "Gagal menyimpan postingan: " . mysqli_error($connection);
    }

    mysqli_close($connection);
}
?>
