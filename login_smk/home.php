<?php
session_start();
    if (!isset($_SESSION['user'])) {
        header("location: index.php");
        exit;
    }
?>
<div class="container">
<link rel="stylesheet" href="style.css">
<h1>Selamat Datang <?php echo $_SESSION['user']; ?>!</h1>
<center><a href="logout.php">Logout</a></center>
</div>
