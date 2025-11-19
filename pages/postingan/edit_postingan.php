<?php
require_once "../../config/db-connection.php";

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM posts WHERE id = $id");
$post = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Postingan</title>
</head>
<body>

<h2>Edit Postingan</h2>

<form action="../../actions/postingan/update_postingan.php" method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?= $post['id'] ?>">

    <label>Judul:</label><br>
    <input type="text" name="title" value="<?= htmlspecialchars($post['title']) ?>" required><br><br>

    <label>Gambar Baru (opsional):</label><br>
    <input type="file" name="gambar" accept="image/*"><br>
    <small>Gambar sekarang:</small><br>
    <img src="/<?= $post['image_path'] ?>" width="150"><br><br>

    <label>Isi Postingan:</label><br>
    <textarea name="content" rows="8" cols="50" required><?= htmlspecialchars($post['content']) ?></textarea><br><br>

    <button type="submit">Update</button>

</form>

</body>
</html>
