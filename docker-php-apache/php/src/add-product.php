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
    <link rel="stylesheet" href="add1.css">
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

    <div class="con">
        
        <div class="creat">
            <span class="text">Add Product</span>

            <form action="add-form.php" id="addProduct" method="post" enctype="multipart/form-data">
                <div class="add-n">
                    <span class="item-p">Name of product :</span>
                    <input type="text" placeholder="Name of Product" name="name" required>
                    
                    <span class="item-p">Price :</span>
                    <input type="text" placeholder="Price" name="price" required>
                </div>

                <div class="add-D">
                    <span class="item-d">Details of product :</span><br>
                    <textarea name="details" rows="10" cols="30"></textarea>
                    
                    <div class="quan">
                        <span class="item-q">Quantity :</span>
                        <input type="text" placeholder="Quantity" name="quantity" require>
                    
                        <div class="select">
                            <select id="itemType" name="itemType">
                                <option value="Pen">Pen</option>
                                <option value="Pencil">Pencil</option>
                                <option value="Colors">Colors</option>
                                <option value="Books">Books</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="add-U">
                    <figure class="img-con">
                        <img id="chosen-image">
                        <figcaption id="file-name"></figcaption>
                    </figure>

                    <input type="file" id="upload" name="filename" accept="image/gif, image/png, image/jpeg">
                    <label for="upload"><i class='bx bx-upload'></i>Upload File</label>
                </div>

                <div class="add-B">
                    <button class="btn" type="submit">Creat</button>
                </div>

            </form>
        </div>

        <div class="show-creat">

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


    <script src="upload.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function (){
            $("#addProduct").submit(function(e){
                e.preventDefault();
                let formUrl = $(this).attr("action");
                let method = $(this).attr("method");
                let formData = new FormData(this);

                $.ajax({
                    url: formUrl,
                    type: method,
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data){
                        let result = JSON.parse(data);
                        if(result.status === "success"){
                            Swal.fire("Success!", result.msg, "success").then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "add-product.php";
                                }
                            });
                        } else {
                            Swal.fire("Error!", result.msg, "error").then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "add-product.php";
                                }
                            });
                        }
                    },
                    error: function(xhr, status, error){
                        console.error("Ajax request failed:", status, error);
                        Swal.fire("Error!", "Could not connect to server.", "error");
                    }
                });
            })
        })
    </script>
</body>
</html>