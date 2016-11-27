<?php 
	include('config.php');

	$data = '<table class="responstable">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>FullName</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>';

    try {
    	$stmt = $conn->prepare('SELECT * FROM user');	
    	$stmt->setFetchMode(PDO::FETCH_ASSOC);
    	$stmt->execute();
    	while($row = $stmt->fetch()) {
		    $data .= '<tr>';
		    $data .= '<td>' . $row['ID'] . '</td>';
		    $data .= '<td>' . $row['Username'] . '</td>';
		    $data .= '<td>' . $row['Email'] . '</td>';
		    $data .= '<td>' . $row['FullName'] . '</td>';
		    $data .= '<td>' . $row['Address'] . '</td>';

		    $data .= '<td><button type="button" class="btn btn-primary" onclick="editUser(' . $row['ID'] . ')">Edit</button><button type="button" class="btn btn-danger" onclick="deleteUser(' . $row['ID'] . ')">Delete</button></td>';
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