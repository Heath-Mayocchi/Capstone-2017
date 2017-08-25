<!--
QUT Capstone Project 2017
Project Owner: Nursery Road State Special School

SNAP - Social Networking Action Platform

Author: Robert Piper
Author: Heath Mayocchi
Author: Levinard Hugo
Author: David Mackenzie	
-->

<?php 
	session_start();
	require 'php/pdoconnectOnline.inc';
 ?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/admin_user_management.css">
	<title>SNAP ADMIN HOME</title>
</head>
<body class="wrapper">
	<header>
		<button class="button" id="back_btn" onkeyup="logout(event)">BACK</button>
		<div id="user_profile">
			<img src="<?php echo $_SESSION['adminPicture']; ?>" alt="User profile image"></img>
			<p><?php echo $_SESSION['adminLoggedIn']; ?></p>
		</div>
		<h2>ADMIN USER MANAGEMENT</h2>
	</header>

	<section>
		<div id="editingBody">
			
			<div class="midBody">
				<p>To edit an existing user, search by first or last name, then hit 'Load User'</p>
				<label for="editUserForm" id="editUserFormPosition">Edit User:</label>
				<input id="editUserForm" class="formSize" type="text" placeholder="Search ... ">
				<button class="adminButtons" id="searchButton">Search</button>
				<button class="adminButtons" id="loadUserButton">Load User</button>

				<p>To add a new user, fill in the below fields and hit 'Save User'</p>

				<form action="#">
					<!--	First name label and form	-->
					<label for="firstNameForm" id="firstNameFormPosition">First name:</label>
					<input id="firstNameForm" class="formSize" type="text" placeholder="First name ... " name="firstName">

					<!--	Last name label and form	-->
					<br><br>
					<label for="lastNameForm" id="lastNameFormPosition">Last name:</label>
					<input id="lastNameForm" class="formSize" type="text" placeholder="Last name ... " name="lastName">

					<!--	Date label and form	-->
					<br><br>
					<label for="dateForm" id="dateFormPosition">DOB:</label>
					<input id="dateForm" class="formSize" type="text" placeholder="YYYY-MM-DD" name="dob">

					<!--	Admin Checkbox label and form	-->
					<br><br>
					<label for="aCheckBox" id="checkBoxPosition">Admin:</label>
					<input id="aCheckBox" type="checkbox" value="Admin" name="checkBox">

					<!--	Password label and form	-->
					<br><br>
					<label for="password" id="passwordPosition">Password:</label>
					<input id="password" class="formSize" type="password" placeholder="Password ..." name="password">

					<!--	Confirm password label and form	-->
					<br><br>
					<label for="password" id="confirmPasswordPosition">Confirm Password:</label>
					<input id="confirmPassword" class="formSize" type="password" placeholder="Confirm Password ..." name="confirmPassword">

					<img src="img/profile-placeholder.png" id="pictureForUpload">
					<label id="labelForBrowse">Profile Image:</label>
					<input type="file" name="" id="uploadPicture" placeholder="Browse..">

				</form>

			</div>
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
