<?php 
	if (isset($_POST['product_id'])) {
		include('config.php');
		$product_id = $_POST['product_id'];
		try {
			$stmt = $conn->prepare("SELECT * FROM product WHERE id = '$product_id'");
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
    		$stmt->execute();

    		$response = array();

    		while($row = $stmt->fetch()) {
    			$response = $row;
    		}
    		echo json_encode($response);
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			exit();
		}
	}
?>