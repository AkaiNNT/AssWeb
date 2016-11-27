<?php
    session_start();
    unset($_SESSION['addcart']);
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
            <table class="table table-striped" id="table-cart">
                <thead>
                    <tr>
                        <th>Sản Phẩm</th>
                        <th>Số Lượng</th>
                        <th>Giá</th>
                        <th>Tổng Cộng</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                
               
            </table>
            <div style="border:1px solid #333;padding:10px 20px 10px 20px;">
	            <div class="row" >
	
	            	<div class="col-xs-6">
	            		<Strong>Tổng tiền</Strong><br>
	            		
	            		<Strong>Shipping</Strong><br>
	            		<strong>Thanh Toán</strong>
	            	</div>
	            	<div class="col-xs-6" style="text-align:right;">
	            		<span id="Total"></span><span>  VNĐ</span><br>
	            		<span id="Shipping"></span><span>  VNĐ</span><br>
	            		<span id="Order"></span><span>  VNĐ</span>
	            	</div>
	            </div>
	            <div style="margin-top:5px;text-align:right;"><button class="btn btn-primary" id="btn-checkout" style="border-radius: 6px;">Thanh Toán</button></div>
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
    <div style="border-bottom:1px solid #333;"><h4>Sản phẩm liên quan</h4></div>
    <div class="Product-same" id="Product-same-show" >
        
        <div class="clear"></div>
    </div>

</div>
</section>

<?php 
      include '../php/footer.php';
      include '../php/success.php';
      include '../php/BillForm.php';
?>
    <div class="modal fade in" id="SuccessPayment" role="dialog">
        <div class="modal-dialog success-modal">
            <h2>Success!</h2>
            <p>Cám Ơn bạn đã Thanh toán</p>
        </div>
    </div>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <?php
        if(!isset($_SESSION['username'])){ 
            echo "<script> 
                        window.location.href = 'http://localhost/AssWeb/';
                  </script>";
        }
    ?>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="../js/creative.min.js"></script>
    <script src="../js/cart.js"></script>
    <script src="../js/enter-search.js"></script>
    <script src="../js/modal2.js"></script>

</body>

</html>