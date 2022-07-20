<?php
include('../config.php');
echo "demo chal gaya";
$sql = "INSERT INTO `es_product` (`prod_id`, `brand_id`, `cat_id`, `prod_title`, `prod_desc`, `prod_longdesc`, `prod_unit`, `prod_price`, `prod_discount`, `prod_src`) VALUES (NULL,1,6,'title new','short description new','long decription',12,1100,20, 'dhadhadha');";
$query = mysqli_query($con, $sql);
echo $query;
