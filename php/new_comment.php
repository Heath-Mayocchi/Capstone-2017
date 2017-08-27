<?php


  session_start();
	
	if($_POST['content'] != "") {
	require_once 'pdoconnectOnline.inc';
	//require_once 'davelocal.inc';
	
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
		if($_POST['comment_post_id'] != "") 
		{
			$postID = $_POST['comment_post_id'];
		}else
		{
			$postID = 1;
		}
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