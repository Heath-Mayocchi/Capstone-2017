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
				<span class="comment_date">James Posted at 11:45 am</p>
			</div>
			<div class="comment">
				<span class="comment_body">These aren't part of the parent post. These aren't part of the parent post.</p>
				<span class="comment_date">John Posted at 11:15 am</p>
			</div>
			<div class="comment">
				<span class="comment_body">Time for a re-jig.</p>
				<span class="comment_date">Andrew Posted at 11:00 am</p>
			</div>
			<div class="comment">
				<span class="comment_body">Time for a re-jig.</p>
				<span class="comment_date">James Posted at 11:45 am</p>
			</div>
			<div class="comment">
				<span class="comment_body">Time for a re-jig.</p>
				<span class="comment_date">James Posted at 11:45 am</p>
			</div>		
			<div class="comment">
				<span class="comment_body">Time for a re-jig.</p>
				<span class="comment_date">James Posted at 11:45 am</p>
			</div>
			<div class="comment">
				<span class="comment_body">Time for a re-jig.</p>
				<span class="comment_date">James Posted at 11:45 am</p>
			</div>
			<div class="comment">
				<span class="comment_body">Next comment is 32 characters wide</p>
				<span class="comment_date">James Posted at 11:45 am</p>
			</div>
			<div class="comment">
				<span class="comment_body">MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM</p>
				<span class="comment_date">James Posted at 11:45 am</p>
			</div>
			<div class="comment">
				<span class="comment_body">MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM</p>
				<span class="comment_date">James Posted at 11:45 am</p>
			</div>
		</div>
	</section>
	
	

		<table id="reacted_emojis">
			<tr>
				<th>
					<img class="emoji_img" id="emoji_like_reacted" src="img/emoji-like.png" alt="Like"></img>
				</th>
				<th>
					<img class="emoji_img" id="emoji_love_reacted" src="img/emoji-love.png" alt="Love"></img>
				</th>
				<th>
					<img class="emoji_img" id="emoji_laugh_reacted" src="img/emoji-laugh.png" alt="Laugh"></img>
				</th>
				<th>
					<img class="emoji_img" id="emoji_wow_reacted" src="img/emoji-wow.png" alt="Wow"></img>
				</th>
				<th>
					<img class="emoji_img" id="emoji_sad_reacted" src="img/emoji-sad.png" alt="Sad"></img>
				</th>
				<th>
					<p id="reacted_emoji_txt">You and 12 others</p>
				</th>
			</tr>
		</table>
		
	
	<p id="latestCommentLabel">Latest Comment</p>	
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
		<div id="react_buttons">
			<table>
				<tr>
					<th>
						<button class="button" id="emoji_button" onkeydown="feedBtnEmoji()">Emoji</button>
						<!-- display emoji selection, prev and next change from react tbn focus to emoji select focus -->
					</th>
					<th>
						<button class="button" id="comment_button" onkeydown="feedBtnComment()">Comment</button>
						<!-- Display comment form, prev and next change from react btn focus to comment form focus -->
					</th>
					<th>
						<button class="button" id="react_cancel_button" onkeydown="feedBtnReactCancel()">Cancel</button>
						<!-- Hide react btns, hide comments, prev and next from react btn focus to changeing post display -->
					</th>
				</tr>
			</table>
		</div>
	</article>

	<footer>
		<button class="imageButton" id="previous_btn" onkeydown="feedBtnPrevious(event)" onclick="displayPost(-1)"><img id="prev_img" src="img/previous.png" alt="Previous"></img></button>
		<button class="imageButton" id="next_btn" autofocus onkeydown="feedBtnNext(event)" onclick="displayPost(1)"><img id="next_img" src="img/next_selected.png" alt="Next"></img></button>
		<button class="button" id="react_btn" onkeydown="feedBtnReact(event)">Select</button><!-- display react btns, display comments, prev and next btns change from post display to react btn focus -->
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
	<script src="js/view_feed_heath.js" type="text/javascript"></script>
</html>