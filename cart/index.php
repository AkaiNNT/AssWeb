<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cart page</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/modal.css" rel="stylesheet">
    <link href="../css/dropdown.css" rel="stylesheet">

    <link href="../css/cart.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/creative.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/checkout.css">
    <link href="../css/home.css" rel="stylesheet">

</head>

<body id="page-top">

<?php 
      include '../php/header.php';
?>
<section >
<div class="shopping-cart">
    
    <div class="row">
        <div class="col-lg-8 col-sm-8">
            <h2>SHOPPING CART</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Product detail</th>
                        <th>QTY</th>
                        <th>Price</th>
                        <th>SubTotal</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="Product-detail">
                            <img src="../img/Ruizu-G18.jpg" alt="" style="height:80px;width:80px;">
                            <a href="../product" style="margin-left:5px;">Loa vi tính mini Ruizu G18</a>
                        </th>
                        <th class="con">
                            <input type="number" name="quantity" min="1" max="10" value="1">
                        </th>
                        <th class="con"><p>10<span>$</span></p></th>
                        <th class="con"><p>10<span>$</span></p></th>
                        <th class="con"><a href="#">X</a></th>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th class="Product-detail">
                            <img src="../img/mp3-PeepVn.jpg" alt="" style="height:80px;width:80px;">
                            <a href="../product" style="margin-left:5px;">MP3 kiểu dáng Shuffle PeepVN</a>
                        </th>
                        <th class="con">
                            <input type="number" name="quantity" min="1" max="10" value="1">
                        </th>
                        <th class="con"><p>10<span>$</span></p></th>
                        <th class="con"><p>10<span>$</span></p></th>
                        <th class="con"><a href="#">X</a></th>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th class="Product-detail">
                            <img src="../img/SoundMax.jpg" alt="" style="height:80px;width:80px;">
                            <a href="../product" style="margin-left:5px;">Loa SoundMax A130/2.0</a>
                        </th>
                        <th class="con">
                            <input type="number" name="quantity" min="1" max="10" value="1">
                        </th>
                        <th class="con"><p>10<span>$</span></p></th>
                        <th class="con"><p>10<span>$</span></p></th>
                        <th class="con"><a href="#">X</a></th>
                    </tr>
                </tbody>
               
            </table>
            <div style="border:1px solid #333;padding:10px 20px 10px 20px;">
	            <div class="row" >
	
	            	<div class="col-xs-6">
	            		<Strong>Sub Total</Strong><br>
	            		
	            		<Strong>Shipping</Strong><br>
	            		<strong>Order Total</strong>
	            	</div>
	            	<div class="col-xs-6" style="text-align:right;">
	            		??? <span>$</span><br>
	            		??? <span>$</span><br>
	            		??? <span>$</span>
	            	</div>
	            </div>
	            <div style="margin-top:5px;text-align:right;"><button class="btn btn-primary" data-toggle="modal" data-target="#CheckoutModal">Check Out</button></div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-3">
            <div class="help pa">
                <h3>Help</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#">Learn More</a>
            </div>
            <div class="return pa">
                <h3>Returns</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#">Learn More</a>
            </div>
            <div class="shipping pa">
                <h3>Shipping</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#">Learn More</a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div style="border-bottom:1px solid #333;"><h4>Sample Product</h4></div>
    <div class="Product-same">
        <div class="col-lg-3 col-sm-3 spd" style="text-align:center;">
            <img src="../img/mp3-Mini.jpg" alt="" style="height:20em;width:100%;">
            <p>Portable Jogging Mini Clip Mp3</p>
        </div>
        <div class="col-lg-3 col-sm-3 spd" style="text-align:center;">
            <img src="../img/mp3-NVPRO.jpg" alt="" style="height:20em;width:100%;">
            <p>Mp3 NVPRO Minion và Thẻ nhớ Sandisk 8GB</p>
        </div>
        <div class="col-lg-3 col-sm-3 spd" style="text-align:center;">
            <img src="../img/mp3-xanh.jpg" alt="" style="height:20em;width:100%;">
            <p>May nghe nhac mp3 xanh</p>
        </div>
        <div class="col-lg-3 col-sm-3 spd" style="text-align:center;">
            <img src="../img/mp3-Mini.jpg" alt="" style="height:20em;width:100%;">
            <p>Loa kéo bluetooth Temeisheng A73</p>
        </div>
        <div class="clear"></div>
    </div>

    <div class="modal fade in" id="CheckoutModal" role="dialog">
    <div class="panel panel-default credit-card-box">
	    <div class="panel-heading display-table" >
	      <div class="row display-tr" >
	        <h3 class="panel-title display-td" >Payment Details</h3>
	        <div class="display-td" >                            
	        <img class="img-responsive pull-right" src="../img/accepted.png" alt="">
	        </div>
	      </div>                    
	    </div>
	    <div class="panel-body">
	      <form role="form" id="payment-form">
	        <div class="row">
	          <div class="col-xs-12">
	            <div class="form-group">
	              <label>CARD NUMBER</label>
	              <div class="input-group">
	                <input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number" required autofocus>
	                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
	              </div>
	            </div>                            
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-xs-7 col-md-7">
	            <div class="form-group">
	              <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
	              <input type="tel" class="form-control" name="cardExpiry" placeholder="MM / YY">
	            </div>
	          </div>
	          <div class="col-xs-5 col-md-5 pull-right">
	            <div class="form-group">
	              <label>CV CODE</label>
	              <input type="tel" class="form-control" name="cardCVC" placeholder="CVC" required>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-xs-12">
	            <div class="form-group">
	              <label>COUPON CODE</label>
	              <input type="text" class="form-control" name="couponCode">
	            </div>
	          </div>                        
	        </div>
	        <div class="row">
	          <div class="col-xs-8">
	            <button class="btn btn-success btn-lg btn-block" type="submit">Start Subscription</button>
	          </div>
	          <div class="col-xs-4">
	            <button type="button" class="btn btn-success btn-lg btn-block" data-dismiss="modal">Close</button>
	          </div>
	        </div>
	        <div class="row" style="display:none;">
	          <div class="col-xs-12">
	            <p class="payment-errors"></p>
	          </div>
	        </div>
	      </form>
	    </div>
	  </div>    
	</div>
</div>
</section>

<?php 
      include '../php/footer.php';
      include '../php/success.php';
?>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <?php
        echo "<script> 
                    window.location.href = 'http://localhost/AssWeb/';
              </script>";
    ?>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="../js/creative.min.js"></script>
    <script src="../js/modal2.js"></script>

</body>

</html>