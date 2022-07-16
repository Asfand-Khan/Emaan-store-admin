<?php
include('./config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($con, "DELETE FROM es_brand WHERE `es_brand`.`brand_id` = $id");
    header('Location: http://localhost/Emaan%20Store%20Admin/brand.php');
} else {
    echo "<script>alert('Error in your SQL Syntex ... ')</script>";
}
