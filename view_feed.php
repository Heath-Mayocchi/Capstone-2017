<?php 
	ob_start();
	session_start();
	require 'php/view_feed_postEmoji.php';

 ?>
<!--
QUT Capstone Project 2017
Project Owner: Nursery Road State Special School

SNAP - Social Networking Action Platform

Author: Robert Piper
Author: Heath Mayocchi
Author: Levinard Hugo
Author: David MacKenzie	
-->
<?php require_once "./php/view_feed.inc"; ?>
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

	</section>
		
	<article>
		<div id="emoji_selection">
			<table id="emoji_selection_table">
				<tr>
					<th>
						<figure>
							<button class="button emojiBtn" id="emoji_like" onkeyup="feedBtnLike(event)"><img class="emoji_img" id="emoji_like_img" src="img/emoji-like.png" alt="Like"></img></button>
							<!-- hide emoji selection, update reacted emojis, prev and next from emoji selection focus to changing post display  -->
							<figcaption id="like">Like</figcaption>
						</figure>
					</th>
					<th>
						<figure>
							<button class="button emojiBtn" id="emoji_love" onkeyup="feedBtnLove(event)"><img class="emoji_img" id="emoji_love_img" src="img/emoji-love.png" alt="Love"></img></button>
							<!-- hide emoji selection, update reacted emojis, prev and next from emoji selection focus to changing post display  -->
							<figcaption id="love">Love</figcaption>
						</figure>
					</th>
					<th>
						<figure>
							<button class="button emojiBtn" id="emoji_laugh" onkeyup="feedBtnLaugh(event)"><img class="emoji_img" id="emoji_laugh_img" src="img/emoji-laugh.png" alt="Laugh"></img></button>
							<!-- hide emoji selection, update reacted emojis, prev and next from emoji selection focus to changing post display  -->
							<figcaption id="laugh">Laugh</figcaption>
						</figure>
					</th>
					<th>
						<figure>
							<button class="button emojiBtn" id="emoji_wow" onkeyup="feedBtnWow(event)"><img class="emoji_img" id="emoji_wow_img" src="img/emoji-wow.png" alt="Wow"></img></button>
							<!-- hide emoji selection, update reacted emojis, prev and next from emoji selection focus to changing post display  -->
							<figcaption id="wow">Wow</figcaption>
						</figure>
					</th>
					<th>
						<figure>
							<button class="button emojiBtn" id="emoji_sad" onkeyup="feedBtnSad(event)"><img class="emoji_img" id="emoji_sad_img" src="img/emoji-sad.png" alt="Sad"></img></button>
							<!-- hide emoji selection, update reacted emojis, prev and next from emoji selection focus to changing post display  -->
							<figcaption id="sad">Sad</figcaption>
						</figure>
					</th>
					<th>
						<button class="button" id="emoji_cancel_btn" onkeyup="feedBtnEmojiCancel(event)">Cancel</button>
						<!-- hide emoji selection, prev and next from emoji selection focus to changing post display  -->
					</th>
				</tr>
			</table>
		</div>
		<form action="php/new_comment.php" method="post">
			<div id="comment_form">
				<textarea class="post_id" id="comment_post_id" name="comment_post_id"></textarea>
				<table>
					<tr>

						<th>
							<textarea rows="2" id="comment_text_box" placeholder="Enter comment... (max 90 characters)" name="content"></textarea>
						</th>

						<th>
							<button class="button" type="submit" id="comment_submit_button" onkeyup="feedBtnCommentsubmit(event)">Submit</button>
						</th>

						<th>
							<button class="button" type="cancel" value="Cancel" id="comment_cancel_button" onkeyup="feedBtnCommentCancel(event)">Cancel</button>
						</th>

					</tr>
				</table>
			</div>
		</form>	<!-- hide comment form, update latest comment and comments list, prev and next from comment form focus to changing post display  -->

	</article>

	<footer>
		<div id="choose_buttons">
			<button class="button" id="emoji_button" onkeyup="feedBtnEmoji(event)">Emoji</button>
			<button class="button" id="comment_button" onkeyup="feedBtnComment(event)">Comment</button>
			<button class="button" id="choose_cancel_button" onkeyup="feedBtnChooseCancel(event)">Cancel</button>
		</div>
		<div id="postNavigationButtons">
			<button class="button" id="previous_btn" onkeyup="feedBtnPrevious(event)" onclick="displayPost(-1)">Previous</button>
			<button class="button" id="next_btn" autofocus onkeyup="feedBtnNext(event)" onclick="displayPost(1)">Next</button>
			<button class="button" id="choose_btn" onkeyup="feedBtnChoose(event)" >Choose</button>
		</div>
	</footer>
	
	</body>
	<script src="js/view_feed.js" type="text/javascript"></script>
	<script src="js/view_feed_heath_new.js" type="text/javascript"></script>
</html>