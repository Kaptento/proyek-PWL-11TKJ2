<?php
require_once "../../config/db-connection.php";

// Pastikan ada ID
if (!isset($_GET['id'])) {
    die("Post tidak ditemukan.");
}

$id = intval($_GET['id']);

// Ambil data postingan
$query = mysqli_query($connection, "SELECT * FROM posts WHERE id = $id");

if (mysqli_num_rows($query) == 0) {
    die("Post tidak ditemukan.");
}

$post = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($post['title']) ?></title>

    <link rel="stylesheet" href="../../Homepage.css">
</head>
<body>

<!-- Sidebar -->
<?php include '../../components/sidebar.php' ?>

<div style="margin-left: 300px; margin-top: 40px;">

    <!-- Judul postingan -->
    <h1><?= htmlspecialchars($post['title']) ?></h1>

    <!-- Gambar postingan -->
    <?php if (!empty($post['image_path'])): ?>
        <img src="/<?= $post['image_path'] ?>" alt="gambar" style="max-width: 100%; height: auto;">
    <?php endif; ?>

    <br><br>

    <!-- Isi lengkap -->
    <div>
        <?= nl2br(htmlspecialchars($post['content'])) ?>
    </div>

    <br><br>

    <!-- Tombol kembali -->
    <a href="postingan.php">← Kembali</a>

</div>

</body>
</html>
