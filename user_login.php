<?php 
	ob_start();
	session_start();
	require 'php/pdoconnectOnline.inc';

	$tempName = "John";
	$tempLastName = "Doe";

	$query = "SELECT * FROM users WHERE firstName=? AND lastName=?";
	$queryStmt = $conn->prepare($query);
	$queryStmt->execute(array($tempName, $tempLastName));

	$row = $queryStmt->fetch(PDO::FETCH_ASSOC);		// fetch data

	$_SESSION['adminLoggedIn'] = $row['firstName'] . ' ' . $row['lastName'];
	$_SESSION['adminPicture'] = $row['profilePicture'];

 ?>
<!--
QUT Capstone Project 2017
Project Owner: Nursery Road State Special School

SNAP - Social Networking Action Platform

Author: Robert Piper
Author: Heath Mayocchi
Author: Levinard Hugo
Author: David Mackenzie	
-->
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/user_home.css">	
	<link rel="stylesheet" type="text/css" href="css/user_login.css">
	<script src="js/user_login.js" type="text/javascript"></script>
	<title>SNAP ADMIN HOME</title>
</head>
<body class="wrapper">
	<header>
	<h2>USER LOGIN</h2>
	</header>
	<section>
	<input type="text" id="searchBar" onkeyup="filter()" placeholder="Search for names..">
	<div id="tableDiv">
	<table id="userNameTable">
		<?php require "php/load_users.php";?>
	</table>
	</div>
	</section>
	</body>
</html>