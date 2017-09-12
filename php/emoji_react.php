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

	$postID = $_POST['emoji_form_postID'];
	
	$emoji = $_POST["emoji_form_information"];

	$statement = "SELECT * from post_emojis WHERE userID = $user AND postID = $postID";
	foreach ($conn->query($statement) as $row){
		$react = TRUE;
	}

	function post_emoji_update($react, $postID, $user, $emoji, $conn){
		console_log($react);
		console_log($postID);
		console_log($user);		
		if ($react != TRUE){
			$statement = $conn->prepare("UPDATE posts SET emojiOne = emojiOne + 1 WHERE postID = $postID");
			$statement->execute();

			$statement = $conn->prepare("INSERT INTO post_emojis(postID, userID, emojiID) VALUES(:postID, :userID, :emojiID)");
			$statement->execute(array(
				"postID" => $postID,
				"userID" => $user,
				"emojiID" => $emoji
				));
		} else {
			$statement = $conn->prepare("UPDATE post_emojis SET emojiID = $emoji WHERE postID = $postID AND userID = $user");
			$statement->execute();
		}
	}

	post_emoji_update($react, $postID, $user, $emoji, $conn);

	header("Location: ../view_feed.php");
	exit;
?>