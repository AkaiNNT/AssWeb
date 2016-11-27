<?php 
	if (isset($_POST['edit_product_name'])) {
		include('config.php');
		$productID = $_POST['productID'];
		$edit_product_name = $_POST['edit_product_name'];
		$edit_product_type = $_POST['edit_product_type'];
		$edit_product_class = $_POST['edit_product_class'];
		$edit_product_price = $_POST['edit_product_price'];
		$edit_product_description = $_POST['edit_product_description'];
		try {
			$stmt = $conn->prepare("UPDATE product SET
										Name=:edit_product_name, 
										Type=:edit_product_type,
										Class=:edit_product_class,
										Price=:edit_product_price,
										Description=:edit_product_description 
									WHERE ID=:productID");
			$stmt->bindParam(':edit_product_name', $edit_product_name);
			$stmt->bindParam(':edit_product_type', $edit_product_type);
			$stmt->bindParam(':edit_product_class', $edit_product_class);
			$stmt->bindParam(':edit_product_price', $edit_product_price);
			$stmt->bindParam(':edit_product_description', $edit_product_description);
			$stmt->bindParam(':productID', $productID);
    		$stmt->execute();
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			exit();
		}
	}
?>