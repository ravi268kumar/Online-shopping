<?php
/**
 * Created by PhpStorm.
 * User: ARIHANT
 * Date: 11-11-2016
 * Time: 12:18
 */
$con = mysqli_connect("localhost","root","","ecommerce");
if (mysqli_connect_errno()){
    echo "failed to connect to MySQL:".mysqli_connect_errno();
}
//getting the categories
function getBrands(){

    global $con;
    $get_brands = "select * from brands";
    $run_brands = mysqli_query($con ,$get_brands);
    return $run_brands;



}