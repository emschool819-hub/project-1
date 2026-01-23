<?php
include "db.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (firstname, lastname, username, email, password) 
        VALUES ('$fname', '$lname', '$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.html");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
