<?php
// Ambil data dari database
require_once "../../config/db-connection.php";

// Ambil semua postingan (terbaru di atas)
$result = mysqli_query($connection, "SELECT * FROM posts ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postingan</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../Homepage.css">
</head>
<body>

    <!-- Bagian Logo + Searchbar -->
    <h1>
        <form>
            <div class="search">
                <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#000" d="M9.5 16q-2.725 0-4.612-1.888T3 9.5t1.888-4.612T9.5 3t4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l5.6 5.6q.275.275.275.7t-.275.7t-.7.275t-.7-.275l-5.6-5.6q-.75.6-1.725.95T9.5 16m0-2q1.875 0 3.188-1.312T14 9.5t-1.312-3.187T9.5 5T6.313 6.313T5 9.5t1.313 3.188T9.5 14"/>Search</svg>
                <input class="search-input" type="search" placeholder="Search">
            </div>
        </form>
    </h1>

    <!-- Sidebar -->
    <?php include '../../components/sidebar.php' ?>

    <div class="wrapper">
        <div class="section">
            <div class="box-area">
            </div>
        </div>
    </div>

    <!-- Daftar Postingan -->
    <div class="content-box">

        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="card">

                <!-- Tampilkan gambar -->
                <?php if (!empty($row['image_path'])): ?>
                    <img src="/<?= $row['image_path'] ?>" alt="gambar">
                <?php else: ?>
                    <img src="../../foto-users" alt="gambar">
                <?php endif; ?>

                <div class="card-info">
                    <h3><?= htmlspecialchars($row['title']) ?></h3>
                    <p><?= nl2br(htmlspecialchars(substr($row['content'], 0, 120))) ?>...</p>

                    <!--  TOMBOL LIHAT SELENGKAPNYA (menuju halaman lain) -->
                    <a href="detail.php?id=<?= $row['id'] ?>" class="lihat-btn">
                        Lihat selengkapnya
                    </a>
                </div>

                <div class="card-icons">

                    <!-- Bookmark -->
                    <a href="#" class="icon-btn">
                        <i class="fa fa-bookmark"></i>
                    </a>

                    <!-- Share -->
                    <a href="#" class="icon-btn">
                        <i class="fa fa-share-alt"></i>
                    </a>

                    <!-- EDIT (pakai signal) -->
                    <a href="edit_postingan.php?id=<?= $row['id'] ?>" class="icon-btn">
                        <i class="fa-solid fa-signal"></i>
                    </a>

                    <!-- HAPUS -->
                    <a href="../../actions/postingan/hapus_postingan.php?id=<?= $row['id'] ?>" 
                       class="icon-btn"
                       onclick="return confirm('Yakin mau hapus postingan ini?')">
                        <i class="fa-solid fa-trash"></i>
                    </a>

                </div>

            </div>
        <?php endwhile; ?>

    </div>

</body>
</html>
