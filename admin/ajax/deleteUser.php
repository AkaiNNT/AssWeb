<?php 
	if (isset($_POST['user_id'])) {
		include('config.php');
		$user_id = $_POST['user_id'];
		try {
			$conn->exec("DELETE FROM user WHERE id = '$user_id'");
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			exit();
		}
	}
?>