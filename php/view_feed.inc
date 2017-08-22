<?php

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

require_once 'php/davelocal.inc';
//require_once 'php/pdoconnectOnline.inc';

function view_feed()
{
	console_log("view_feed");	

	global $errors;
	global $conn;
	try
	{
		$query = 
			"select 
			posts.postID,
			posts.postContent, 
			posts.postDate, 
			posts.postPicture, 
			posts.likes, posts.emojiOne, 
			posts.emojiTwo, posts.emojiThree, 
			posts.emojiFour, posts.emojiFive,
			users.firstName, users.lastName, 
			users.profilePicture
			from 
			posts, users
			where
			users.userID = posts.postedBy
			order by posts.postDate desc;";


		$stmt = $conn->prepare($query);

		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_OBJ);
		$result = $stmt->fetchAll();

		if($stmt->rowCount()>0)
		{
			console_log("posts found");	
			echo '<div id="post_view">';
			foreach ($result as $post)
			{
				echo '<div class="post">';
					echo '<img src="';
					echo $post->postPicture;
					echo '">';

					echo '<div class="userPost">';

						echo '<img src="';
							echo $post->profilePicture;
						echo '" class="userPic">';

						echo '<div class="userComment">';
							echo $post->postContent;
						echo '</div>';

						echo '<div class="userPostDate">';
							echo $post->firstName.' '.$post->lastName;
							echo '&nbsp;';
							echo $post->postDate;
							echo '&nbsp;';
						echo '</div>';
					
					echo '</div><!-- userPost -->';

					$emojiCount = ($post->emojiOne + $post->emojiTwo + $post->emojiThree + $post->emojiFour + $post->emojiFive);
					echo '<table id="reacted_emojis">
					<tr>
						<th>
							<img class="emoji_img" id="emoji_like_reacted" src="img/emoji-like.png" alt="Like"></img>';
							if($post->emojiOne>0){
								echo $post->emojiOne;
							}
						echo '</th>
						<th>
							<img class="emoji_img" id="emoji_love_reacted" src="img/emoji-love.png" alt="Love"></img>';
							if($post->emojiTwo>0){
								echo $post->emojiTwo;
							}
						echo '</th>
						<th>
							<img class="emoji_img" id="emoji_laugh_reacted" src="img/emoji-laugh.png" alt="Laugh"></img>';
							if($post->emojiThree>0){
								echo $post->emojiThree;
							}
						echo '</th>
						<th>
							<img class="emoji_img" id="emoji_wow_reacted" src="img/emoji-wow.png" alt="Wow"></img>';
							if($post->emojiFour>0){
								echo $post->emojiFour;
							}
						echo '</th>
						<th>
							<img class="emoji_img" id="emoji_sad_reacted" src="img/emoji-sad.png" alt="Sad"></img>';
							if($post->emojiFive>0){
								echo $post->emojiFive;
							}
						echo '</th>
						<th>
							<p id="reacted_emoji_txt">';
							if($emojiCount < 2)
							{
								echo 'You\'re first to comment!';
							}else
							{
								echo 'You and '.$emojiCount.' others';
							}
							echo '</p>
						</th>
					</tr>
					</table>';

				echo '</div><!-- post -->';
				//view_comments($post->postID);
			}
			console_log("end of posts");	
			echo '</div>';
		}
		else
		{
			console_log("no posts found");	

		}
	} catch (PDOException $e)
	{
		die($e->getMessage());		
	}
}


function view_comments($postID)
{
	console_log("view_comments");	
	console_log($postID);	

	global $errors;
	global $conn;
	try
	{
		$query = 
			"select commentContent, commentDate, firstName from post_comments, users where
			userID = commentBy and
			postID = :postID
			order by commentDate desc;";

		console_log($query);	

		$stmt = $conn->prepare($query);
		console_log("prepared");	
		$stmt->bindParam(':postID',$postID);
		$stmt->execute();
		console_log("executed");	
		$stmt->setFetchMode(PDO::FETCH_OBJ);
		$result = $stmt->fetchAll();
		console_log("fetched");	

		if($stmt->rowCount()>0)
		{
			echo '<div id="comment_view" class="hidden">';
			foreach ($result as $comment)
			{
				console_log("comment found");	
				echo '<div class="comment">';
				 echo '<span class="comment_body">';
				 echo $comment->commentContent;
				 echo '</p>';
				 echo '<span class="comment_date">';
				 echo $comment->firstName;
				 echo ' Posted at ';
				 echo $comment->commentDate;
				 echo '</p>';
				echo '</div>';
				console_log("comment echoed");	
			}
			echo '</div>';
		}
		else
		{
			console_log("comments not found");	
		}
	} catch (PDOException $e)
	{
		die($e->getMessage());		
	}
}

?>