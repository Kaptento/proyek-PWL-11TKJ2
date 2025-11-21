<?php
session_start();
?>

<nav>
        <ul>
            
            
            <li class="logo"><img src="/foto/logo bs.png" alt=""></li>
            <?php if (isset($_SESSION['user'])): ?>
                <li><a href="../../pages/Homepage/Homepage.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="#ffffff" fill-rule="evenodd" d="M2.5 4.5v-2h11v2zm0 1.5v3h4.75V6zm6.25 0v3h4.75V6zM2.5 10.5h4.75v3H2.5zm6.25 0v3h4.75v-3zM1 2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1z" clip-rule="evenodd"/></svg> &nbsp; See News</a></li>
                <li><a href="../../pages/postingan/postingan.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="#fffafa" fill-rule="evenodd" d="M3.5 2.5v11h9v-11zM3 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm5 10a.75.75 0 0 1 .75-.75h1.75a.75.75 0 0 1 0 1.5H8.75A.75.75 0 0 1 8 11m-2 1a1 1 0 1 0 0-2a1 1 0 0 0 0 2m2-4a.75.75 0 0 1 .75-.75h1.75a.75.75 0 0 1 0 1.5H8.75A.75.75 0 0 1 8 8M6 9a1 1 0 1 0 0-2a1 1 0 0 0 0 2m2-4a.75.75 0 0 1 .75-.75h1.75a.75.75 0 0 1 0 1.5H8.75A.75.75 0 0 1 8 5M6 6a1 1 0 1 0 0-2a1 1 0 0 0 0 2" clip-rule="evenodd"/></svg> &nbsp; Postingan </a></li>
                <li><a href="favorite.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="#fff" d="M13 15.563V1H3v14.563l5-2.308z"/></svg> &nbsp; Favorit </a></li>
                <li><a href="statistik.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#ffffff" d="M2.02 13.99h4v8.02h-4zm7-3.97h4v11.99h-4zM22 6l-4-4l-4 4h2v16.02h4V6z"/></svg> &nbsp; Statistik </a></li>
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#ffffff" d="M15 23h-4q-.425 0-.712-.288T10 22v-6q0-.425.288-.712T11 15h1v-3H4q-.825 0-1.412-.587T2 10V6q0-.825.588-1.412T4 4h2V3q0-.425.288-.712T7 2h12q.425 0 .713.288T20 3v4q0 .425-.288.713T19 8H7q-.425 0-.712-.288T6 7V6H4v4h8q.825 0 1.413.588T14 12v3h1q.425 0 .713.288T16 16v6q0 .425-.288.713T15 23"/></svg> &nbsp; Theme </a></li>
                <li><a href="../../pages/setting/setting.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#ffffff" d="M12 15.5A3.5 3.5 0 0 1 8.5 12A3.5 3.5 0 0 1 12 8.5a3.5 3.5 0 0 1 3.5 3.5a3.5 3.5 0 0 1-3.5 3.5m7.43-2.53c.04-.32.07-.64.07-.97s-.03-.66-.07-1l2.11-1.63c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.31-.61-.22l-2.49 1c-.52-.39-1.06-.73-1.69-.98l-.37-2.65A.506.506 0 0 0 14 2h-4c-.25 0-.46.18-.5.42l-.37 2.65c-.63.25-1.17.59-1.69.98l-2.49-1c-.22-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64L4.57 11c-.04.34-.07.67-.07 1s.03.65.07.97l-2.11 1.66c-.19.15-.25.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1.01c.52.4 1.06.74 1.69.99l.37 2.65c.04.24.25.42.5.42h4c.25 0 .46-.18.5-.42l.37-2.65c.63-.26 1.17-.59 1.69-.99l2.49 1.01c.22.08.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64z"/></svg> &nbsp; Setting </a></li>
 
            <!-- <li><a href="../../pages/Homepage/Homepage.php"></a>Homepage</li> -->
 
        <?php else: ?>
 
        <a href="../../pages/register/register.php">Register</a>
        <a href="../../pages/login/login.php">Login</a>
 
        <?php endif; ?>

        </ul>
    </nav>

    <!-- Mailbox -->
<div class="mailbox">
    <a href="../../pages/postingan/tambah_postingan.php"><img src="/foto/material-symbols--mail.png" alt=""></a>
</div>
    
<!-- User Account -->
 <div class="account">
    <a href="../../actions/logout/logout.php"><img src="/foto/material-symbols--person.png" alt=""></a> 
    <!-- ../../actions/logout/logout.php -->
 </div>
