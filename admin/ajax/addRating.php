<?php 
	if (isset($_POST['user_id']) && isset($_POST['product_id']) && isset($_POST['star']) ) {
		include('config.php');

		$user_id = $_POST['user_id'];
		$product_id = $_POST['product_id'];
		$star = $_POST['star'];

		try {
			$stmt = $conn->prepare('INSERT INTO rating (UserID, ProductID, Star) VALUES (:UserID, :ProductID,:Star)');
			$stmt->bindParam(':UserID', $user_id);
			$stmt->bindParam(':ProductID', $product_id);
			$stmt->bindParam(':Star', $star);
			$stmt->execute();
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			exit();
		}
	}
?>