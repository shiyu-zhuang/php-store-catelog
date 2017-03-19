<?php 
// Include data. 
    include("./includes/list-of-products.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Creamy Cupcakes</title>
	<link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="./css/details.css">
	<link href="https://fonts.googleapis.com/css?family=Pacifico|Lato:400,700" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="masthead">
                <div class="logo">
                    <div class="content-box">
                        <h1>LOGO</h1>
                    </div>
                </div>
            </div>
            <div class="nav-bg">   
                <nav>
                    <div class="content-box center">
                        <ul class="navbar clearfix">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Cupcakes</a></li>
                            <li><a href="#">Pies</a></li>
                            <li><a href="#">Cookies</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="masthead-bg">
                <div class="content-box">
                    <h1>Creamy Cupcakes</h1>
                </div>
            </div> 
        </header>
        <main>
            <div class="main-content-bg">
                <div class="content-box">
                    <?php
                    /* Start looping through the products array */
                    foreach($products as $id => $product) {
                        $product_id_detail = $product["id"];
                        $product_name_detail = $product['name'];
                        $product_price_detail = $product['price'];
                        $product_image_detail = $product['image'];
                        $product_description_detail = $product['description'];
                       /* Check if product id from query string matches 
                          product id from products array. */
                        if ($_GET['pass_id'] === $product_id_detail) {
                            echo "
                            <h2>$product_name_detail</h2>
                            <figure class='clearfix'>
                                <img src='$product_image_detail' alt'Oops!'>
                                <figcaption>
                                    <ul>
                                        <li>
                                            <p>$product_description_detail</p>
                                        </li>
                                        <li>
                                            <p>$$product_price_detail/piece</p>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                            ";
                        }
                    }
                    /*echo "<pre>";
                    print_r($_GET);
                    echo "</pre>";*/
                    ?>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer-bg">
                <div class="content-box">
                    <p>&copy; 2017 Creamy Cupcakes</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>