<?php
session_start();
session_destroy();

header('location: ../../pages/Homepage/Homepage.php');
exit;
?>