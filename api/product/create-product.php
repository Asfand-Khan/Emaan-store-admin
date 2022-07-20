<?php

require_once("../config.php");

if (isset($_POST["btncreate-product"])) {
    $title = $_POST["title"];
    $shortdesc = $_POST["shortdesc"];
    $longdesc = $_POST["longdesc"];
    $price = $_POST["price"];
    $unit = $_POST["unit"];
    $discount = $_POST["discount"];
    $brand = $_POST["brand"];
    $category = $_POST["category"];
    $image = $_FILES["image"];

    // check if brand already exists
    $brandId = checkbrand($brand);
    // check if category already exists
    $catId = checkcategory($category);


    $filename = basename($image["name"]);
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $newfilename = $title . "main" . md5($filename) . "." . $extension;
    $path = "../../images/main/" . $newfilename;
    $isImageUploaded;
    if (!isset($image["name"]) == null) {
        if (!file_exists("../../images/main")) {
            mkdir("../../images/main");
            $isImageUploaded = move_uploaded_file($image["tmp_name"], $path);
        } else {
            $isImageUploaded = move_uploaded_file($image["tmp_name"], $path);
        }
    } else {
        echo "<script>alert('Please insert image first')</script>";
    }

    if ($isImageUploaded) {
        $sql = "INSERT INTO `es_product` (`prod_id`, `brand_id`, `cat_id`, `prod_title`, `prod_desc`, `prod_longdesc`, `prod_unit`, `prod_price`, `prod_discount`, `prod_src`) VALUES (NULL,$brandId,$catId,'$title','$shortdesc','$longdesc',$unit,$price,$discount, '$newfilename')";


        $query = mysqli_query($con, $sql);
        if ($query) {
            header("Location: http://localhost/Emaan%20Store%20Admin/product.php");
        } else {
            echo "Error in SQl";
        }
    }
}
function checkbrand($bnd)
{
    $con = mysqli_connect("localhost", "root", "", "emaanstore");
    $sql = "SELECT `brand_id` FROM `es_brand` WHERE `es_brand`.`brand_name`='$bnd'";
    $result =  mysqli_query($con, $sql);
    if (mysqli_num_rows($result) == 0) {
        $newBrandSql = "INSERT INTO `es_brand`(`brand_name`) VALUES ('$bnd')";
        $newBrand = mysqli_query($con, $newBrandSql);
        if ($newBrand) {
            return checkbrand($bnd);
        }
    } else {
        while (($row = $result->fetch_assoc()) !== null) {
            if ($row['brand_id']) {
                return $row['brand_id'];
            }
        }
    }
}
function checkcategory($cat)
{
    $con = mysqli_connect("localhost", "root", "", "emaanstore");
    $sql = "SELECT `cat_id` FROM `es_category` WHERE `es_category`.`cat_name`='$cat'";
    $result =  mysqli_query($con, $sql);
    if (mysqli_num_rows($result) == 0) {
        $newCatSql = "INSERT INTO `es_category`(`cat_name`) VALUES ('$cat')";
        $newCat = mysqli_query($con, $newCatSql);
        if ($newCat) {
            return checkcategory($cat);
        }
    } else {
        while (($row = $result->fetch_assoc()) !== null) {
            if ($row['cat_id']) {
                return $row['cat_id'];
            }
        }
    }
}
