<!--
QUT Capstone Project 2017
Project Owner: Nursery Road State Special School

SNAP - Social Networking Action Platform

Author: Robert Piper
Author: Heath Mayocchi
Author: Levinard Hugo
Author: David MacKenzie	
-->

<?php require "./php/view_feed.inc"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/view_feed.css">
	<script src="js/main.js" type="text/javascript"></script>
	<title>SNAP FEED</title>
</head>
<body class="wrapper">
	<header>
		<button class="button" id="back_btn" onclick="backBtn()" onkeyup="feedBtnBack(event)">Back</button>
		<div id="user_profile">
			<img src="img/profile-placeholder.png" alt="User profile image"></img>
			<p>Super Long User Name</p>
		</div>
		<h2>SNAP FEED</h2>
	</header>
	
	<section>

		<?php view_feed();?>

		<div id="comment_view" class="hidden">
			<div class="comment">
				<span class="comment_body">Testing 64 characters in the textbox for the feed page MMMM MMMM</p>
				<span class="comment_date">Andrew Posted at 11:00 am</p>
			</div>
			<div class="comment">
				<span class="comment_body">64 characters should beEnough for LongWords asWellMaybe maybenot</p>
				<span class="comment_date">James Posted at 11:45 am</p>
			</div>
			<div class="comment">
				<span class="comment_body">64 characters will let us reduce the size of the post, so it fits better with normal picture sizes. This is more than 64...</p>
				<span class="comment_date">James Posted at 11:45 am</p>
			</div>		
			<div class="comment">
				<span class="comment_body">I would like a poo emoji, but this app doesn’t have one :(</p>
				<span class="comment_date">James Posted at 11:45 am</p>
			</div>
			<div class="comment">
				<span class="comment_body">This app is so cool I can share my photos and have friends react</p>
				<span class="comment_date">James Posted at 11:45 am</p>
			</div>
			<div class="comment">
				<span class="comment_body">Using standard sentences, we should be able to fit more than 64 characters, 80??</p>
				<span class="comment_date">James Posted at 11:45 am</p>
			</div>
			<div class="comment">
				<span class="comment_body">Is 64 characters enough to say what I want, this could hold 100 but might cause some issues with size</p>
				<span class="comment_date">James Posted at 11:45 am</p>
			</div>
		</div>
	</section>
	
	<div id="latestCommentSection">
		<p id="latestCommentLabel">Latest Comment</p>
		<div class="latestCommentBar">
			<div class="latestCommentProfileImage">
				<img src="img/profile3.jpg"></img>
			</div>

			<div class="latestCommentContent">
				Is 64 characters enough to say what I want, this could hold 100 but might cause some issues with size 
			</div>

			<div class="latestCommentDate"> 
				GirlGamer09&nbsp;02:52 am&nbsp;
			</div>
		</div>


		<div class="latestCommentBar">
			<div class="latestCommentProfileImage">
				<img src="img/profile1.jpg"></img>
			</div>

			<div class="latestCommentContent">
				Yummy cheese cake!
			</div>

			<div class="latestCommentDate"> 
				Anonymous&nbsp;12:59 pm&nbsp;
			</div>
		</div>

		<div class="latestCommentBar">
			<div class="latestCommentProfileImage">
				<img src="img/profile2.jpg"></img>
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
							<button class="button emojiBtn" id="emoji_like" type="submit" onkeyup="emojiButtonLike(event)"><img class="emoji_img" id="emoji_like_img" src="img/emoji-like.png" alt="Like"></img></button>
							<!-- hide emoji selection, update reacted emojis, prev and next from emoji selection focus to changing post display  -->
							<figcaption>Like</figcaption>
						</figure>
					</th>
					<th>
						<figure>
							<button class="button emojiBtn" id="emoji_love" type="submit" onkeyup="emojiButtonLove(event)"><img class="emoji_img" id="emoji_love_img" src="img/emoji-love.png" alt="Love"></img></button>
							<!-- hide emoji selection, update reacted emojis, prev and next from emoji selection focus to changing post display  -->
							<figcaption>Love</figcaption>
						</figure>
					</th>
					<th>
						<figure>
							<button class="button emojiBtn" id="emoji_laugh" type="submit" onkeyup="emojiButtonLaugh(event)"><img class="emoji_img" id="emoji_laugh_img" src="img/emoji-laugh.png" alt="Laugh"></img></button>
							<!-- hide emoji selection, update reacted emojis, prev and next from emoji selection focus to changing post display  -->
							<figcaption>Laugh</figcaption>
						</figure>
					</th>
					<th>
						<figure>
							<button class="button emojiBtn" id="emoji_wow" type="submit" onkeyup="emojiButtonWow(event)"><img class="emoji_img" id="emoji_wow_img" src="img/emoji-wow.png" alt="Wow"></img></button>
							<!-- hide emoji selection, update reacted emojis, prev and next from emoji selection focus to changing post display  -->
							<figcaption>Wow</figcaption>
						</figure>
					</th>
					<th>
						<figure>
							<button class="button emojiBtn" id="emoji_sad" type="submit" onkeyup="emojiButtonSad(event)"><img class="emoji_img" id="emoji_sad_img" src="img/emoji-sad.png" alt="Sad"></img></button>
							<!-- hide emoji selection, update reacted emojis, prev and next from emoji selection focus to changing post display  -->
							<figcaption>Sad</figcaption>
						</figure>
					</th>
					<th>
						<button class="button" id="emoji_cancel_btn" onkeyup="emojiButtonCancel(event)">Cancel</button>
						<!-- hide emoji selection, prev and next from emoji selection focus to changing post display  -->
					</th>
				</tr>
			</table>
		</div>
		<div id="comment_form">
			<table>
				<tr>
					<th>
						<textarea rows="2" id="comment_text_box" form="comment_on_post" placeholder="Enter comment... (max 32 characters)"></textarea>
					</th>
					<th>
						<button class="button" id="comment_submit_button" type="submit">Submit</button>
						<!-- hide comment form, update latest comment and comments list, prev and next from comment form focus to changing post display  -->
					</th>
					<th>
						<button class="button" id="comment_cancel_button" onkeydown="feedBtnCommentCancel()">Cancel</button>
						<!-- hide comment form, prev and next from comment form focus to changing post display  -->
					</th>
				</tr>
			</table>
		</div>

	</article>

	<footer>
		<div id="postNavigationButtons">
			<button class="button" id="previous_btn" onkeyup="feedBtnPrevious(event)" onclick="displayPost(-1)">Previous</button>
			<button class="button" id="next_btn" autofocus onkeyup="feedBtnNext(event)" onclick="displayPost(1)">Next</button>
			<button class="button" id="choose_btn" onkeyup="feedBtnChoose(event)" onclick="feedBtnClickChoose()">Choose</button>
		</div>
		<div id="react_buttons">
			<button class="button" id="emoji_button" onkeyup="feedBtnEmoji(event)">Emoji</button>
			<button class="button" id="comment_button" onkeyup="feedBtnComment(event)">Comment</button>
			<button class="button" id="react_cancel_button" onkeyup="feedBtnCancel(event)">Cancel</button>
		</div>
	</footer>
	
	<!--
	Preload images for previous and next footer navigation buttons
	-->
	</body>
	<script src="js/view_feed.js" type="text/javascript"></script>
</html>