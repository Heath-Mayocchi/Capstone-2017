<?php 
	ob_start();
	session_start();
	header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	require 'php/pdoconnectOnline.inc';
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
	<link rel="stylesheet" type="text/css" href="css/view_feed.css">
	<script src="js/main.js" type="text/javascript"></script>
	<script src="js/load.js" type="text/javascript"></script>
	<title>SNAP FEED</title>
	</head>
	<body class="wrapper">
		<header>
			<button class="button" id="back_btn" onclick="backBtn()" onkeyup="feedBtnBack(event)">Back</button>
			<div id="user_profile">
				<img src="img/profile-placeholder.png" alt="User profile image"></img>
				<p>Super Long User Name</p>
			</div>
			<h2>FEED</h2>
		</header>
	<section>
		<div id="post_view"><b>Person info will be listed here...</b></div>
	</section>
	</body>
	<script src="js/view_feed.js" type="text/javascript"></script>
	<script src="js/view_feed_heath_new.js" type="text/javascript"></script>
</html>