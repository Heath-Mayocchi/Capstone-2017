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
	<title>Compose a Post || SNAP</title>
	<!--	CSS	-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/postPreview.css">
</head>
<body class="wrapper">
	<div class="top">
		Create a Post 	&nbsp;&nbsp;<span><i class="fa fa-pencil" aria-hidden="true"></i></span>
	</div>

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
	<div class="pictureButton">
		<i class="fa fa-picture-o fa-5x" aria-hidden="true" id="faImage"></i>
	</div>
	<script type="text/javascript" src="js/postPreview.js"></script>
</body>
</html>