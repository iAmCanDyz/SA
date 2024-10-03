<?php

session_start();
include 'config.php';

$name = $_POST['name'];
$price = $_POST['price'];
$detail = $_POST['details'];
$type = $_POST['itemType'];
$filename = $_FILES['filename']['name'];
$quantity = $_POST['quantity'];

$img_tmp = $_FILES['filename']['tmp_name'];
$folder = 'upload/';
$img_location = $folder . $filename;

$query = mysqli_query($conn,"INSERT INTO products (name,type,quantity,filename,price,detail) 
VALUES ('{$name}','{$type}','{$quantity}','{$filename}','{$price}','{$detail}') ") or die('Error');

if($query){
    move_uploaded_file($img_tmp, $img_location);
    echo json_encode(array("status" => "success", "msg" => "Product added successfully!"));
} else {
    echo json_encode(array("status" => "error", "msg" => "Could not save product."));
}

mysqli_close($conn);
?>