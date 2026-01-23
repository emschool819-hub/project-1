<?php
include "db.php";
session_start();

$user = $_POST['user'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$user' OR email='$user'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row && password_verify($password, $row['password'])) {
    $_SESSION['user'] = $row['username'];
    header("Location: dashboard.php");
} else {
    echo "<script>alert('Invalid login');window.location='index.html';</script>";
}
?>
