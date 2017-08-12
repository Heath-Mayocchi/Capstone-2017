<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8"/>
</head>
<body>
<?php
$servername = "54.206.42.4:3306";
$username = "root";
$password = "machowhizfish";
try {
    $conn = new PDO("mysql:host=$servername;dbname=SNAP", $username, $password);
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