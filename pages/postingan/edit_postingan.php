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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Postingan</title>
    <link rel="stylesheet" href="../../edit_postingan.css"> 
</head>
<body>

    <div class="main-container">

        <header class="top-bar">
            <a href="postingan.php">
                <span style="font-size: 1.2em;">&lt;</span> Kembali
            </a>
            
        </header>

        <div class="form-wrapper">
            <h2>Edit Postingan</h2> 
            <form action="../../actions/postingan/update_postingan.php" method="post" enctype="multipart/form-data" class="edit-form">

                <input type="hidden" name="id" value="<?= $post['id'] ?>">

                <div class="content-area">
                    
                    <div class="image-edit-area">
                        <small>Gambar sekarang:</small>
                        <?php if ($post['image_path']): ?>
                            <img src="/<?= htmlspecialchars($post['image_path']) ?>" alt="Gambar Postingan Saat Ini" class="current-image">
                        <?php else: ?>
                            <div class="no-image-placeholder">Tidak ada gambar</div>
                        <?php endif; ?>

                        <div class="upload-new-image-section">
                            <small>Unggah Gambar Baru (opsional):</small>
                            <div class="upload-placeholder">
                                Pilih Gambar Baru
                            </div>
                            <input type="file" name="gambar" accept="image/*" class="file-input">
                        </div>
                    </div>

                    <div class="text-input-area">
                        
                        <div class="input-group">
                            <input type="text" name="title" value="<?= htmlspecialchars($post['title']) ?>" required placeholder="Judul...">
                        </div>

                        <div class="input-group content-group">
                            <textarea name="content" rows="8" cols="50" required placeholder="Isi berita..."><?= htmlspecialchars($post['content']) ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="button-area">
                    <button type="submit" class="submit-button">Update Postingan</button>
                </div>

            </form>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const placeholder = document.querySelector('.upload-placeholder');
            const fileInput = document.querySelector('.file-input');
            
            if (placeholder && fileInput) {
                placeholder.addEventListener('click', () => {
                    fileInput.click();
                });

                fileInput.addEventListener('change', () => {
                    if (fileInput.files.length > 0) {
                        placeholder.textContent = fileInput.files[0].name;
                    } else {
                        placeholder.textContent = 'Pilih Gambar Baru';
                    }
                });
            }
        });
    </script>

</body>
</html>