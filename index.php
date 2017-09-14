<!DOCTYPE html>
<html>
<head>
	<title>SNAP LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/user_login_letter.css">
</head>
<body class="wrapper">
	<header>
		<h2>LOGIN</h2>
	</header>

	<section>
		<p id="label">Select the button with the letter of your first or last name</p>
		<div id="mainBox">
			<button onclick="window.location.href='user_login.php'" class="letters row1" id="abc" autofocus>A B C</button>
			<button onclick="window.location.href='user_login.php'" class="letters row1" id="def">D E F</button>
			<button onclick="window.location.href='user_login.php'" class="letters row1" id="ghi">G H I</button>
			<button onclick="window.location.href='user_login.php'" class="letters row1" id="jkl">J K L</button>
		</div>
		<div id="mainBox2">
			<button onclick="window.location.href='user_login.php'" class="letters row2" id="mno">M N O</button>
			<button onclick="window.location.href='user_login.php'" class="letters row2" id="pqrs">P Q R S</button>
			<button onclick="window.location.href='user_login.php'" class="letters row2" id="tuv">T U V</button>
			<button onclick="window.location.href='user_login.php'" class="letters row2" id="wxyz">W X Y Z</button>
		</div>
	</section>
	<script type="text/javascript" src="js/user_login_letter.js"></script>
</body>
</html>