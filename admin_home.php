<!--
QUT Capstone Project 2017
Project Owner: Nursery Road State Special School

SNAP - Social Networking Action Platform

Author: Robert Piper
Author: Heath Mayocchi
Author: Levinard Hugo
Author: David Mackenzie	
-->

<?php 
	session_start();
	require 'php/pdoconnectOnline.inc';

	$query = "SELECT * FROM users WHERE firstName='John' AND lastName='Doe'";
	$queryStmt = $conn->prepare($query);
	$queryStmt->execute();

	$row = $queryStmt->fetch(PDO::FETCH_ASSOC);		// fetch results

	$_SESSION['adminLoggedIn'] = $row['firstName'] . ' ' . $row['lastName'];
	$_SESSION['adminPicture'] = $row['profilePicture'];

 ?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/user_home.css">
	<link rel="stylesheet" type="text/css" href="css/admin_home.css">
	<title>SNAP ADMIN HOME</title>
</head>
<body class="wrapper">
	<header>
	<button class="button" id="logout_btn" onkeyup="logout(event)">LOGOUT</button>
	<div id="user_profile">
		<img src="<?php echo $_SESSION['adminPicture']; ?>" alt="User profile image"></img>
		<p><?php echo $_SESSION['adminLoggedIn']; ?></p>
	</div>
	<h2>ADMIN HOME</h2>
	</header>
	<section>
	<button class="button btnsquare" id="manage_users_btn" onclick="location.href='admin_user_management.php';"><div id="view_feed_text">MANAGE<br>USERS</div></button>
	<button class="button btnsquare" id="manage_pictures_btn" onclick="location.href='admin_picture_management.php';"><div id ="messages_text">MANAGE</div><div id ="messages_text">PICTURES</div></button>
	<button class="button btnsquare" id="manage_emojis_btn" onclick="location.href='admin_emoji_management.php';"><div id ="friends_text">MANAGE</div><div id ="messages_text">EMOJIS</div></button>
	</section>
	</body>
</html>