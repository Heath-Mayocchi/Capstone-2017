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
	$conn = null;

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
	<link rel="stylesheet" type="text/css" href="css/friends.css">
	<script src="js/jquery-3.2.1.js"></script>	
	<script src="js/friends.js" type="text/javascript"></script>
	<title>FRIENDS</title>
</head>
<body class="wrapper">
	<header>
	<button class="button" id="back_btn" onclick="window.history.back()" onkeydown="friendBtnBack(event)">Back</button>
	<button class="button" id="add_btn" onkeydown="friendBtnAdd(event,<?php echo $_GET['userID']; ?>)">New Friends</button>

	<h2>MY FRIENDS</h2>
	</header>
	<section>


	<div id="tableDiv">
	<div id="searchDiv">
	<button id="search_btn" class="button" onclick="admin_search(event)">Search</button>
	<input type="text" id="searchBar" onkeyup="filter(event)" placeholder="Search for names..">
	</div>	

		<div id="scollDiv">
			<table id="userNameTable">
				<?php require "php/load_my_friends.php";?>
			</table>
		</div>	
	</div>


	</section>
	</body>

		<div id="friendNavigationButtons">
			<button class="button" id="previous_btn" onkeydown="friendBtnPrevious(event)" onclick="">Previous</button>
			<button class="button" id="next_btn" autofocus onkeydown="friendBtnNext(event)" onclick="">Next</button>
			<button class="button" id="select_btn" onkeydown="friendBtnSelect(event)">Select</button>
		</div>	

</html>