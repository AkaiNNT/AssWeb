<?php 
	if (isset($_POST['user_id']) && isset($_POST['user_name']) && isset($_POST['user_email'])&& isset($_POST['user_password']) ) {
		include('config.php');

		$user_id = $_POST['user_id'];
		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];
		$user_password = $_POST['user_password'];

		try {
			$stmt = $conn->prepare('INSERT INTO user (ID, Username, Email,Password) VALUES (:ID, :Username, :Email,:Password)');
			$stmt->bindParam(':ID', $user_id);
			$stmt->bindParam(':Username', $user_name);
			$stmt->bindParam(':Email', $user_email);
			$stmt->bindParam(':Password', $user_password);
			$stmt->execute();
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			exit();
		}
	}
?>