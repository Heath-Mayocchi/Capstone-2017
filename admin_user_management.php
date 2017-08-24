<!--
QUT Capstone Project 2017
Project Owner: Nursery Road State Special School

SNAP - Social Networking Action Platform

Author: Robert Piper
Author: Heath Mayocchi
Author: Levinard Hugo
Author: David Mackenzie	
-->

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/user_home.css">
	<link rel="stylesheet" type="text/css" href="css/admin_user_management.css">
	<script src="js/table_search.js" type="text/javascript"></script>
	<title>SNAP ADMIN HOME</title>
</head>
<body class="wrapper">
	<header>
	<button class="button" id="back_btn" onkeyup="logout(event)">BACK</button>
	<div id="user_profile">
		<img src="img/profile-placeholder.png" alt="User profile image"></img>
		<p>Super Long User Name</p>
	</div>
	<h2>ADMIN USER MANAGEMENT</h2>
	</header>
	<section>
	<div id="editingBody">
		<p id="profileText">Profile Image</p>
		<img src="img/profile-placeholder.png" id="profileImage">
		<button class="button" id="browse_btn">Browse...</button>
		<p>Edit User 
		<textarea id="searchBar"></textarea> 
		<button class="button" id="search_btn">Search</button>
		<button class="button" id="load_user_btn">Load User</button>
		</p>
		<p>First Name <textarea id="firstName"></textarea></p>
		<p>Last Name <textarea id="lastName"></textarea></p>
		<p>D.O.B <textarea id="dateOfBirth"></textarea></p>
		<p>Password <textarea id="dateOfBirth"></textarea></p>
		<p>Confirm Password <textarea id="dateOfBirth"></textarea></p>
		<p>Admin <input type="checkbox" id="adminCheckbox"></p>
		<br>
		<p>Friend Management</p>
		<div id="friendList">
		</div>
	</div>
	</section>
	</body>
</html>
