<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="vi">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trang Tìm kiếm</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/modal.css" rel="stylesheet">
    <link href="../css/dropdown.css" rel="stylesheet">
    <link href="../css/mp3.css" rel="stylesheet">
    <link href="../css/home.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">


    <!-- Theme CSS -->
    <link href="../css/creative.css" rel="stylesheet">
    <link href="../css/mp3.css" rel="stylesheet">

</head>

<body id="page-top">

    <?php 
      include '../php/header.php';
    ?>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 text-center">
            <h2 class="section-heading">Chúng tôi có tất của những gì bạn cần!</h2>
            <hr class="light">
            <p class="text-faded">Được thành lập từ năm 2016, chúng tôi cung cấp cho các bạn đầy đủ các sản phẩm loa và mp3 tốt nhất! Đáp ứng tất cả nhu cầu của khách hàng là phương châm của chúng tôi. Hi vọng các bạn sẽ tìm được sản phẩm ưng ý cho mình!</p>
            <a href="../loa" class="page-scroll btn btn-default btn-xl sr-button">Xem các sản phẩm loa!</a>
            <a href="../mp3" class="page-scroll btn btn-default btn-xl sr-button">Xem các sản phẩm mp3!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services" style="padding-bottom: 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Sắp xếp các sản phẩm theo</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center search-method">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>Top được mua</h3>
                        <p class="text-muted">Các sản phẩm có lượt mua nhiều nhất</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center search-method" id="search-price">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Giá sản phẩm</h3>
                        <p class="text-muted">Trưng bày các sản phẩm theo giá của sản phẩm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center search-method">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Hãng sản xuất</h3>
                        <p class="text-muted">Trưng bày các sản phẩm theo hãng sản xuất</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center search-method">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                        <h3>Top bình chọn</h3>
                        <p class="text-muted">Trưng bày các loại sản phẩm theo lượt bình chọn của khách hàng</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <section>
    <div class="container" style="padding-top:0;padding-bottom: 0">
      <h3 id="num-show"></h3>
      <div class="well well-sm">
          <strong>Các sản phẩm loa</strong>
          <div class="btn-group">
              <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
              </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                  class="glyphicon glyphicon-th"></span>Grid</a>
          </div>
      </div>
      <div id="products" class="row list-group">
          
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
    <script src="../js/mp3.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="../js/creative.min.js"></script>
    <script src="../js/search.js"></script>
    <script src="../js/enter-search.js"></script>
    <script src="../js/modal2.js"></script>

</body>

</html>
