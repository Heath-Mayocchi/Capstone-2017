<?php 
	if (!isset($_SESSION['adminLoggedIn'])) {
		header("Location: admin_home.php");
	} 

	if (isset($_POST['adminCreateNewUser'])) {
		$fName = "";
		$lName = "";
		$dob = "";
		$accType = "Student";
		$pass = "";
		$confPass = "";
		$profilePic = "";
		$error = array();	// error array

		$fName = strip_tags($_POST['firstName']);	// removes html tags i.e. <a>
		$fName = str_replace(' ', '', $fName);		// removes spaces
		$fName = ucfirst(strtolower($fName));		// turns first letter into capital

		$lName = strip_tags($_POST['lastName']);
		$lName = str_replace(' ', '', $lName);
		$lName = ucfirst(strtolower(($lName)));

		/************** Inside is the process of turning DD-MM-YYYY into YYYY-MM-DD ***************/
		$dob = strip_tags($_POST['dob']);
		$dob = str_replace(' ', '', $dob);		

		$dob = explode('-', $dob, 2);
		$dobDay = $dob[0];

		$dob = strtolower(end($dob));			
		$dob = explode('-', $dob);
		$dobMonth = $dob[0];
		$dobYear = strtolower(end($dob));
		
		$dob = $dobYear . "-" . $dobMonth . "-" . $dobDay;
		/*****************************************************************************************/

		// If checkbox is not checked, meaning it's not an admin user

		if (!isset($_POST['checkBox'])) {
			$checkQuery = "SELECT * FROM users WHERE firstName=:fName AND lastName=:lName AND dob=:dob";
	        $checkQueryRes = $conn->prepare($checkQuery);
	        $checkQueryRes->execute(array(":fName"=>$fName, ":lName"=>$lName, ":dob"=>$dob));
	        $checkNum = $checkQueryRes->fetchColumn();

	        // Checks if the user ented is already in the database
	        if ($checkNum > 0) {
	        			$checkQuery = "SELECT * FROM users WHERE firstName=? AND lastName=? AND dob=?";
	        			$checkQueryRes = $conn->prepare($checkQuery);
        				$checkQueryRes->execute(array($fName, $lName, $dob));
        				$row = $checkQueryRes->fetch(PDO::FETCH_ASSOC);	
        				$dataPassword = $row['password'];

        				if (password_verify($pass, $dataPassword)) {
        					array_push($error, "User is already registered!");

        				} else {
        					// If passwords are not the same execute below
        					
			        		$pass = password_hash($pass, PASSWORD_DEFAULT);
				        	// If the file uplaod is emtpy give it a default picture
				        	if (empty($_FILES['file']['name'])) {
				        		$profilePic = "img/profile-placeholder.png";
				        		$insertQuery = "INSERT INTO users VALUES ('', :fName, :lName, '', :dob, :profilePic, :accType, :pass)";
				        		$insertResult = $conn->prepare($insertQuery);
				        		$insertExecute = $insertResult->execute(array(":fName"=>$fName, ":lName"=>$lName, ":dob"=>$dob, ":profilePic"=>$profilePic, ":accType"=>$accType, ":pass"=>$pass));
				        		array_push($error, 'Created a user successfully');
				        		
				        	} else {

				        		$fileName = $_FILES['file']['name'];
				        		$fileTempName = $_FILES['file']['tmp_name'];
				        		$fileSize = $_FILES['file']['size'];
				        		$fileError = $_FILES['file']['error'];
				        		$fileType = $_FILES['file']['type'];

				        		$fileExt = explode('.', $fileName);
				        		$fileActualExt = strtolower(end($fileExt));

				        		$allowed = array('jpg', 'jpeg', 'png', 'tiff', 'gif');

				        		if (in_array($fileActualExt, $allowed)) {
				        			if ($fileError == 0) {
				        				if ($fileSize < 10485760) {
				        					$fileNameNew = uniqid('', true) . "." . $fileActualExt;
				        					$profilePic = "img/" . $fileNameNew;
				        					move_uploaded_file($fileTempName, $profilePic);

				        					$insertQuery = "INSERT INTO users VALUES ('', :fName, :lName, '', :dob, :profilePic, :accType, :pass)";
						        			$insertResult = $conn->prepare($insertQuery);
						        			$insertExecute = $insertResult->execute(array(":fName"=>$fName, ":lName"=>$lName, ":dob"=>$dob, ":profilePic"=>$profilePic, ":accType"=>$accType, ":pass"=>$pass));
						        			array_push($error, 'Created a user successfully');
				        				} else {
				        					array_push($error, 'File was too big!');	//
				        				}

				        			} else {
				        				array_push($error, 'There was an error uploading your file!');	//
				        			}
				        		} else {
				        			array_push($error, 'You cannot upload files of this type');	//
				        		}
				        	}
        				}
       		} else {
      			$pass = password_hash($pass, PASSWORD_DEFAULT);
	        	// If the file uplaod is emtpy give it a default picture
	        	if (empty($_FILES['file']['name'])) {
	        		$profilePic = "img/profile-placeholder.png";
	        		$insertQuery = "INSERT INTO users VALUES ('', :fName, :lName, '', :dob, :profilePic, :accType, :pass)";
	        		$insertResult = $conn->prepare($insertQuery);
	        		$insertExecute = $insertResult->execute(array(":fName"=>$fName, ":lName"=>$lName, ":dob"=>$dob, ":profilePic"=>$profilePic, ":accType"=>$accType, ":pass"=>$pass));
	        		array_push($error, 'Created a user successfully');

	        	} else {

	        		$fileName = $_FILES['file']['name'];
	        		$fileTempName = $_FILES['file']['tmp_name'];
	        		$fileSize = $_FILES['file']['size'];
	        		$fileError = $_FILES['file']['error'];
	        		$fileType = $_FILES['file']['type'];

	        		$fileExt = explode('.', $fileName);
	        		$fileActualExt = strtolower(end($fileExt));

	        		$allowed = array('jpg', 'jpeg', 'png', 'tiff', 'gif');

	        		if (in_array($fileActualExt, $allowed)) {
	        			if ($fileError == 0) {
	        				if ($fileSize < 10485760) {
	        					$fileNameNew = uniqid('', true) . "." . $fileActualExt;
	        					$profilePic = "img/" . $fileNameNew;
	        					move_uploaded_file($fileTempName, $profilePic);

	        					$insertQuery = "INSERT INTO users VALUES ('', :fName, :lName, '', :dob, :profilePic, :accType, :pass)";
			        			$insertResult = $conn->prepare($insertQuery);
			        			$insertExecute = $insertResult->execute(array(":fName"=>$fName, ":lName"=>$lName, ":dob"=>$dob, ":profilePic"=>$profilePic, ":accType"=>$accType, ":pass"=>$pass));
			        			array_push($error, 'Created a user successfully');
	        				} else {
	        					array_push($error, 'File was too big!');	//
	        				}

	        			} else {
	        				array_push($error, 'There was an error uploading your file!');	//
	        			}
	        		} else {
	        			array_push($error, 'You cannot upload files of this type');	//
	        		}
	        	}
      		}

		} else if (isset($_POST['checkBox'])) {
        		$accType = $_POST['checkBox'];
        		$pass = strip_tags($_POST['password']);
        		$confPass = strip_tags($_POST['confirmPassword']);

        		if ($pass == $confPass) {
        			// If both passwords are the same we check
        			// If the admin account is already in the database
        			$tempQuery = "SELECT * FROM users WHERE firstName=? AND lastName=? AND dob=?";
        			$checkTempQuery = $conn->prepare($tempQuery);
        			$checkTempQuery->execute(array($fName, $lName, $dob));
        			$numBer = $checkTempQuery->fetchColumn();

        			$dataPassword = "";
        			if ($numBer > 0) {
        				$checkTempQuery = $conn->prepare($tempQuery);
        				$checkTempQuery->execute(array($fName, $lName, $dob));
        				$row = $checkTempQuery->fetch(PDO::FETCH_ASSOC);	
        				$dataPassword = $row['password'];
        			}

        			if (password_verify($pass, $dataPassword)) {
        				array_push($error, "User is already registered!");		// if password is the same

        			} else {
			        	// If the file uplaod is emtpy give it a default picture
			        	$pass = password_hash($pass, PASSWORD_DEFAULT);
			        	if (empty($_FILES['file']['name'])) {
			        		$profilePic = "img/profile-placeholder.png";
			        		$insertQuery = "INSERT INTO users VALUES ('', :fName, :lName, '', :dob, :profilePic, :accType, :pass)";
			        		$insertResult = $conn->prepare($insertQuery);
			        		$insertExecute = $insertResult->execute(array(":fName"=>$fName, ":lName"=>$lName, ":dob"=>$dob, ":profilePic"=>$profilePic, ":accType"=>$accType, ":pass"=>$pass));
			        		array_push($error, 'Created a user successfully');

			        	} else {
			        		$fileName = $_FILES['file']['name'];
			        		$fileTempName = $_FILES['file']['tmp_name'];
			        		$fileSize = $_FILES['file']['size'];
			        		$fileError = $_FILES['file']['error'];
			        		$fileType = $_FILES['file']['type'];

			        		$fileExt = explode('.', $fileName);
			        		$fileActualExt = strtolower(end($fileExt));

			        		$allowed = array('jpg', 'jpeg', 'png', 'tiff', 'gif');

			        		if (in_array($fileActualExt, $allowed)) {
			        			if ($fileError == 0) {
			        				if ($fileSize < 10485760) {
			        					$fileNameNew = uniqid('', true) . "." . $fileActualExt;
			        					$profilePic = "img/" . $fileNameNew;
			        					move_uploaded_file($fileTempName, $profilePic);

			        					$insertQuery = "INSERT INTO users VALUES ('', :fName, :lName, '', :dob, :profilePic, :accType, :pass)";
					        			$insertResult = $conn->prepare($insertQuery);
					        			$insertExecute = $insertResult->execute(array(":fName"=>$fName, ":lName"=>$lName, ":dob"=>$dob, ":profilePic"=>$profilePic, ":accType"=>$accType, ":pass"=>$pass));
					        			array_push($error, 'Created a user successfully');
			        				} else {
			        					array_push($error, 'File was too big!');	//
			        				}

			        			} else {
			        				array_push($error, 'There was an error uploading your file!');	//
			        			}
			        		} else {
			        			array_push($error, 'You cannot upload files of this type');	//
			        		}
			        	}
        			}
        		}
        	}
	}
 ?>