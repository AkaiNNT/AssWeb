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

    <title>Home page</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">
    <link href="css/dropdown.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
    <style type="text/css">
        .item1{
          height: 242px;
        }
        .col-md-4 img{
          height: 240px;
          width: 99%;
          border: 1px solid black;
        }
        .col-md-4 img:hover{
          height: 240px;
          width: 99%;
          border: 2px solid black;
          cursor: pointer;
        }
        .carousel-indicators li{
          border: 1px solid red;
        }
    </style>

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">Nhom HHH</a>
                <input type="text" class="form-control" style="width: 50%; margin-top:8px;margin-left:150px;" placeholder="Tìm kiếm" id="searchData">
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                        if(isset($_SESSION['username'])){
                            echo '<li><a class="page-scroll" href="cart">Giỏ Hàng<span class="glyphicon glyphicon-shopping-cart" style="margin-left:5px;"></span><span id="Tinnhan" class="badge pull-right" style="margin: -7px 0px 0px -7px;background-color:red;"> 0 </span></a></li>';
                        }
                        if(isset($_SESSION['addcart'])){
                            echo '<script type="text/javascript">
                                    document.getElementById("Tinnhan").style.visibility = "visible";
                                    document.getElementById("Tinnhan").innerHTML = '.$_SESSION['addcart'].';
                                 </script>';
                        }
                        else{
                            echo '<script type="text/javascript">document.getElementById("Tinnhan").style.visibility = "hidden";</script>';
                        }
                    ?>
                    
                    <li>
                        <a class="page-scroll" href="loa">Loa</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="mp3">Máy Mp3</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact">Liên Hệ</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user pull-right"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="myprofile">
                            <?php
                                if(isset($_SESSION['username'])){
                                    echo $_SESSION['username'];
                                }
                                else echo 'Tài Khoản';
                            ?>
                            <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                            <li class="divider"></li>
                            <li><a href="cart"> Giỏ Hàng <span class="glyphicon glyphicon-shopping-cart pull-right"></span></a></li>
                            <li class="divider"></li>
                            <li><a href="#" >Tin Nhắn <span class="badge pull-right"> 0 </span></a></li>
                            <?php
                            if(!isset($_SESSION['username'])){ 
                                echo "<li class='divider'></li>
                                      <li><a href='#' data-toggle='modal' data-target='#LoginModal'> Đăng Nhập <span class='glyphicon glyphicon-log-in pull-right'></span></a></li>";
                            }
                            else{
                                echo "<li class='divider'></li>
                                      <li id='logout'><a href='#' data-toggle='modal'> Đăng Xuất <span class='glyphicon glyphicon-log-out pull-right'></span></a></li>";
                            }
                            ?>
                            <li class="divider"></li>
                            <li><a href="#" data-toggle="modal" data-target="#RegisterModal">Đăng Kí <span class="glyphicon glyphicon-registration-mark pull-right"></span></a></li>
                          </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="modal fade in" id="LoginModal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Đăng nhập</h4>
            </div>
            <div class="modal-body">
                <img id="profile-img1" class="profile-img-card" src="img/avatar_login.png" alt="">
                <p id="profile-name1" class="profile-name-card"></p>
                <form class="form-signin">
                    <span id="reauth-username1" class="reauth-username"></span>
                    <span id="login-warmning" style="color:#ffd11a;"></span>
                    <span id="login-error" style="color:red;"></span>
                    <input type="text" id="inputusername1" class="form-control" placeholder="User Name" required>
                    <input type="password" id="inputPassword1" class="form-control" placeholder="Password" required>
                    <div id="remember1" class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me" id="rememberbox"> Remember password
                        </label>
                    </div>
                    <input class="btn btn-lg btn-primary btn-block btn-signin" id="buttonlogin" value="Sign In">
                </form><!-- /form -->
                <a href="#" class="forgot-password">
                    Forgot the password?
                </a>
                <a href="#" class="forgot-password" data-toggle="modal" data-target="#RegisterModal">
                    Sign In New Account !
                </a>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-Close" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>
    <div class="modal fade in" id="RegisterModal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Đăng Kí</h4>
            </div>
            <div class="modal-body">
                <img id="profile-img2" class="profile-img-card" src="img/avatar_login.png" alt="">
                <p id="profile-name2" class="profile-name-card"></p>
                <form class="form-signin">
                    
                    <span id="register-error" style="color:red;"></span>
                    <span id="register-warmning" style="color:#ffd11a;"></span>
                    <span id="reauth-username2" class="reauth-username"></span>
                    <input type="email" id="inputmail2" class="form-control" placeholder="Email" required>
                   
                    <input type="text" id="inputusername2" class="form-control" placeholder="User Name" required >
                    <input type="password" id="inputPassword2" class="form-control" placeholder="Password" required>
                    
                    <input type="password" id="confirmPassword2" class="form-control" placeholder="Confirm Password" required>
                    <input class="btn btn-lg btn-primary btn-block btn-signin" id="buttonsign" value="Register">
                </form><!-- /form -->
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-Close" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
  </div>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Loa/Mp3 cho cuộc sống của bạn</h1>
                <hr>
                <p>Sản phẩm của nhóm HHH</p>
                <!-- <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a> -->
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Chúng tôi có tất của những gì bạn cần!</h2>
                    <hr class="light">
                    <p class="text-faded">Được thành lập từ năm 2016, chúng tôi cung cấp cho các bạn đầy đủ các sản phẩm loa và mp3 tốt nhất! Đáp ứng tất cả nhu cầu của khách hàng là phương châm của chúng tôi. Hi vọng các bạn sẽ tìm được sản phẩm ưng ý cho mình!</p>
                    <a href="loa/index.php" class="page-scroll btn btn-default btn-xl sr-button">Xem các sản phẩm loa!</a>
                    <a href="mp3/index.php" class="page-scroll btn btn-default btn-xl sr-button">Xem các sản phẩm mp3!</a>
                </div>
            </div>
        </div>
    </section>
    <section style="padding: 30px;">
    <h1>Sản phẩm được đánh giá tốt nhất</h1>
      <div id="carousel-example-generic-1" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic-1" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic-1" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox" id="list-product-home-0">
        
      </div>
    </section>
    <section style="padding: 30px;">
    <h1>Sản phẩm được mua nhiều nhất</h1>
      <div id="carousel-example-generic-2" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic-2" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox" id="list-product-home-1">
        
      </div>
    </section>
    <section style="padding: 30px;">
    <h1>Sản phẩm mới nhất</h1>
      <div id="carousel-example-generic-3" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic-3" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic-3" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic-3" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox" id="list-product-home-2"> 
      
      </div>
    </section>
    <section style="padding: 30px;">
    <h1>Sản phẩm ngẫu nhiên</h1>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox" id="list-product-home-3">

      </div>
      </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Liên hệ mua sản phẩm</h2>
                    <hr class="primary">
                    <p>Cám ơn các bạn đã tham quan website của chúng tôi!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">HHH@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/home.js"></script>
    <script type="text/javascript">
        $("#searchData").keydown(function (e) {
          if (e.keyCode == 13) {
                $.ajax({    
                    url: "php/search-method.php",
                    type: "post",
                    data:{
                        'method':'1',
                        'x':$("#searchData").val(),
                        'y':'n',
                        'z':'Loa'
                    },  
                    dataType: "text",
                    success: function(string){
                        window.location.href = 'http://localhost/AssWeb/search';
                    }
                });
            }
        });
    </script>

</body>

</html>
