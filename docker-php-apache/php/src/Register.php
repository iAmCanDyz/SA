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
    <link rel="stylesheet" href="register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    

</head>
<body>

        <div class="logo">
            <img src="Logo.PNG" alt="#">
        </div>
        
        <div class="login">
                
            <h1>Register</h1>
            <form action="regis-form.php" method="post">
                <div class="Full-name">
                    <input type="text" placeholder="Firstname" name="firstname" require>
                    <input type="text" placeholder="Lastname" name="lastname" require>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" name="Password" required>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Verify Password" name="con-password" required>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Address.." name="Address" require>
                </div>
                <div class="Full-name">
                    <input type="email" placeholder="Email" name="email" require>
                    <input type="text" placeholder="Line ID" name="lineid" require>
                </div>

                <button class="btn" type="submit">Register</button>
            </form>

        </div>

</body>
</html>