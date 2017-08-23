<?php
    session_start();
	
	if($_POST['content'] != "") {
	require_once 'pdoconnectOnline.inc';
	
	if(isset($_SESSION['user']))
	{
		$user = $_SESSION['user'];
	} else 
	{
		$user = 1;
	}
	
	if(isset($_SESSION['post']))
	{
		$postID = $_SESSION['post'];
	} else 
	{
		$postID = 1;
	}

	$content = $_POST["content"];
	
	$statement = $conn->prepare("INSERT INTO post_comments(commentContent, commentBy, commentDate, postID)
    VALUES(:content, :user, NOW(), :postID);");
	
	$statement->execute(array(
    "content" => $content,
    "user" => $user,
	"postID" => $postID
	));
	}
	
	header("Location: ../view_feed.php");
	exit;
?>