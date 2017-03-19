<?php 
    include("./includes/list-of-products.php");
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Creamy Cupcakes</title>
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Pacifico|Lato:400,700" rel="stylesheet"> </head>

    <body>
        <div class="wrapper">
            <header>
                <div class="masthead">
                    <div class="logo">
                        <div class="content-box">
                            <h1>LOGO</h1> </div>
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
                        <h1>Creamy Cupcakes</h1> </div>
                </div>
            </header>
            <main>
                <div class="main-content-bg">
                    <div class="clearfix">
                        <h2>The Product List</h2>
                        <div class="container">
                            <ul class="store center">
                                <?php
                            foreach($products as $id => $product) {
                                    $product_id = $product['id'];
                                    $product_name = $product['name'];
                                    $product_price = $product['price'];
                                    $product_image = $product['image'];
                                    echo "<li class='float_l'>
                                            <figure>
                                                <a href='./details.php?pass_id=$product_id'>
                                                    <img src='$product_image' alt='Cupcakes!'>
                                                </a>
                                                <figcaption>
                                                    <ul>
                                                        <li>
                                                            <p class='center'>
                                                                <a href='./details.php?pass_id=$product_id'> $product_name </a><br> 
                                                                price: $$product_price/piece
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                             </figure>
                                           </li>";
                            }
                            
                        ?>
                            </ul>
                        </div>
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