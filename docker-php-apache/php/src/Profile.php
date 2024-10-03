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
    <link rel="stylesheet" href="profile.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    
    <div class="head">
        <div class="logo">
            <img src="Logo.PNG" alt="#">

            <a href="Login.php" class="out">
                <i class='bx bx-log-out' ></i>
                <span class="itemout">Logout</span>
            </a>
        </div>
    </div>

    <div class="side-nav">
        <ul>
            <li>
                <div class="menu">
                    <i class='bx bx-menu-alt-left'></i>
                    <span class="itemM">Menu</span>
                </div>
            </li>
            <li>
                <a href="Profile.php" class="menu1">
                    <i class='bx bx-user-circle' ></i>
                    <span class="item">Profile</span>
                </a>
            </li>
            <li>
                <a href="Main.php" class="menu1">
                    <i class='bx bx-store-alt' ></i>
                    <span class="item">Shop</span>
                </a>
            </li>
            <li>
                <a href="Cart.php" class="menu1">
                    <i class='bx bx-cart' ></i>
                    <span class="item">Cart</span>
                </a>
            </li>
            <li>
                <a href="Order.php" class="menu1">
                    <i class='bx bx-shopping-bag' ></i>
                    <span class="item">Order</span>
                </a>
            </li>
        </ul>
    </div>

</body>
</html>