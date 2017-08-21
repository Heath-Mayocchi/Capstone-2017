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
		<div id="post_view">
			<div class="post">
				<img src="img/tank.jpg">
				<div class="userPost">
					<img src="img/profile1.jpg" class="userPic">
					<div class="userComment">
						Is 64 characters enough to say what I want, this could hold 100 but might cause some issues with size
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
		<div id="choose_buttons">
			<button class="button" id="emoji_button" onkeyup="feedBtnEmoji()">Emoji</button>
			<button class="button" id="comment_button" onkeyup="feedBtnComment()">Comment</button>
			<button class="button" id="choose_cancel_button" onkeyup="feedBtnChooseCancel()">Cancel</button>
		</div>
		<div id="postNavigationButtons">
			<button class="button" id="previous_btn" onkeyup="feedBtnPrevious(event)" onclick="displayPost(-1)">Previous</button>
			<button class="button" id="next_btn" autofocus onkeyup="feedBtnNext(event)" onclick="displayPost(1)">Next</button>
			<button class="button" id="choose_btn" onkeyup="feedBtnChoose(event)" onclick="feedBtnClickChoose()">Choose</button>
		</div>
	</footer>
	
	<!--
	Preload images for previous and next footer navigation buttons
	
	<div id="preloaded-images">
	   <img src="img/previous_selected.png" width="1" height="1" alt="Previous" />
	   <img src="img/next.png" width="1" height="1" alt="Next" />
	</div>
	-->
	</body>
	<script src="js/view_feed.js" type="text/javascript"></script>
	<script src="js/view_feed_heath_new.js" type="text/javascript"></script>
</html>