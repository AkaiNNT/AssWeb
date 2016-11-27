<?php 
	if (isset($_POST['contact_id'])) {
		include('config.php');
		$contact_id = $_POST['contact_id'];
		try {
			$conn->exec("DELETE FROM contact WHERE id = '$contact_id'");
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			exit();
		}
	}
?>