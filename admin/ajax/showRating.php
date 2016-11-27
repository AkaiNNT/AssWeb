<?php 
	include('config.php');

	$data = '<table class="responstable">
                <tr>
                    <th>ID</th>
                    <th>UserID</th>
                    <th>User Name </th>
                    <th>ProductID</th>
                    <th> Product Name </th>
                    <th>Star</th>
                </tr>';

    try {
    	$stmt = $conn->prepare('SELECT * FROM rating');	
    	$stmt->setFetchMode(PDO::FETCH_ASSOC);
    	$stmt->execute();
    	
    	while($row = $stmt->fetch()) {
    		$id=$row['UserID'];
    		$username=$conn->prepare("SELECT * FROM user WHERE ID = '$id'");
    		$username->setFetchMode(PDO::FETCH_ASSOC);
    		$username->execute();
    		$response = array();
    		while($row1 = $username->fetch()) {
    			$response = $row1;
    		}
    		$id1=$row['ProductID'];
    		$productname=$conn->prepare("SELECT * FROM product WHERE ID = '$id1'");
    		$productname->setFetchMode(PDO::FETCH_ASSOC);
    		$productname->execute();
    		$response1 = array();
    		while($row2 = $productname->fetch()) {
    			$response1 = $row2;
    		}
		    $data .= '<tr>';
		    $data .= '<td>' . $row['ID'] . '</td>';
		    $data .= '<td>' . $row['UserID'] . '</td>';
		    $data .= '<td>' . $response['Username'] . '</td>';
		    $data .= '<td>' . $row['ProductID'] . '</td>';
		    $data .= '<td>' . $response1['Name'] . '</td>';
		    $data .= '<td>' . $row['Star'] . '</td>';

		    $data .= '</tr>';
		}
		$data .= '</table>';
		echo $data;
    }
    catch (PDOException $e) {
		echo $e->getMessage();
		exit();
	}
?>