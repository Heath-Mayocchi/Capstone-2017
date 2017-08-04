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
	<script src="js/user_home.js"></script>
	<title>SNAP HOME</title>
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
	<button class="button btnsquare" id="view_feed_btn" onclick="location.href='#';"><div id="view_feed_text">VIEW<br>FEED</div></button>
	<button class="button btnsquare" id="create_post_btn" onclick="location.href='#';"><div id ="make_post_text">CREATE<br>POST</div></button>
	<button class="button btnsquare" id="messages_btn" onclick="location.href='#';"><div id ="messages_text">MESSAGES</div></button>
	<button class="button btnsquare" id="friends_btn" onclick="location.href='#';"><div id ="friends_text">FRIENDS</div></button>
	</section>
	<footer>
	<button class="previous_btn" onkeypress="userHomeBtnFocusBack(event)"><img src="img/previous.png" alt="Previous"></img></button>
	<button class="next_btn" autofocus onfocus="nextfocus()" onkeypress="userHomeBtnFocusFwd(event)"><img class="next_btn_img" src="img/next.png" alt="Next"></img></button>
	<button class="button select_btn" onkeypress="userHomeBtnActivate(event)">Select</button>
	</footer>
	</body>
</html>