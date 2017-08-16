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
	<title>SNAP POST</title>
	<!--	CSS	-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/postPreview.css">
</head>
<body class="wrapper">

	<header>
		<button class="imageButton" id="back_btn" onclick="backBtn()"><img id="backBtn_img" src="img/back.png" alt="Back"></img></button>
		<div id="user_profile">
			<img src="img/profile-placeholder.png" alt="User profile image"></img>
			<p>User Name</p>
		</div>
		<h1>SNAP</h1>
		<h2>CREATE A POST</h2>
	</header>

	<div class="mainBox">
		<div class="boxBackground">
			<img src="#" id="selectedPicture" alt="Picture selected">
			<div class="modal hideModal">
				<img src="img/bacon.jpg">
				<img src="img/bigEars.jpg">
				<img src="img/china.jpg">
				<img src="img/frogHat.jpg">
				<img src="img/pussy.jpg">
				<img src="img/sloth.jpg">
				<button class="selectPicButton">SELECT</button>
			</div>
			<form action="#">
				<textarea name="userPostContent" placeholder="Enter post comment..." class="textBig"></textarea>
			</form>
			<div class="boxUserPost">
				<img src="img/img3.png" id="boxUserImage">
				<div id="boxDate">
					John Doe 8:45 am&nbsp;&nbsp;&nbsp;&nbsp;
				</div>
			</div>
		</div>
	</div>
	<article>
		<div id="emoji_selection">
			<table>
				<tr>
					<th>
						<figure>
							<button class="button emojiBtn" id="emoji_like" type="submit"><img class="emoji_img" id="emoji_like_img" src="img/emoji-like.png" alt="Like"></img></button>
							<!-- hide emoji selection, update reacted emojis, prev and next from emoji selection focus to changing post display  -->
							<figcaption>Like</figcaption>
						</figure>
					</th>
					<th>
						<figure>
							<button class="button emojiBtn" id="emoji_love" type="submit"><img class="emoji_img" id="emoji_love_img" src="img/emoji-love.png" alt="Love"></img></button>
							<!-- hide emoji selection, update reacted emojis, prev and next from emoji selection focus to changing post display  -->
							<figcaption>Love</figcaption>
						</figure>
					</th>
					<th>
						<figure>
							<button class="button emojiBtn" id="emoji_laugh" type="submit"><img class="emoji_img" id="emoji_laugh_img" src="img/emoji-laugh.png" alt="Laugh"></img></button>
							<!-- hide emoji selection, update reacted emojis, prev and next from emoji selection focus to changing post display  -->
							<figcaption>Laugh</figcaption>
						</figure>
					</th>
					<th>
						<figure>
							<button class="button emojiBtn" id="emoji_wow" type="submit"><img class="emoji_img" id="emoji_wow_img" src="img/emoji-wow.png" alt="Wow"></img></button>
							<!-- hide emoji selection, update reacted emojis, prev and next from emoji selection focus to changing post display  -->
							<figcaption>Wow</figcaption>
						</figure>
					</th>
					<th>
						<figure>
							<button class="button emojiBtn" id="emoji_sad" type="submit"><img class="emoji_img" id="emoji_sad_img" src="img/emoji-sad.png" alt="Sad"></img></button>
							<!-- hide emoji selection, update reacted emojis, prev and next from emoji selection focus to changing post display  -->
							<figcaption>Sad</figcaption>
						</figure>
					</th>
					<th>
						<button class="button" id="emoji_cancel_btn" onkeydown="feedBtnEmojiCancel()">Cancel</button>
						<!-- hide emoji selection, prev and next from emoji selection focus to changing post display  -->
					</th>
				</tr>
			</table>
		</div>
		<div class="pictureButton">
			<i class="fa fa-picture-o fa-5x" aria-hidden="true" id="faImage"></i>
		</div>
	</article>
	<script type="text/javascript" src="js/postPreview.js"></script>
</body>
</html>