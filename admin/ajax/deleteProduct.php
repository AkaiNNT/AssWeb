<?php 
	if (isset($_POST['product_id'])) {
		include('config.php');
		$product_id = $_POST['product_id'];
		try {
			$conn->exec("DELETE FROM product WHERE id = '$product_id'");
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			exit();
		}
	}
?>