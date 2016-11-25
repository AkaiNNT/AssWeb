<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
<?php
	$msg ='';
    $login_form = <<< EOD
<form name="login" id="login" method="POST" action="check_login.php">
<p><label for="username">Enter Your Email: </label><input type="text" size="40" name="username" id="username" value="" /></p>
<p><label for="password">Enter Your Password: </label><input type="password" size="40" name="password" id="password" value="" /></p>
<p><input type="submit" name="submit" id="submit" value="Submit"/> <input type="reset" name="reset" id="reset" value="reset"/></p>
</form>
EOD;
// $msg = $_GET['msg'];
if($msg!='') echo '<p>'.$msg.'</p>';
echo "<h1>Please enter your Login Information</h1>";
echo $login_form;
?>
</body>
</html>