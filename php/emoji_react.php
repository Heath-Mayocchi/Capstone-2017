<?php
function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }
	session_start();
	require_once 'pdoconnectOnline.inc';
	
	if(isset($_SESSION['user']))
	{
		$user = $_SESSION['user'];
	} else 
	{
		$user = 1;
	}
	
	global $react;
	global $emojiName;
	global $previouslyReacted;
	$react = FALSE;

	$postID = $_POST['emoji_form_postID'];
	
	$emoji = intval($_POST["emoji_form_information"]);
	if ($emoji == 1) {
		$emojiName = "emojiOne";
	} else if ($emoji == 2){
		$emojiName = "emojiTwo";
	} else if ($emoji == 3){
		$emojiName = "emojiThree";
	} else if ($emoji == 4){
		$emojiName = "emojiFour";
	} else if ($emoji == 5){
		$emojiName = "emojiFive";
	}

	$statement = "SELECT * from post_emojis WHERE userID = $user AND postID = $postID";
	$result = $conn->query($statement);
	
	$row = $result->fetch();
	if ($row) {
		$previouslyReacted = $row[2];
		$react = TRUE;
	}

	if ($previouslyReacted == 1) {
		$previouslyReacted = "emojiOne";
	} else if ($previouslyReacted == 2){
		$previouslyReacted = "emojiTwo";
	} else if ($previouslyReacted == 3){
		$previouslyReacted = "emojiThree";
	} else if ($previouslyReacted == 4){
		$previouslyReacted = "emojiFour";
	} else if ($previouslyReacted == 5){
		$previouslyReacted = "emojiFive";
	}

	function post_emoji_update($react, $postID, $user, $emoji, $conn, $emojiName, $previouslyReacted){
		console_log($react);
		console_log($postID);
		console_log($user);		
		if ($react != TRUE){
			$statement = $conn->prepare("UPDATE posts SET $emojiName = $emojiName + 1 WHERE postID = $postID");
			$statement->execute();

			$statement = $conn->prepare("UPDATE posts SET likes = likes + 1 WHERE postID = $postID");
			$statement->execute();

			$statement = $conn->prepare("INSERT INTO post_emojis(postID, userID, emojiID) VALUES(:postID, :userID, :emojiID)");
			$statement->execute(array(
				"postID" => $postID,
				"userID" => $user,
				"emojiID" => $emoji
				));
		} else {
			if ($emojiName != $previouslyReacted){
				$statement = $conn->prepare("UPDATE posts SET $emojiName = $emojiName + 1 WHERE postID = $postID");
				$statement->execute();

				$statement = $conn->prepare("UPDATE posts SET $previouslyReacted = $previouslyReacted - 1 WHERE postID = $postID");
				$statement->execute();
	
				$statement = $conn->prepare("UPDATE post_emojis SET emojiID = $emoji WHERE postID = $postID AND userID = $user");
				$statement->execute();
			}
		}
	}

	console_log("this works");
	post_emoji_update($react, $postID, $user, $emoji, $conn, $emojiName, $previouslyReacted);

	$_SESSION['postID'] = $postID;
	header("Location: ../view_feed.php");
	exit;
?>