<?php 
	include('config.php');

	$data = '<table class="responstable">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Class</th>
                    <th>PostDay</th>
                    <th>Description</th>
                    <th>Star</th>
                    <th>NumBuy</th>
                    <th>Acction</th>
                </tr>';

    try {
    	$stmt = $conn->prepare('SELECT * FROM product');	
    	$stmt->setFetchMode(PDO::FETCH_ASSOC);
    	$stmt->execute();
    	while($row = $stmt->fetch()) {
		    $data .= '<tr>';
		    $data .= '<td>' . $row['ID'] . '</td>';
		    $data .= '<td>' . $row['Name'] . '</td>';
		    $data .= '<td>' . $row['Price'] . '</td>';
		    $data .= '<td>' . $row['Type'] . '</td>';
		    $data .= '<td>' . $row['Class'] . '</td>';
		    $data .= '<td>' . $row['PostDay'] . '</td>';
		    $data .= '<td>' . $row['Description'] . '</td>';
		    $data .= '<td>' . $row['star'] . '</td>';
		    $data .= '<td>' . $row['NumBuy'] . '</td>';

		    $data .= '<td><button type="button" class="btn btn-primary" onclick="editProduct(' . $row['ID'] . ')">Edit</button><button type="button" class="btn btn-danger" onclick="deleteProduct(' . $row['ID'] . ')">Delete</button></td>';
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