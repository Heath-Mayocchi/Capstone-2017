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
	<link rel="stylesheet" type="text/css" href="css/view_feed_latest_comment.css">
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
				<div class="userPost">
					<img src="img/profile1.jpg" class="userPic">
					<div class="userComment">
						I love me some tanks, yo!
					</div>
					<div class="userPostDate">
						Abdul Muhammad&nbsp;1:52 am&nbsp;
					</div>
				</div>
			</div>
			<div class="post">
				<img src="img/cheesecake.jpg">
				<div class="userPost">
					<img src="img/profile2.jpg" class="userPic">
					<div class="userComment">
						Lunch needs more of this. :)
					</div>
					<div class="userPostDate">
						Victoria Justice&nbsp;11:03 am&nbsp;
					</div>
				</div>
			</div>
			<div class="post">
				<img src="img/kitten.jpg">
				<div class="userPost">
					<img src="img/profile3.jpg" class="userPic">
					<div class="userComment">
						Mr Boots Nom Nom Nom!
					</div>
					<div class="userPostDate">
						Corey Parkinson&nbsp;11:00 am&nbsp;
					</div>
				</div>
			</div>
		</div>
		
	<div id="comment_view" class="hidden">
		<div class="comment">
			<span class="comment_body">Uh Oh.</p>
			<span class="bottom_right">James Posted at 11:45 am</p>
		</div>
		<div class="comment">
			<span class="comment_body">These aren't part of the parent postThese aren't part of the parent post.</p>
			<span class="bottom_right">John Posted at 11:15 am</p>
		</div>
		<div class="comment">
			<span class="comment_body">Time for a re-jig.</p>
			<span class="bottom_right">Andrew Posted at 11:00 am</p>
		</div>
				<div class="comment">
			<span class="comment_body">Time for a re-jig.</p>
			<span class="bottom_right">James Posted at 11:45 am</p>
		</div>
				<div class="comment">
			<span class="comment_body">Time for a re-jig.</p>
			<span class="bottom_right">James Posted at 11:45 am</p>
		</div>		<div class="comment">
			<span class="comment_body">Time for a re-jig.</p>
			<span class="bottom_right">James Posted at 11:45 am</p>
		</div>
				<div class="comment">
			<span class="comment_body">Time for a re-jig.</p>
			<span class="bottom_right">James Posted at 11:45 am</p>
		</div>
	</div>
	</section>

	<div id="latestCommentSection">
		<div class="latestCommentBar">
			<div class="latestCommentPicture">
				<img src="img/img1.png">
			</div>

			<div class="latestCommentContent">
				That's a nice looking tank you got there! 
			</div>

			<div class="latestCommentDate"> 
				GirlGamer09&nbsp;02:52 am&nbsp;
			</div>
		</div>


		<div class="latestCommentBar">
			<div class="latestCommentPicture">
				<img src="img/img2.png">
			</div>

			<div class="latestCommentContent">
				Yummy cheese cake!
			</div>

			<div class="latestCommentDate"> 
				Anonymous&nbsp;12:59 pm&nbsp;
			</div>
		</div>

		<div class="latestCommentBar">
			<div class="latestCommentPicture">
				<img src="img/img3.png">
			</div>

			<div class="latestCommentContent">
				Nawwww isn't she cute
			</div>

			<div class="latestCommentDate"> 
				John Doe&nbsp;6:03 pm&nbsp;
			</div>
		</div>
	</div>
	<article>

	<div id="emoji_selection">
	<table>
	<tr>
	<th>
	<figure>
	<button class="button emojiBtn" id="emoji_like"><img class="emoji_img" id="emoji_like_img" src="img/emoji-like.png" alt="Like"></img></button>
	<figcaption>Like</figcaption>
	</figure>
	</th>
	<th>
	<figure>
	<button class="button emojiBtn" id="emoji_love"><img class="emoji_img" id="emoji_love_img" src="img/emoji-love.png" alt="Love"></img></button>
	<figcaption>Love</figcaption>
	</figure>
	</th>
	<th>
	<figure>
	<button class="button emojiBtn" id="emoji_laugh"><img class="emoji_img" id="emoji_laugh_img" src="img/emoji-laugh.png" alt="Laugh"></img></button>
	<figcaption>Laugh</figcaption>
	</figure>
	</th>
	<th>
	<figure>
	<button class="button emojiBtn" id="emoji_wow"><img class="emoji_img" id="emoji_wow_img" src="img/emoji-wow.png" alt="Wow"></img></button>
	<figcaption>Wow</figcaption>
	</figure>
	</th>
	<th>
	<figure>
	<button class="button emojiBtn" id="emoji_sad"><img class="emoji_img" id="emoji_sad_img" src="img/emoji-sad.png" alt="Sad"></img></button>
	<figcaption>Sad</figcaption>
	</figure>
	</th>
	<th>
	<button class="button" id="cancel_btn" onkeydown="feedBtnCancel(event)">Cancel</button>
	</th>
	</tr>
	</table>
	</div>
	</article>
	<span id="comment_box" class="hidden">
		<textarea rows="4" cols="50" id="comment_form" form="usrform">Enter comment... (max 32 characters)
		</textarea>
		<img src="img/submit.png" id="submit_button">
		<img src="img/cancel.png" id="cancel_button">
	</span>

	<footer >
		<button class="imageButton" id="previous_btn" onkeydown="feedBtnPrevious(event)" onclick="plusDivs(-1)"><img id="prev_img" src="img/previous.png" alt="Previous"></img></button>
		<button class="imageButton" id="next_btn" autofocus onkeydown="feedBtnNext(event)" onclick="plusDivs(1)"><img id="next_img" src="img/next_selected.png" alt="Next"></img></button>
		<button class="button" id="react_btn" onkeydown="feedBtnReact(event)">React</button>
	</footer>
	<!--
	Preload images for previous and next footer navigation buttons
	-->
	<div id="preloaded-images">
	   <img src="img/previous_selected.png" width="1" height="1" alt="Previous" />
	   <img src="img/next.png" width="1" height="1" alt="Next" />
	</div>
	</body>
	<script src="js/view_feed.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
</html>