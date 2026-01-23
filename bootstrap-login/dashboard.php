<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.html");
}
?>

<h2>Welcome, <?php echo $_SESSION['user']; ?></h2>
<a href="logout.php">Logout</a>
