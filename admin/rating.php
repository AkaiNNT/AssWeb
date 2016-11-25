<!DOCTYPE html>
<html>
<head>
  <title>Admin | Rating</title>
  <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.5-dist/css/bootstrap.css"/>
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
    <div class="left-menu" id="left-menu">
      <ul class="list-group">                
        <li class="list-group-item center-text">
          <a href="../admin/user.php">User</a> 
        </li>
        <li class="list-group-item center-text">
          <a href="../admin/product.php">Product</a>
        </li>
        <li class="list-group-item center-text">
          <a href="../admin/rating.php">Rating</a>
        </li>
        <li class="list-group-item center-text">
          <a href="../admin/contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="col-md-10">
    <button type="button" class="btn btn-success" data-toggle="modal" href='#modal-add-user' style="margin: 40px 15px">Add</button>
    <div class="modal fade" id="modal-add-user">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Add New Rating</h4>
          </div>
          <div class="modal-body">
            <form method="POST" role="form">                       
              <div class="form-group">
                <label for="">UserID</label>
                <input type="text" class="form-control" id="user_id" placeholder="UserID">
              </div>
              <div class="form-group">
                <label for="">ProductID</label>
                <input type="text" class="form-control" id="product_id" placeholder="ProductID">
              </div>
              <div class="form-group">
                <label for="">Star</label>
                <input type="text" class="form-control" id="star" placeholder="Star">
              </div>
           </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" onclick="addRating()">Add Rating</button>
            </div>
        </div>
      </div>
    </div>
      <!-- /modal-add-new-car -->


    <div class="modal fade" id="modal-edit-car">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Edit User</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" role="form">                       
                        <div class="form-group">
                            <label for="">UserID</label>
                            <input type="text" class="form-control" id="edit_user_name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="">ProductID</label>
                            <input type="text" class="form-control" id="edit_user_email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="">Star</label>
                            <input type="text" class="form-control" id="edit_user_fullname" placeholder="FullName">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="saveEditUser()">Save changes</button>
                    <input type="hidden" id="user_id_to_edit">
                </div>
            </div>
        </div>
    </div>
    <div id="ratingTable">
          
    </div>
  </div>
</div>
  
<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/script_rating.js"></script>
</body>
</html>