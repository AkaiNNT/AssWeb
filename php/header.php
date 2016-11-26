<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="../">Nhom HHH</a>
                <input type="text" class="form-control" style="width: 50%; margin-top:8px;margin-left:150px;" placeholder="Tìm kiếm" id="searchData">
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                        if(isset($_SESSION['username'])){
                            echo '<li><a class="page-scroll" href="../cart">Giỏ Hàng<span class="glyphicon glyphicon-shopping-cart" style="margin-left:5px;"></span><span id="Tinnhan" class="badge pull-right" style="margin: -7px 0px 0px -7px;background-color:red;"> 0 </span></a></li>';
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
                        <a class="page-scroll" href="../loa">Loa</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../mp3">Máy Mp3</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../contact">Liên Hệ</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user pull-right"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../myprofile">
                            <?php
                                if(isset($_SESSION['username'])){
                                    echo $_SESSION['username'];
                                }
                                else echo 'Tài Khoản';
                            ?>
                            <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                            <li class="divider"></li>
                            <li><a href="../cart"> Giỏ Hàng <span class="glyphicon glyphicon-shopping-cart pull-right"></span></a></li>
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
                <img id="profile-img1" class="profile-img-card" src="../img/avatar_login.png" alt="">
                <p id="profile-name1" class="profile-name-card"></p>
                <form class="form-signin">
                    <span id="reauth-username1" class="reauth-username"></span>
                    <span id="login-warmning" style="color:#ffd11a;"></span>
                    <span id="login-error" style="color:red;"></span>
                    <input type="text" id="inputusername1" class="form-control" placeholder="User Name" required>
                    <input type="password" id="inputPassword1" class="form-control" placeholder="Password" required>
                    <div id="remember1" class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember password
                        </label>
                    </div>
                    <input class="btn btn-lg btn-primary btn-block btn-signin" id="buttonlogin" value="Sign In">
                </form><!-- /form -->
                <a href="#" class="forgot-password">
                    Forgot the password?
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
                <img id="profile-img2" class="profile-img-card" src="../img/avatar_login.png" alt="">
                <p id="profile-name2" class="profile-name-card"></p>
                <form class="form-signin">
                    <span id="reauth-username2" class="reauth-username"></span>
                    <span id="register-error" style="color:red;"></span>
                    <span id="register-warmning" style="color:#ffd11a;"></span>
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
