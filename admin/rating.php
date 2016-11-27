<!DOCTYPE html>
<html>
<head>
  <title>Admin | Rating</title>
  <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.5-dist/css/bootstrap.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../css/admin/style.css">
  <link href="../css/admin/bootstrap.min.css" rel="stylesheet">
  <link href="../css/admin/simple-sidebar.css" rel="stylesheet">
  <link href="../css/admin/user.css" rel="stylesheet">
  <link href="../css/admin/layout.css" rel="stylesheet">
</head>
<body>
<?php
  session_start();
  if ($_SESSION['login'] == false){
    header("location:index.php");
  }
  // echo $_SESSION['username'];
?>
<form name="logout" id="logout" method="POST" action="logout.php">
<input type="submit" name="submit" id="submit" value="Logout"/>
</form>
  <div class="row">
  <div class="col-md-2">
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="../">
                        Page
                    </a>
                </li>
                <li>
                    <a href="../admin/user.php">User</a>
                </li>
                <li>
                    <a href="../admin/product.php">Product</a>
                </li>
                <li class="admin-active">
                    <a href="../admin/rating.php">Ratting</a>
                </li>
                <li>
                    <a href="../admin/contact.php">Contact</a>
                </li>
            </ul>
        </div>
      </div>
  </div>
  <div class="col-md-10 col-md-offset-2">
    
    <div id="ratingTable">
          
    </div>
  </div>
</div>
  
<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
<script type="text/javascript" src="../js/script_rating.js"></script>
</body>
</html>