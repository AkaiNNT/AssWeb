<?php
session_start();
$myemail = $_POST['username']; 
$mypassword = $_POST['password'];
$msg ='';
$_SESSION['login']=false;
if(isset($myemail, $mypassword)) {
  include('ajax/config.php');
  $sql="SELECT * FROM admin WHERE Email='$myemail' and Password='$mypassword'";
  // $conn->exec("SELECT * FROM admin WHERE Email='$username' and Password='$password'");
  $result = $conn->prepare($sql);
  // $result=mysqli_query($conn, $sql);
  // Mysql_num_row is counting table row
  $result->bindParam($username ,$_POST['username']);
  $result->bindParam($password ,$_POST['password']);
  $result->execute();
  // $count=mysqli_num_rows($result);
  $num=$result->rowCount();
  // If result matched $myusername and $mypassword, table row must be 1 row

  if($num > 0){
    $_SESSION['login'] = true;
    header("location:user.php");
    // $admin_login=true;
  }else{
    header("location:index.php");
  }
}
else {
    header("location:index.php");
}
?>