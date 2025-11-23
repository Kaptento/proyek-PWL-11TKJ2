<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Posting</title>
    <link rel="stylesheet" href="../../tambah_postingan.css"> 
</head>
<body>

    <div class="main-container">

        <header class="top-bar">
            <a href="#" class="back-button">
                <span style="font-size: 1.2em;">&lt;</span> Kembali
            </a>
            
        </header>

        <div class="form-wrapper">
            <form action="../../actions/postingan/tambah_postingan.php" method="post" enctype="multipart/form-data">
                
                <input type="hidden" name="id" value="ID_PENGGUNA_AKTIF"> 

                <div class="content-area">
                    
                    <div class="image-upload-area">
                        <div class="upload-placeholder">
                            Unggah Gambar
                        </div>
                        <input type="file" name="gambar" accept="image/*" class="file-input">
                    </div>

                    <div class="text-input-area">
                        
                        <div class="input-group">
                            <input type="text" name="title" required placeholder="Judul...">
                        </div>

                        <div class="input-group content-group">
                            <textarea name="content" required placeholder="Isi berita..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="button-area">
                    <button type="submit" class="submit-button">Unggah Postingan</button>
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
            }
        });
    </script>

</body>
</html>