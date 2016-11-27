<?php 
	if ( isset($_POST['product_name']) && isset($_POST['product_type']) && isset($_POST['product_price']) && isset($_POST['product_class']) && isset($_POST['product_description']) ) {
		include('config.php');
		$product_name = $_POST['product_name'];
		$product_price = $_POST['product_price'];
		$product_class = $_POST['product_class'];
		$product_description = $_POST['product_description'];
		$product_type = $_POST['product_type'];

		try {
			$stmt = $conn->prepare('INSERT INTO product ( Name, Price,Type,Class,Description) VALUES (:Name, :Price,:Type,:Class,:Description)');
			$stmt->bindParam(':Name', $product_name);
			$stmt->bindParam(':Type', $product_type);
			$stmt->bindParam(':Price', $product_price);
			$stmt->bindParam(':Class', $product_class);
			$stmt->bindParam(':Description', $product_description);
			$stmt->execute();
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			exit();
		}
	}
?>