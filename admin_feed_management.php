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
	<link rel="stylesheet" type="text/css" href="css/admin_feed_management.css">
	<script src="js/main.js" type="text/javascript"></script>
	<script src="js/feed_management.js" type="text/javascript"></script>
	<title>SNAP FEED MANAGEMENT</title>
</head>
<body class="wrapper">
	<header>
		<button class="admin_button" id="back_btn2" onclick="window.location='admin_home.php';">BACK</button>
		<div id="user_profile">
			<img src="<?php echo $_SESSION['adminPicture']; ?>" alt="User profile image"></img>
			<p><?php echo $_SESSION['adminLoggedIn']; ?></p>
		</div>
		<h2>FEED MANAGEMENT</h2>
	</header>
	
	<section>
	<!-- Filter box -->
		<div id="filter_post">
			<form action="#" method="#">
				<p id="filter_post_title">Filter by:<br><br>Username or<br>Keyword</p>
				<input id="user_keyword" type="text" placeholder="Username or Keyword ... " name="user_keyword">
				<p>Date From:</p>
				<!-- type="date" is not supported in Firefox, Internet Explorer 11 and earlier versions -->
				<input id="from_date" type="date" placeholder="dd-mm-yyyy" name="from_date">
				<p>Date To:</p>
				<input id="to_date" type="date" placeholder="dd-mm-yyyy" name="to_date">
				<br><br>
				<button id="filter_post_btn" class="admin_button" name="filter_post_btn">Filter</button>
			</form>
		</div>
	</section>
	
	<aside>
	<!-- Post display -->
		<div id="post_list_header">
			<table id="post_list_header_table">
				<tr>
					<th>From</th><th>Title</th><th>Date</th>	
				</tr>
			</table>
		</div>
		<div id="post_list_box">
			<table id="post_list">			
				<tr id="post_row1">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row1')"/></td><td width=150px>Dan Theman</td><td width=250px>My Best Friend</td><td width=100px>13-09-2017</td>
				</tr>			
				<tr id="post_row2">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row2')"/></td><td>Joe Blog</td><td>Another Post</td><td class="table_date">12-09-2017</td>
				</tr>			
				<tr id="post_row3">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row3')"/></td><td>John Doe</td><td>I love me some tanks yo!</td><td class="table_date">11-09-2017</td>
				</tr>			
				<tr id="post_row4">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row4')"/></td><td>Dan Theman</td><td>My cat</td><td class="table_date">11-09-2017</td>
				</tr>			
				<tr id="post_row5">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row5')"/></td><td>TestingA SuperLongName</td><td>Is 64 characters enough to say what I want this could hold 100 but might cause some issues</td><td class="table_date">10-09-2017</td>
				</tr>			
				<tr id="post_row6">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row6')"/></td><td width=150px>Dan Theman</td><td width=250px>My Best Friend</td><td width=100px>13-09-2017</td>
				</tr>			
				<tr id="post_row7">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row7')"/></td><td>Joe Blog</td><td>Another Post</td><td class="table_date">12-09-2017</td>
				</tr>			
				<tr id="post_row8">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row8')"/></td><td>John Doe</td><td>I love me some tanks yo!</td><td class="table_date">11-09-2017</td>
				</tr>			
				<tr id="post_row9">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row9')"/></td><td>Dan Theman</td><td>My cat</td><td class="table_date">11-09-2017</td>
				</tr>			
				<tr id="post_row10">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row10')"/></td><td>Some Girl</td><td>Something girly</td><td class="table_date">10-09-2017</td>
				</tr>		
				<tr id="post_row11">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row11')"/></td><td width=150px>Dan Theman</td><td width=250px>My Best Friend</td><td width=100px>13-09-2017</td>
				</tr>			
				<tr id="post_row12">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row12')"/></td><td>Joe Blog</td><td>Another Post</td><td class="table_date">12-09-2017</td>
				</tr>			
				<tr id="post_row13">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row13')"/></td><td>John Doe</td><td>I love me some tanks yo!</td><td class="table_date">11-09-2017</td>
				</tr>			
				<tr id="post_row14">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row14')"/></td><td>Dan Theman</td><td>My cat</td><td class="table_date">11-09-2017</td>
				</tr>			
				<tr id="post_row15">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row15')"/></td><td>Some Girl</td><td>Something girly</td><td class="table_date">10-09-2017</td>
				</tr>		
				<tr id="post_row16">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row16')"/></td><td width=150px>Dan Theman</td><td width=250px>My Best Friend</td><td width=100px>13-09-2017</td>
				</tr>			
				<tr id="post_row17">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row17')"/></td><td>Joe Blog</td><td>Another Post</td><td class="table_date">12-09-2017</td>
				</tr>			
				<tr id="post_row18">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row18')"/></td><td>John Doe</td><td>I love me some tanks yo!</td><td class="table_date">11-09-2017</td>
				</tr>			
				<tr id="post_row19">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row19')"/></td><td>Dan Theman</td><td>My cat</td><td class="table_date">11-09-2017</td>
				</tr>			
				<tr id="post_row20">
					<td><input id="checkbox" type="checkbox" onclick="selected('post_row20')"/></td><td>Some Girl</td><td>Something girly</td><td class="table_date">10-09-2017</td>
				</tr>
			</table>
		</div>
		<div id="post_preview">
			<p id="preview_title">Picture Preview</p>
			<div id="post_image_preview">
				<img src="img/panda.jpg" alt="#">
			</div>			
			<p id="comments_title">Comments</p>
			<div id="post_comments_table_box">
				<table id="post_comments">						
					<tr id="comment_row1">
						<td id="checkbox"><input type="checkbox" onclick="selected('comment_row1')"/></td><td width=200px>Insert comment here</td>
					</tr>				
					<tr id="comment_row2">
						<td id="checkbox"><input type="checkbox" onclick="selected('comment_row2')"/></td><td>Is 64 characters enough to say what I want this could hold 100 but might cause some issues</td>
					</tr>				
					<tr id="comment_row3">
						<td id="checkbox"><input type="checkbox" onclick="selected('comment_row3')"/></td><td>Insert comment here</td>
					</tr>				
					<tr id="comment_row4">
						<td id="checkbox"><input type="checkbox" onclick="selected('comment_row4')"/></td><td>Insert comment here</td>
					</tr>				
					<tr id="comment_row5">
						<td id="checkbox"><input type="checkbox" onclick="selected('comment_row5')"/></td><td>Insert comment here</td>
					</tr>				
					<tr id="comment_row6">
						<td id="checkbox"><input type="checkbox" onclick="selected('comment_row6')"/></td><td>Insert an extra long comment in here</td>
					</tr>				
					<tr id="comment_row7">
						<td id="checkbox"><input type="checkbox" onclick="selected('comment_row7')"/></td><td>Insert comment here</td>
					</tr>				
					<tr id="comment_row8">
						<td id="checkbox"><input type="checkbox" onclick="selected('comment_row8')"/></td><td>Insert comment here</td>
					</tr>				
					<tr id="comment_row9">
						<td id="checkbox"><input type="checkbox" onclick="selected('comment_row9')"/></td><td>Insert comment here</td>
					</tr>
				</table>
			</div>
		</div>
	</aside>
	
</body>