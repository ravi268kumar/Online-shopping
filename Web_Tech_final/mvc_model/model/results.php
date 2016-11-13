<!DOCTYPE html>
<?php
error_reporting(0);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Onilne Shop</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>
</head>
<body>
<!-- main Container starts here-->
<div class="main_wrapper">
    <!--starts here header-->
    <div class="header_wrapper">
        <a href="index.php"><img id="logo" src="images/logo.jpg"/></a>
        <img id="banner" src="images/logo.jpg"/>
    </div>
    <div class="menubar">
        <ul id="menu">
            <li><a href="index.php">Home</a> </li>
            <li><a href="all_products.php">All Products</a> </li>
            <li><a href="customer/my_account.php">My Account</a> </li>
            <li><a href="">Sign Up</a> </li>
            <li><a href="cart.php">Shopping Cart</a> </li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        <div id="form">
            <form method="get" action="results.php"
                  enctype="multipart/form-data">
                <input type="text" placeholder="search a product" name="user_query"/>
                <input type="submit" name="search" value="search"/>
            </form>
        </div>
    </div>

    <!--header ends here -->
    <!--navigation starts here-->


    <div class="content_wrapper">
        <!--navigation bar ends-->
        <!--content wrapper ends-->
        <div id="content_area">
            <div id="products_box">
                <?php
                echo "ajit";
                if(isset($_GET['search'])){
                    $search_query = $_GET['user_query'];

                $get_pro = "select * from products where product_keywords like '%$search_query%'";
                $run_pro = mysqli_query($con,$get_pro);
                while($row_pro=mysqli_fetch_array($run_pro)){
                    $pro_id = $row_pro['product_id'];
                    $pro_cat = $row_pro['product_cat'];
                    $pro_brand = $row_pro['product_brand'];
                    $pro_title = $row_pro['product_title'];
                    $pro_price = $row_pro['product_price'];
                    $pro_image = $row_pro['product_image'];

                    echo "
         <div id='single_product'>
         <h3>$pro_title</h3>
         <img src='../product_images/$pro_image' width='180px' height='180px' 
    / >
    <p><b>$pro_price</b></p>
    <a href='details.php?pro_id=$pro_id' style='float: left;'>Details</a>
    <a href='index.php?pro_id=$pro_id'><button style='float: right'>Add to Cart</button></a>
    
         </div>
         
         ";

                }}
                ?>


            </div>


        </div>
    </div>
    <div id="footer">
        <h2 style="text-align:center; padding-top: 30px;">&copy;2016 by 000webhost.shopnfest.com</h2>

    </div>
</div>

</body>
</html>