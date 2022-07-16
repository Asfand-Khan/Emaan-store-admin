<?php
include('../config.php');

if (isset($_POST['categorybtn'])) {

    $cat =  $_POST['category'];

    mysqli_query($con, "INSERT INTO `es_category` (`cat_name`) VALUES ('$cat')");
    header("Location: http://localhost/Emaan%20Store%20Admin/category.php");
} else {
    echo "<script>alert('Error in your SQL Syntex ... ')</script>";
}
