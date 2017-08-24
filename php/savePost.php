<?php 

	if (isset($_POST['post'])) {

		$postContent = $_POST['userPostContent'];

		if(isset($_SESSION['userID'])) {
			$postedBy = $_SESSION['userID'];
		} else {
			$postedBy = 1;
		}
		$myDate = date('Y-m-d h:i:s');

		if ("" == trim($_POST['pic'])) {
			$pic = $_POST['uploadURL'];
		} else if ("" == trim($_POST['uploadURL'])) {
			$pic = $_POST['pic'];
		}

		$query = "INSERT INTO posts VALUES ('', :postContent, :postedBy, :myDate, :pic, '', '', '', '', '', '')";

		$pdoRes = $conn->prepare($query);

		$pdoExec = $pdoRes->execute(array(":postContent"=>$postContent, ":postedBy"=>$postedBy, ":myDate"=>$myDate, ":pic"=>$pic));

		header("Location: create_post.php");
		exit;
	}

 ?>