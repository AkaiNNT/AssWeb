<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
  session_start();
  if ($_SESSION['login'] == false){
    header("location:index.php");
  }
?>
<form name="logout" id="logout" method="POST" action="logout.php">
<input type="submit" name="submit" id="submit" value="Logout"/>
</form> 
</body>
</html>