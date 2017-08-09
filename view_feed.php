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
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/view_feed.css">
	<script src="js/view_feed.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
	<title>VIEW FEED</title>
</head>
<body class="wrapper">
	<header>
	<button class="imageButton" id="back_btn" onclick="backBtn()"><img id="backBtn_img" src="img/back.png" alt="Back"></img></button>
	<div id="user_profile">
	<img src="img/profile-placeholder.png" alt="User profile image"></img>
	<p>User Name</p>
	</div>
	<h1>SNAP</h1>
	<h2>FEED</h2>
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
	<article>
	<button class="button emoji" id="emoji_like"><img class="emoji_img" id="emoji_like_img" src="img/emoji-like.png" alt="Like"></img></button>
	<button class="button emoji" id="emoji_love"><img class="emoji_img" id="emoji_love_img" src="img/emoji-love.png" alt="Love"></img></button>
	<button class="button emoji" id="emoji_laugh"><img class="emoji_img" id="emoji_laugh_img" src="img/emoji-laugh.png" alt="Laugh"></img></button>
	<button class="button emoji" id="emoji_wow"><img class="emoji_img" id="emoji_wow_img" src="img/emoji-wow.png" alt="Wow"></img></button>
	<button class="button emoji" id="emoji_sad"><img class="emoji_img" id="emoji_sad_img" src="img/emoji-sad.png" alt="Sad"></img></button>
	</article>
	<footer >
	<button class="imageButton" id="previous_btn" onkeydown="feedBtnPrevious(event)" onclick="plusDivs(-1)"><img id="prev_img" src="img/previous.png" alt="Previous"></img></button>
	<button class="imageButton" id="next_btn" autofocus onkeydown="feedBtnNext(event)" onclick="plusDivs(1)"><img id="next_img" src="img/next_selected.png" alt="Next"></img></button>
	<button class="button" id="react_btn" onkeydown="feedBtnReact(event)">React</button>
	</footer>
	</body>
</html>