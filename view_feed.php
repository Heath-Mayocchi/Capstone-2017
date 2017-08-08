<!--
QUT Capstone Project 2017
Project Owner: Nursery Road State Special School

SNAP - Social Networking Action Platform

Author: Robert Piper
Author: Heath Mayocchi
Author: Levinard Hugo
Author: David MacKenzie	
-->

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/user_home.css">
	<link rel="stylesheet" type="text/css" href="css/view_feed.css">
	<script src="js/user_home.js"></script>
	<script src="js/shortcut.js" type="text/javascript"></script>
	<script src="js/view_feed.js" type="text/javascript"></script>
	<title>VIEW FEED</title>
</head>
<body class="user_home_wrapper">
	<header>
	<button class="button btncircle" id="logout_btn" onkeypress="feedBtnFocus(event)">LOGOUT</button>
	<div id="user_profile">
	<img src="img/profile-placeholder.png" alt="User profile image"></img>
	<p>User Name</p>
	</div>
	<h1>SNAP</h1>
	<h2>Social Networking Action Platform</h2>
	</header>
	<section>
	<div id="post_view">
		<div class="post">
			<img src="img/tank.jpg">
			<p>I love me some tanks, yo!</p>
		</div>
		<div class="post">
			<img src="img/cheesecake.jpg">
			<p>Lunch needs more of this. :)</p>
		</div>
		<div class="post">
			<img src="img/kitten.jpg">
			<p>Mr Boots Nom Nom Nom!</p>
		</div>
		<script>showDivs(1);</script>
	</div>
	<div id="comment_view">
	<h2>Comments</h2>
	<p>Uh Oh.</p>
	<p>These aren't part of the parent post.</p>
	<p>Time for a re-jig.</p>

	</div>
	
</section>
	<footer >
	<button class="button previous_btn" id="previous_btn" onclick="plusDivs(-1)"><img src="img/previous.png" alt="Previous"></img></button>
	<button class="button next_btn" id="next_btn" autofocus onfocus="nextfocus()" onclick="plusDivs(1)"><img class="next_btn_img" src="img/next.png" alt="Next"></img></button>
	<button class="button select_btn" id="select_btn">Select</button>
	</footer>
	</body>
</html>