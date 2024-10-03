<?php
include 'config.php';

$Fname = mysqli_real_escape_string($conn, $_POST['firstname']);
$Lname = mysqli_real_escape_string($conn, $_POST['lastname']);
$U_name = mysqli_real_escape_string($conn, $_POST['username']);
$Pass = mysqli_real_escape_string($conn, $_POST['Password']);
$ADD = mysqli_real_escape_string($conn, $_POST['Address']);
$Email = mysqli_real_escape_string($conn, $_POST['email']);
$Line = mysqli_real_escape_string($conn, $_POST['lineid']);

$Pass = password_hash($Pass, PASSWORD_DEFAULT);


$sql = "INSERT INTO users (firstname, lastname, username, password, address, email, line_id) 
        VALUES ('$Fname', '$Lname', '$U_name', '$Pass', '$ADD', '$Email', '$Line')";


if (mysqli_query($conn, $sql)) {
    header('Location: ./Login.php');
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
