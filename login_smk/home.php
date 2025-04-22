<?php
session_start();
    if (!isset($_SESSION['user'])) {
        header("location: index.php");
        exit;
    }
?>
<h1>Selamat Datang <?php echo $_SESSION['user']; ?>!</h1>
<a href="logout.php">Logout</a>