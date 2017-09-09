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
		$img = $row['profilePicture'];

		if($row['accountType'] == 'Student')
		{
		 echo "<tr onclick=\"just_login('$name')\">";
		}else
		{
		 echo "<tr onclick=\"show_modal('$name','$img')\">";
		}

		
		echo "<td>";
		echo $name;
		echo "</td>";

		echo "<td>";
		echo '<img src="';
		echo $row['profilePicture'];
		echo '" class="userPic">';
		echo "</td>";


		echo "</tr>";
	}
	
	$conn = null;
?>