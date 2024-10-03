<?php

session_start();
include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAB SHOP</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    

</head>
<body>

    <div class="logo">
        <img src="Logo.PNG" alt="#">
    </div>
      
    <div class="login">
            
        <h1>Login</h1>
        <form action="login-form.php" method="post">
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
                <i class='bx bx-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bx-lock' ></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox" > Remember me</label>
                <a href="">Forgot password?</a>
            </div>

            <button class="btn" type="submit" >Login</button>
        </form>
            
        <div class="register">
            <p>Don't have an account? <a href="Register.php">Register</a></p> 
        </div>

    </div> 

</body>
</html>