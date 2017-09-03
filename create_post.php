<!--
QUT Capstone Project 2017
Project Owner: Nursery Road State Special School
SNAP - Social Networking Action Platform
Author: Robert Piper
Author: Heath Mayocchi
Author: Levinard Hugo
Author: David MacKenzie	
-->

<?php 
	ob_start();
	require 'php/pdoconnectOnline.inc';
	// session_start();
	include 'php/savePost.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>SNAP POST</title>
	<!--	CSS	-->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/postPreview.css">
</head>
<body class="wrapper">
	<header>
		<button class="button" id="post_back_btn" onclick="backBtn()" onkeyup="postBtnBack(event)">Back</button>
		<div id="user_profile">
			<img src="img/profile-placeholder.png" alt="User profile image"></img>
			<p>Super Long User Name</p>
		</div>
		<h2>SNAP FEED</h2>
	</header>

	<div class="mainBox">
		<div class="boxBackground">
			<img src="#" id="selectedPicture" alt="Picture selected">
			<div class="modal hideModal">
				<?php include "php/post_images.php" ?>
				<button id="selectPicButton">Select</button>
			</div>
			<form action="create_post.php" id="postSubmit" method="POST" enctype="multipart/form-data">
				<textarea id="postComment" name="userPostContent" placeholder="Enter comment... (max 90 characters)" class="textBig" maxlength="90"></textarea>

				<!--This one is for sending pre-uploaded pictures *DON'T TOUCH*	-->
				<input id="picM" type="hidden" name="pic">

				<!-- This one is for sending the uploadURL *DON'T TOUCH*	-->
				<input type="text" name="uploadURL" id="hiddenUploadURL">

				<!-- This is the upload button at the bottom, it's inside the form instead of outside because it's too complicated to program in IE11	-->
				<input type="file" name="uploadLocal" id="uploadLocal" class="uploadVisibility">

				<!--	Submit which is hidden, it will be triggered when the submit button is clicked 	-->
				<input type="submit" name="post" id="hiddenSubmit">
			</form>

			<div class="boxUserPost">
				<img src="img/profile1.jpg" id="boxUserImage">
				<div id="boxDate">
					John Doe 8:45 am
				</div>
			</div>

		</div>
	</div>

	<div class="upload uploadVisibility">
		Insert URL to Upload Pictures or Videos<br>
		<input type="text" class="uploadURL" placeholder="http://" id="uploadURL"><br>
		<div id="uploadLocalTitle">Upload Pictures or Videos Locally</div>
	</div>

	<footer>
		<div id="postButtons">
			<button class="button" id="postCommentButton" onkeyup="postCommentButton(event)">Comment</button>
			<button class="button" id="pictureBtn" onkeyup="postpictureButton(event)" autofocus>Picture</button>
			<button class="button" id="reactButtonPost" onkeyup="postSubmitButton(event)">Submit</button>
		</div>
	</footer>
	<script type="text/javascript" src="js/postPreview.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/post_heath.js"></script>
</body>
</html>