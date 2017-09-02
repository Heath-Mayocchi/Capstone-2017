<?php
	// Connect to the database
	include 'pdoconnectOnline.inc';
	
	// Execute SQL SELECT statement to select all posts inner joined to the user table of the person who posted it
	$sql = "SELECT * FROM users ORDER BY firstName, lastName";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
	
	// Fill a 2d array with post information
	while ($row = $stmt->fetch())
	{
		$name = $row['firstName'] . " " . $row['lastName'];
		echo "<tr onclick=\"choose_user('$name')\">";
		echo "<td>";
		echo $name;
		echo "</td>";
		echo "</tr>";
	}
	
	$conn = null;
?>