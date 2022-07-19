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
    // $image = $_POST["image"];

    // check if brand already exists
    checkbrand($brand);

    // check if category already exists
    checkcategory($category);

    // $path = "../images/" . basename($_FILES["pdimage"]["name"]);
    // $size = $_FILES["pdimage"]["size"];

    // if (move_uploaded_file($_FILES["pdimage"]["tmp_name"], $path)) {

    //     if (mysqli_query($con, "Insert Into producttable(productGroup,productTag,productDepartment,productName,productColor,productImage,productCode,productPrice,productCost,productDescription,productUnit,productOnline) 
    // 	values('$group','$tag','$dept','$name','$color','$path','#dummycode','$price','$cost','$desc','$unit','$online')")) {
    //         echo json_encode(array("message" => "Record Inserted succesfullly"));
    //         header("location:../product.php");
    //     }
    // } else {
    //     c
    // }
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
            checkbrand($bnd);
            exit();
        }
    } else {
        while (($row = $result->fetch_assoc()) !== null) {
            if ($row['brand_id']) {
                echo $row['brand_id'] . "<br>";
                exit();
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
        $newCatSql = "INSERT INTO `es_brand`(`brand_name`) VALUES ('$cat')";
        $newCat = mysqli_query($con, $newCatSql);
        if ($newCat) {
            checkbrand($cat);
            exit();
        }
    } else {
        while (($row = $result->fetch_assoc()) !== null) {
            if ($row['cat_id']) {
                echo $row['cat_id'] . "<br>";
                exit();
            }
        }
    }
}
