<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../setting.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan</title>
</head>
<body>
<?php include '../../components/sidebar.php'?>

   <!-- Logo -->
     <h1>
            <form>
                <div class="search">
                    <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#000" d="M9.5 16q-2.725 0-4.612-1.888T3 9.5t1.888-4.612T9.5 3t4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l5.6 5.6q.275.275.275.7t-.275.7t-.7.275t-.7-.275l-5.6-5.6q-.75.6-1.725.95T9.5 16m0-2q1.875 0 3.188-1.312T14 9.5t-1.312-3.187T9.5 5T6.313 6.313T5 9.5t1.313 3.188T9.5 14"/>Search</svg>
                    <input class="search-input" type="search" placeholder="Search">
                </div>
            </form>
     </h1>

    <!-- Panel putih -->

    <div style="width: 100%; max-width: 900px; background: #ffffff; padding: 20px; box-sizing: border-box;">

        <!-- ITEM 1 -->
        <div style="background: #e6e6e6; padding: 25px; border-radius: 8px; margin-bottom: 14px; margin-left: 300px; margin-right: -900px; display: flex; justify-content: space-between; align-items: center; cursor:pointer;">
            <div style="display: flex; align-items: center; gap: 10px;">
                <span style="font-size: 26px;">👤</span>
                <span style="font-size: 26px;">Pengaturan akun</span>
            </div>
            <span style="font-size: 26px;">›</span>
        </div>

        <!-- ITEM 2 -->
        <div style="background: #e6e6e6; padding: 25px; border-radius: 8px; margin-bottom: 14px; margin-left: 300px; margin-right: -900px; display: flex; justify-content: space-between; align-items: center; cursor:pointer;">
            <div style="display: flex; align-items: center; gap: 10px;">
                <span style="font-size: 26px;">🛡️</span>
                <span style="font-size: 26px;">Kebijakan dan privasi</span>
            </div>
            <span style="font-size: 26px;">›</span>
        </div>

        <!-- ITEM 3 -->
        <div style="background: #e6e6e6; padding: 25px; border-radius: 8px; margin-bottom: 14px; margin-left: 300px; margin-right: -900px; display: flex; justify-content: space-between; align-items: center; cursor:pointer;">
            <div style="display: flex; align-items: center; gap: 10px;">
                <span style="font-size: 26px;">💬</span>
                <span style="font-size: 26px;">Komentar publik dan saran</span>
            </div>
            <span style="font-size: 26px;">›</span>
        </div>

        <!-- ITEM 4 -->
        <div style="background: #e6e6e6; padding: 25px; border-radius: 8px; display: flex; margin-left: 300px; margin-right: -900px; justify-content: space-between; align-items: center; cursor:pointer;">
            <div style="display: flex; align-items: center; gap: 10px;">
                <span style="font-size: 26px;">ℹ️</span>
                <span style="font-size: 26px;">Tentang Kami</span>
            </div>
            <span style="font-size: 26px;">›</span>
        </div>

    </div>

    <div class="mailbox">
    <a href="#"><img src="/foto/material-symbols--mail.png" alt=""></a>
</div>
    
<!-- User Account -->
 <div class="account">
    <a href="#"><img src="/foto/material-symbols--person.png" alt=""></a>
 </div>



</body>
</html>
