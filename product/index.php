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
    <script type="text/javascript">
        function addcart(pid){
          var num = parseInt($("#soluong").val());
          $.ajax({
            url: '../php/addcart.php',
            type: "post",
            data:{
              'productID':pid,
              'num':num
            },
            success: function(str){
              if(parseInt(str)==1) $("#success").modal('show');
              else if(parseInt(str)==0) $("#error").modal('show');
              else $("#LoginModal").modal('show');
            }
          });
        }
    </script>


</head>

<body id="page-top">

<?php 
    include '../php/header.php';
?>
<section>
<div class="product-detail">
    <div class="row">
        <div class="col-md-6 magnify" id="magnify">
            <div class="large"></div>
            
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
                    <h1 id="Name-product"></h1>
                </div>
            </div>
             <hr style="max-width:100%;">
            <div class="row">
                <div class="col-md-12">
                  <span class="label label-main">Vintage</span>
                  <span class="monospaced" id="number-id-product"></span>
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
                            <a href="#" class="monospaced">Viết đánh giá</a>
                         </div>
                    </div>
                </div>
            </div>
             <hr style="max-width:100%;">
            <div class="row">
                <div class="col-md-12 backside-rule">
                    <h2 class="product-worth" id="price-product"></h2>
                </div>
            </div>
            <hr style="max-width:100%;">
            <div class="row add-to-cart">
                 <div class="col-md-6 product-qty">
                    <span class="btn btn-default btn-lg btn-qty" id="tru">
                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                    </span>
                    <input type ="text" class="btn btn-default btn-lg btn-qty" value=1 id="soluong">
                    <span class="btn btn-default btn-lg btn-qty" id="cong">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </span>
                 </div>
                <div class="col-md-6">
                    <button class="btn btn-lg btn-model btn-full-width btn-addcart" data-toggle="modal" <?php echo 'onclick="addcart('.$_SESSION['productID'].')"' ?>>Add Cart</button>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-6 textual content-middle">
                    <span class="monospaced" style="margin-left:55px;">Số lượng</span>
                 </div>
                 <div class="col-md-6 textual content-middle">
                     <a category="monospaced" href="#">Thêm Vào Giỏ Hàng</a>
                 </div>
            </div>
            <hr style="max-width:100%;">
            <div class="row">
                <div class="col-md-12 backside-rule prime-10"></div>
            </div>

            <div class="row">
                <div class="col-md-12 prime-10">
                    <p>Để giao hàng, <a href="#">Hãy gọi đến số 123-456-789</a></p>
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
                
            </div>

        </div>
    </div>
</div>
</section>
<section>
    <div class="container">
        <div><p style="font-size:150%;"><span id="number-comment">0</span> <span>Bình Luận<span></span></p></div>
        <hr style="max-width:100%;">
        <div id="comment">
            <div id="commeny-box">
                <div class="col-md-1" style="padding:5px"><img src="../img/avatar_login.png" alt="" style="width:90px;height:90px"></div>
                <div class="col-md-11" style="padding:5px">
                  <textarea class="form-control" id = "mycomment" rows="4"></textarea><br>
                  <div style="text-align:right;"><button class="btn btn-lg btn-primary" id="Btn-Comment" style="border-radius:2px;width:150px;">Post</button></div>
                </div>
                <div id ="list-comment">

                    
                </div>
            </div>
        </div>
          
    </div>
</section>
<?php 
    include '../php/footer.php';
    include '../php/success.php';
    include '../php/error.php';
?>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="../js/creative.min.js"></script>
    <script src="../js/product-detail.js"></script>
    <script src="../js/enter-search.js"></script>
    <script src="../js/modal2.js"></script>

</body>

</html>