<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Posting</title>
</head>
<body>

    <h2>Tambah Postingan</h2>

    <form action="../../actions/postingan/tambah_postingan.php" method="post" enctype="multipart/form-data">

        <label>Judul:</label><br>
        <input type="text" name="title" required><br><br>

        <!-- <label>Nama Pembuat:</label><br>
        <input type="text" name="id" required><br><br> -->

        <label>Gambar:</label><br>
        <input type="file" name="gambar" accept="image/*"><br><br>

        <label>Isi Postingan:</label><br>
        <textarea name="content" rows="8" cols="50" required></textarea><br><br>

        <button type="submit">Submit</button>

    </form>

</body>
</html>
