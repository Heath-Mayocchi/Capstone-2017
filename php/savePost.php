<?php 
	if (isset($_POST['post'])) {

		$postContent = $_POST['userPostContent'];

		if(isset($_SESSION['userID'])) {
			$postedBy = $_SESSION['userID'];
		} else {
			$postedBy = 1;
		}
		$myDate = date('Y-m-d h:i:s');

		if ("" == trim($_POST['pic']) && "" != trim($_POST['uploadURL'])) {
			
			$pic = $_POST['uploadURL'];
			$allowed = array('jpg', 'jpeg', 'png', 'tiff', 'gif');

			if (in_array(substr($pic, -3), $allowed) || in_array(substr($pic, -4))) {
				
				$file = "img/" . uniqid('', true) . "." . substr($pic, -3);
				$ch = curl_init($pic);
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
				$raw = curl_exec($ch);
				curl_close($ch);

				if(file_exists($file)){
					unlink($file);
				}
				
				$fp = fopen($file, 'x');
				fwrite($fp, $raw);
				fclose($fp);
			} else {
				$file = "";
			}
		} else if ("" == trim($_POST['uploadURL'])) {
			$file = $_POST['pic'];
		}


		$statement = $conn->prepare("INSERT INTO posts (postContent, postedby, postDate, postPicture)
		VALUES(:postContent, :postedby, :postDate, :postPicture);");

		$statement->execute(array(
		"postContent" => $postContent,
		"postedby" => $postedBy,
		"postDate" => $myDate,
		"postPicture" => $file
		));
	}
 ?>