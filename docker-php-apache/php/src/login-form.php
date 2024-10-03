<?php

include 'config.php';

$username = mysqli_real_escape_string($conn,$_POST['username']);
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_assoc($result);
    $Hashedpass = $row['password'];

    if(password_verify($pass,$Hashedpass)){
        header('Location: ./Main.php');
        exit();
    } else {
        echo "Invalid password";
    }
} else {
    echo "User not found!!";
}


mysqli_close($conn);

?>