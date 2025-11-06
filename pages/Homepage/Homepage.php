<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../Homepage.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
</head>
<body>
    <!-- Logo -->
     <h1>
            <form>
                <div class="search">
                    <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#000" d="M9.5 16q-2.725 0-4.612-1.888T3 9.5t1.888-4.612T9.5 3t4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l5.6 5.6q.275.275.275.7t-.275.7t-.7.275t-.7-.275l-5.6-5.6q-.75.6-1.725.95T9.5 16m0-2q1.875 0 3.188-1.312T14 9.5t-1.312-3.187T9.5 5T6.313 6.313T5 9.5t1.313 3.188T9.5 14"/>Search</svg>
                    <input class="search-input" type="search" placeholder="Search">
                </div>
            </form>
     </h1>

     
    <?php include '../../components/sidebar.php'?>
     
    <div class="wrapper">
        <div class="section">
            <div class="box-area">
            </div>
        </div>
    </div>

    <!-- Scroll -->
    <div class="content-box">
    <div class="card">
        <img src="/foto/pexels-pauldeetman-2695679.jpg" alt="gambar">
        <div class="card-info">
            <h3>KASUS PENYELUNDUPAN NARKOBA DI KOTA LOS ANGELES AMERIKA SERIKAT SEMAKIN MARAK...</h3>
            <p>Dipublikasikan ...</p>
        </div>
        <div class="card-icons">
            <i class="fa fa-bookmark"></i>
            <i class="fa fa-share-alt"></i>
            <i class="fa fa-user"></i>
        </div>
    </div>

    <div class="card">
        <img src="/foto/ChatGPT Image Apr 9, 2025, 12_12_34 AM.png" alt="gambar">
        <div class="card-info">
            <h3>Judul</h3>
            <p>Dipublikasikan ...</p>
        </div>
        <div class="card-icons">
            <i class="fa fa-bookmark"></i>
            <i class="fa fa-share-alt"></i>
            <i class="fa fa-user"></i>
        </div>
    </div>

    <div class="card">
        <img src="/foto/ChatGPT Image Apr 9, 2025, 12_12_34 AM.png" alt="gambar">
        <div class="card-info">
            <h3>Judul</h3>
            <p>Dipublikasikan ...</p>
        </div>
        <div class="card-icons">
            <i class="fa fa-bookmark"></i>
            <i class="fa fa-share-alt"></i>
            <i class="fa fa-user"></i>
        </div>
    </div>

    <div class="card" >
        <img src="/foto/ChatGPT Image Apr 9, 2025, 12_12_34 AM.png" alt="gambar">
        <div class="card-info">
            <h3>Judul</h3>
            <p>Dipublikasikan ...</p>
        </div>
        <div class="card-icons">
            <i class="fa fa-bookmark"></i>
            <i class="fa fa-share-alt"></i>
            <i class="fa fa-user"></i>
        </div>
    </div>

    <div class="card" >
        <img src="/foto/ChatGPT Image Apr 9, 2025, 12_12_34 AM.png" alt="gambar">
        <div class="card-info">
            <h3>Judul</h3>
            <p>Dipublikasikan ...</p>
        </div>
        <div class="card-icons">
            <i class="fa fa-bookmark"></i>
            <i class="fa fa-share-alt"></i>
            <i class="fa fa-user"></i>
        </div>
    </div>

    <div class="card" >
        <img src="/foto/ChatGPT Image Apr 9, 2025, 12_12_34 AM.png" alt="gambar">
        <div class="card-info">
            <h3>Judul</h3>
            <p>Dipublikasikan ...</p>
        </div>
        <div class="card-icons">
            <i class="fa fa-bookmark"></i>
            <i class="fa fa-share-alt"></i>
            <i class="fa fa-user"></i>
        </div>
    </div>

    <div class="card" >
        <img src="/foto/ChatGPT Image Apr 9, 2025, 12_12_34 AM.png" alt="gambar">
        <div class="card-info">
            <h3>Judul</h3>
            <p>Dipublikasikan ...</p>
        </div>
        <div class="card-icons">
            <i class="fa fa-bookmark"></i>
            <i class="fa fa-share-alt"></i>
            <i class="fa fa-user"></i>
        </div>
    </div>
</div>





<!-- Mailbox -->
<div class="mailbox">
    <a href="#"><img src="/foto/material-symbols--mail.png" alt=""></a>
</div>
    
<!-- User Account -->
 <div class="account">
    <a href="../../actions/logout/logout.php"><img src="/foto/material-symbols--person.png" alt=""></a> 
    <!-- ../../actions/logout/logout.php -->
 </div>

</body>
</html>