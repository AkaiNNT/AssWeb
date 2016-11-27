<!DOCTYPE html>
<html>
<head>
	<title>Admin | User</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.5-dist/css/bootstrap.css"/>
  <link href="../css/admin/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../css/admin/style.css">
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
<script type="text/javascript">
    function saveEditUser() {
    var userID = $('#user_id_to_edit').val();
    var edit_user_name = $("#edit_user_name").val();
    var edit_user_email = $("#edit_user_email").val();
    var edit_user_address = $("#edit_user_address").val();
    var edit_user_fullname = $("#edit_user_fullname").val();
    var edit_user_password = $("#edit_user_password").val();
  
    $.post(
        'ajax/saveEditUser.php',
        {
            userID: userID,
            edit_user_name: edit_user_name,
            edit_user_email: edit_user_email,
            edit_user_fullname: edit_user_fullname,
            edit_user_password: edit_user_password,
            edit_user_address: edit_user_address
        },
        function (data, status) {
            $("#modal-edit-car").modal("hide");
            showUser();
        });
}
</script>
<form name="logout" id="logout" method="POST" action="logout.php">
<input type="submit" name="submit" id="submit" value="Logout"/>
</form>
  <div class="row">
    <div class="col-md-2">
  <!-- <div class="col-md-2">
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
  </div> -->
      <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="../">
                        Page
                    </a>
                </li>
                <li class="admin-active">
                    <a href="../admin/user.php">User</a>
                </li>
                <li>
                    <a href="../admin/product.php">Product</a>
                </li>
                <li>
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
      <button type="button" class="btn btn-success" data-toggle="modal" href='#modal-add-user' style="margin: 40px 15px">Add</button>
      <div class="modal fade" id="modal-add-user">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add New User</h4>
            </div>
            <div class="modal-body">
              <form method="POST" role="form">                       
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" class="form-control" id="user_name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="text" class="form-control" id="user_password" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" class="form-control" id="user_email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="">FullName</label>
                  <input type="text" class="form-control" id="user_fullname" placeholder="FullName">
                </div>
                <div class="form-group">
                  <label for="">Address</label>
                  <input type="text" class="form-control" id="user_address" placeholder="Addres">
                </div>
             </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="addUser()">Add User</button>
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
                              <label for="">Name</label>
                              <input type="text" class="form-control" id="edit_user_name" placeholder="Name">
                          </div>
                          <div class="form-group">
                              <label for="">Email</label>
                              <input type="text" class="form-control" id="edit_user_email" placeholder="Email">
                          </div>
                          <div class="form-group">
                              <label for="">Password</label>
                              <input type="text" class="form-control" id="edit_user_password" placeholder="Password">
                          </div>
                          <div class="form-group">
                              <label for="">FullName</label>
                              <input type="text" class="form-control" id="edit_user_fullname" placeholder="FullName">
                          </div>
                          <div class="form-group">
                              <label for="">Address</label>
                              <input type="text" class="form-control" id="edit_user_address" placeholder="Addres">
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
      <div id="carTable">
            
      </div>
    </div>
</div>
	
<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>

</body>
</html>