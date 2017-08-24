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
	session_start();
	
	require 'php/pdoconnectOnline.inc';
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
				<img src="img/pig.jpg">
				<img src="img/ears.jpg">
				<img src="img/panda.jpg">
				<img src="img/hat.jpg">
				<img src="img/cat.jpg">
				<img src="img/sloth.jpg">
				<button id="selectPicButton">Select</button>
			</div>
			<form action="create_post.php" id="postSubmit" method="POST">
				<textarea id="postComment" name="userPostContent" placeholder="Enter comment... (max 90 characters)" class="textBig"></textarea>
				<input id="picM" type="hidden" name="pic">	<!--	This is for sending pre-uploaded pictures	-->
				<input type="text" name="uploadURL" id="hiddenUploadURL">
				<input type="submit" name="post" id="hiddenSubmit">
			</form>
			<div class="boxUserPost">
				<img src="img/profile1.jpg" id="boxUserImage">
				<div id="boxDate">
					John Doe 8:45 am&nbsp;&nbsp;&nbsp;&nbsp;
				</div>
			</div>
		</div>
	</div>

	<div class="upload uploadVisibility">
		Insert URL for Pictures or Videos<br>
		<input type="text" class="uploadURL" placeholder="http://" id="uploadURL"> <br>
		<!--	Not sure if this is part of the #117
		<input type="file" name="uploadLocal" form="postSubmit" class="uploadLocal"> -->
	</div>

	<footer>
		<div id="postButtons">
			<button class="button" id="postCommentButton" onkeyup="postCommentButton(event)">Comment</button>
			<button class="button" id="pictureBtn" onkeyup="postpictureButton(event)" autofocus>Picture</button>
			<button class="button" id="reactButtonPost" type="submit" onkeyup="postSubmitButton(event)">Submit</button>
		</div>
	</footer>
	<script type="text/javascript" src="js/postPreview.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/post_heath.js"></script>
</body>
</html>