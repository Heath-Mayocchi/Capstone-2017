<?php 
	ob_start();
	session_start();
	require 'php/pdoconnectOnline.inc';

	$tempName = "John";
	$tempLastName = "Doe";

	$query = "SELECT * FROM users WHERE firstName=? AND lastName=?";
	$queryStmt = $conn->prepare($query);
	$queryStmt->execute(array($tempName, $tempLastName));

	$row = $queryStmt->fetch(PDO::FETCH_ASSOC);		// fetch data

	$_SESSION['adminLoggedIn'] = $row['firstName'] . ' ' . $row['lastName'];
	$_SESSION['adminPicture'] = $row['profilePicture'];

 ?>
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
	<link rel="stylesheet" type="text/css" href="css/user_login.css">
	<script src="js/user_login.js" type="text/javascript"></script>
	<title>SNAP USER LOGIN</title>
</head>
<body class="wrapper">
	<header>
	<button class="button" id="back_btn" onclick="window.history.back()" onkeydown="loginBtnBack(event)">Back</button>

	<h2>SNAP LOGIN</h2>
	</header>
	<section>


	<div id="tableDiv">
	<div id="searchDiv">
	<button id="search_btn" class="button" onclick="admin_search(event)">Search</button>
	<input type="text" id="searchBar" onkeyup="filter()" placeholder="Search for names..">
	</div>	

		<div id="scollDiv">
			<table id="userNameTable">
				<?php require "php/load_users.php";?>
			</table>
		</div>	
	</div>






		<!-- The Password Entry Modal for Admin Users -->
		<div id="admin_popup" class="modal">
		  <span onclick="document.getElementById('admin_popup').style.display='none'" 
		class="close" title="Close Modal">&times;</span>

		  <!-- Modal Content -->
		  <form class="modal-content animate" action="admin_home.php" method="post">
		    <div class="imgcontainer">
		      <img src="img/profile-placeholder.png" id="admin_avatar" alt="Avatar" class="avatar">
		    
 				</div>

		    <div class="container">

		      <label><b id="admin_username">Please enter the password for </b></label>
		      <input type="password" id="admin_password" placeholder="Enter Password" name="psw" required>

		    </div>

		    <div class="container" style="background-color:#f1f1f1">
		      <button  class="button" id="admin_login" type="submit">Login</button>
		      <button  class="button" type="button" id="admin_cancel" onclick="document.getElementById('admin_popup').style.display='none'" >Cancel</button>
		    </div>
		  </form>
		</div>



		<!-- The Regular Login Modal for Regular Users -->
		<div id="student_popup" class="modal">
		  <span onclick="document.getElementById('student_popup').style.display='none'" 
		class="close" title="Close Modal">&times;</span>

		  <!-- Modal Content -->
		  <form class="modal-content animate" id="student_form" action="user_home.php" method="post">
		    <div class="imgcontainer">
		      <img src="img/profile-placeholder.png" id="student_avatar" alt="Avatar" class="avatar">
		    
 				</div>

		    <div class="container">
		      <label><b id="student_username">Log in as </b></label>
		    </div>

		    <div class="container" style="background-color:#f1f1f1">
		      <button class="button" id="student_login" onkeydown="loginBtnStudentLogin(event)" type="submit">Login</button>
		      <button class="button" id="student_cancel" onkeydown="loginBtnStudentCancel(event)" type="reset">Cancel</button>
		    </div>
		  </form>
		</div>

	</section>
	</body>

		<div id="loginNavigationButtons">
			<button class="button" id="previous_btn" onkeydown="loginBtnPrevious(event)" onclick="">Previous</button>
			<button class="button" id="next_btn" autofocus onkeydown="loginBtnNext(event)" onclick="">Next</button>
			<button class="button" id="select_btn" onkeydown="loginBtnSelect(event)">Select</button>
		</div>	

</html>