<?php
include('./config.php');

if (isset($_POST['brandbtn'])) {

    $brand =  $_POST['brand'];

    mysqli_query($con, "INSERT INTO `es_brand` (`brand_name`) VALUES ('$brand')");
    header("Location: http://localhost/Emaan%20Store%20Admin/brand.php");
} else {
    echo "<script>alert('Error in your SQL Syntex ... ')</script>";
}
