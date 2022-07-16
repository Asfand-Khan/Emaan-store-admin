<?php
include('../config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($con, "DELETE FROM es_category WHERE `es_category`.`cat_id` = $id");
    header('Location: http://localhost/Emaan%20Store%20Admin/category.php');
} else {
    echo "<script>alert('Error in your SQL Syntex ... ')</script>";
}
