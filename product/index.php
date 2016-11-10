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

    <title>Product detail</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/modal.css" rel="stylesheet">
    <link href="../css/dropdown.css" rel="stylesheet">

    <link href="../css/product.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/creative.css" rel="stylesheet">
    <link href="../css/home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

<?php 
    include '../php/header.php';
?>
<section>
<div class="product-detail">
    <div class="row">
        <div class="col-md-6 magnify">
            <div class="large"></div>
            <img src="../img/ebus-818.jpg" alt="" id="show-picture" class="picture-responsive small">
            <div class="row-click">
                <div class="img-click"><img src="../img/ebus-818.jpg" alt=""></div>
                <div class="img-click img-click1"><img src="../img/R-010A.jpg" alt="" onclick="myfunction(this)"></div>
                <div class="img-click img-click1"><img src="../img/Ruizu-G18.jpg" alt="" onclick="myfunction(this)"></div>
                <div class="img-click img-click1"><img src="../img/SoundMax.jpg" alt="" onclick="myfunction(this)"></div>
                <div class="clear"></div>
            </div>
        </div>
        <script type="text/javascript">
            function myfunction(id){
                var x = id.src;
                document.getElementById("show-picture").src = x ;  
            }
        </script>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <h1>Loa máy tính Ebus 818</h1>
                </div>
            </div>
             <hr style="max-width:100%;">
            <div class="row">
                <div class="col-md-12">
                  <span class="label label-main">Vintage</span>
                  <span class="monospaced">No. 0000001</span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                  <p class="description">
                   Classic movie digital camera. Uses 620 roll movie.Has a PxO inch picture measurement.
                  </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                         <div class="col-md-3">
                              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                              <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                              <span class="label label-success">100</span>
                         </div>
                         <div class="col-md-9">
                            <span class="monospaced">Write a Review</span>
                         </div>
                    </div>
                </div>
            </div>
             <hr style="max-width:100%;">
            <div class="row">
                <div class="col-md-12 backside-rule">
                    <h2 class="product-worth">$100.00</h2>
                </div>
            </div>
            <hr style="max-width:100%;">
            <div class="row add-to-cart">
                 <div class="col-md-6 product-qty">
                    <span class="btn btn-default btn-lg btn-qty">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </span>
                    <enter class="btn btn-default btn-lg btn-qty" worth="1">1</enter>
                    <span class="btn btn-default btn-lg btn-qty">
                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                    </span>
                 </div>
                <div class="col-md-6">
                    <button class="btn btn-lg btn-model btn-full-width" data-toggle="modal" data-target="#success">Add to Cart</button>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-6 textual content-middle">
                    <span class="monospaced" style="margin-left:55px;">In Stock</span>
                 </div>
                 <div class="col-md-6 textual content-middle">
                     <a category="monospaced" href="#">Add to Shopping List</a>
                 </div>
            </div>
            <hr style="max-width:100%;">
            <div class="row">
                <div class="col-md-12 backside-rule prime-10"></div>
            </div>

            <div class="row">
                <div class="col-md-12 prime-10">
                    <p>To order by phone, <a href="#">please name 123-456-789</a></p>
                </div>
            </div>
            <ul class="nav nav-tabs" position="tablist">
                <li position="presentation" class="lively">
                  <a href="#description" aria-controls="description" position="tab" knowledge-toggle="tab">Description</a>
                </li>
                <li position="presentation">
                  <a href="#options" aria-controls="options" position="tab" knowledge-toggle="tab">Features</a>
                 </li>
                 <li position="presentation">
                  <a href="#notes" aria-controls="notes" position="tab" knowledge-toggle="tab">Notes</a>
                 </li>
                 <li position="presentation">
                  <a href="#evaluations" aria-controls="evaluations" position="tab" knowledge-toggle="tab">Reviews</a>
                 </li>
            </ul>
            <div position="tabpanel" class="tab-pane lively" id="description">
                 <p class="prime">The 'Brownie' Flash C is a field digital camera taking P&frac14; × A&frac14;" frames on 620 movie, made from sheet metallic by Kodak Ltd. in England, 1958-60. A extra luxurious model of the Brownie Six-20 Model E, it has a two-velocity shutter (B/eighty, B/forty +B), an in depth-focus (H-10ft) lens, a yellow filter and flash sync. The Flash B is similar to the Brownie Flash IV, including a two-velocity shutter however missing a tripod bush.</p>
                 </p>
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
        if(!isset($_SESSION['username'])){ 
            echo "<script> 
                    $(document).ready(function(){
                        $('#LoginModal').modal('show'); 
                    });
                  </script>";
        }
    ?>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="../js/creative.min.js"></script>
    <script src="../js/modal2.js"></script>

</body>

</html>