<?php
	// Connect to the database
	include 'pdoconnectOnline.inc';
	
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
		 echo "<tr onclick=\"student_popup('$name','$img')\">";
		}
		else
		{
		 echo "<tr onclick=\"admin_popup('$name','$img')\">";
		}

		
		echo "<td width=65px>";
		echo '<img src="';
		echo $row['profilePicture'];
		echo '" class="userPic">';
		echo "</td>";


		echo "<td>  ";
		echo $name;
		echo "</td>";



		echo "</tr>";
	}
	
	$conn = null;
?>