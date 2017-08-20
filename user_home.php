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
	<script src="js/user_home.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
	<title>SNAP HOME</title>
</head>
<body class="wrapper">
	<header>
	<button class="button" id="logout_btn" onkeyup="logout(event)">LOGOUT</button>
	<div id="user_profile">
		<img src="img/profile-placeholder.png" alt="User profile image"></img>
		<p>Super Long User Name</p>
	</div>
	<h2>SNAP HOME</h2>
	</header>
	<section>
	<button class="button btnsquare" id="view_feed_btn" onclick="location.href='view_feed.php';" onkeyup="view_feed(event)">VIEW<br>FEED</button>
	<button class="button btnsquare" id="create_post_btn" onclick="location.href='create_post.php';" onkeyup="create_post(event)">CREATE<br>POST</button>
	<button class="button btnsquare" id="friends_btn" onclick="location.href='#';" onkeyup="friends(event)">FRIENDS</button>
	<button class="button btnsquare" id="messages_btn" onclick="location.href='#';" onkeyup="messages(event)">MESSAGES</button>
	</section>
	</body>
</html>