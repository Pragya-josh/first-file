<?php
require("common.php");

session_start();
if (isset($_SESSION['email']))
	{
header('location: product.php');
}
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap.css" >
        <!--jQuery library--> 
       <script src="jquery-3.5.1.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="bootstrap.min.css"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ecommerce-website</title>
		<link href="index.css" rel="stylesheet" type="text/css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		</head>

    <body style="padding-top: 50px;">
        <?php
		include("header.php");
		?>

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>We sell lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                            <a  href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.html#cameras" >
                            <div class="thumbnail">
                                <img src="1.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.html#watches" >
                            <div class="thumbnail">
                                <img src="7.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.html#shirts" >
                            <div class="thumbnail">
                                <img src="8.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--Item categories listing end-->
        </div>
		<br>
		<br>
		<br>
         <?php
		include("footer.php");
		?>
    </body> 
</html>