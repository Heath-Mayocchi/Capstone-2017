<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8"/>
</head>
<body>
<?php
$servername = "fdb17.runhosting.com:3306";
$username = "2412123_snap";
$password = "8h*G66hdkO5&";
try {
    $conn = new PDO("mysql:host=$servername;dbname=2412123_snap", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
<?php
	$sql = "SELECT firstName, lastName FROM users";
	$sqlQuery = $conn->prepare($sql);
	$sqlQuery->execute();
	foreach ($sqlQuery as $row) {
		$firstName = $row['firstName'];
		$lastName = $row['lastName'];
		echo "Hello ";
		echo "$firstName ";
		echo "$lastName</br>";
	}
?>
</body>
</html>