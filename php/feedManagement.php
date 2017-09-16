<?php 
	require 'pdoconnectOnline.inc';

	/*	For LOADING posts					*/
	if (isset($_POST['value']) && $_POST['condition'] == "load") {
		$s = $_POST['value'];
		$counter = 1;
		
		$query = $conn->prepare("SELECT postPicture FROM posts WHERE postID=?");
		$query->execute(array($s));
		$row = $query->fetch(PDO::FETCH_ASSOC);

		echo "<p id='preview_title'>Picture</p>";
			echo "<div id='post_image_preview'>";
			echo 	"<img src='". $row['postPicture'] . "' alt='#'>";
			echo "</div>";
		echo "<p id='comments_title'>Comments</p>";

		$query = $conn->prepare("SELECT commentID, commentContent FROM post_comments WHERE post_comments.postID=?");
		$query->execute(array($s));

		echo "<div id='post_comments_table_box'>";
			echo "<table id='post_comments'>";
			while($row = $query->fetch(PDO::FETCH_ASSOC)) {
				$commentID = $row['commentID'];
				echo "<tr id='comment_row". $counter . "'>";
				echo "<td id='checkbox'><input type='checkbox' class='commentBoxes' value='" . $commentID . "' onclick=\"selected('comment_row" . $counter . "')\"/></td><td width=200px>" . $row['commentContent'] . "</td>";
				echo "</tr>";
				$counter++;
			}
			echo "</table>";
		echo "</div>";	

	/*	For REMOVING posts					*/
	} else if (isset($_POST['value']) && $_POST['condition'] == "delete") {
		$s = $_POST['value'];

		$query =$conn->prepare("DELETE FROM post_comments WHERE postID=?");
		$query->execute(array($s));
		$query =$conn->prepare("DELETE FROM posts WHERE postID=?");
		$query->execute(array($s));

		$query = $conn->prepare("SELECT posts.postID,posts.postContent, posts.postedBy, posts.postDate, users.userID, users.firstName, users.lastName FROM users, posts WHERE posts.postedBy=users.userID");
		$query->execute();
		$rowCount = 1;

		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$postID = $row['postID'];
			$name = $row['firstName'] . " " . $row['lastName'];
			$content = $row['postContent'];
			$date = date('d/m/Y', strtotime($row['postDate']));

			echo "<tr id='" . "post_row" . $rowCount . "'>";
			echo "<td><input id='checkbox' type='checkbox' name='box' value='". $postID . "'onclick='selected('". "post_row" . $rowCount . "')'/></td><td width=150px>". $name . "</td><td width=250px>";
			echo $content . "</td><td width=100px>" . $date . "</td>";
			echo "</tr>";
			$rowCount++;

		}

	} else if (isset($_POST['delete'])) {
		$id = $_POST['delete'];

		$query = $conn->prepare("DELETE FROM post_comments WHERE commentID=?");
		$query->execute(array($id));

		
	}
	
 ?>