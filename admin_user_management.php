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
		<p class="smallText">To edit an existing user, search by first or last name, then hit 'Load User'</p>
		<p>Edit User 
		<textarea id="searchBar"></textarea> 
		<button class="button" id="search_btn">Search</button>
		<button class="button" id="load_user_btn">Load User</button>
		</p>
		<p class="smallText">To add a new user, fill in the below fields and hit 'Save User'</p>
		<p>First Name <textarea id="firstName" name="firstName"></textarea></p>
		<p>Last Name <textarea id="lastName" name="lastName"></textarea></p>
		<p>D.O.B <textarea id="dateOfBirth" name=""></textarea></p>
		<p>Admin <input type="checkbox" id="adminCheckbox" name="adminCheckbox"></p>
		<p>Password <textarea id="password" name="password"></textarea></p>
		<p>Confirm Password <textarea id="confirmPassword" name="confirmPassword"></textarea></p>
		<br>
		<p>Friend Management</p>
		<div id="friendList">
			<button class="button" id="add_friend_btn">Add Friend</button>
			<button class="button" id="remove_friend_btn">Remove Friend</button>
			<div id="friendListInnerDiv">
			<table>
				<tr>
					<td>
						<input type="checkbox">
					</td>
					<td>
						<img src="img/profile-placeholder.png" class="friendProfilePicture">
					</td>
					<td>
						John Doe
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox">
					</td>
					<td>
						<img src="img/profile-placeholder.png" class="friendProfilePicture">
					</td>
					<td>
						John Doe
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox">
					</td>
					<td>
						<img src="img/profile-placeholder.png" class="friendProfilePicture">
					</td>
					<td>
						John Doe
					</td>
				</tr
			</table>
			</div>
		</div>
	</div>
	</section>
	</body>
</html>
