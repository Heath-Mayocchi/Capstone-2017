var footerButtons = true;
var commentFocus = false;
var pictureFocus = false;

// functions for post buttons
function postBtnBack(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to 'next' footer button
	if (key == 32){ 	
		document.getElementById("post_back_btn").blur();
		document.getElementById("postCommentButton").focus();
	}
	// if key pressed is the enter key, 
	if (key == 13){
		backBtn();
	}	
}
function postCommentButton(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to 'next' footer button
	if (key == 32){ 	
		document.getElementById("postCommentButton").blur();
		document.getElementById("pictureBtn").focus();
		if (commentFocus == true){			
			document.getElementById("postComment").style.borderTop = "none";
			document.getElementById("postComment").style.borderBottom = "none";
			commentFocus = false;
		}
	}
	// if key pressed is the enter key, 
	if (key == 13){	
		if (commentFocus == false){
			document.getElementById("postComment").style.borderTop = "8px dashed #ff6b6b";
			document.getElementById("postComment").style.borderBottom = "8px dashed #ff6b6b";
			commentFocus = true;
		}
		else if (commentFocus == true){			
			document.getElementById("postComment").style.borderTop = "none";
			document.getElementById("postComment").style.borderBottom = "none";
			commentFocus = false;
		}
	}	
}
function postpictureButton(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to 'next' footer button
	if (key == 32){ 	
		document.getElementById("pictureBtn").blur();
		document.getElementById("reactButtonPost").focus();
	}
	// if key pressed is the enter key, 
	if (key == 13){ 
		key.preventDefault();
		key.stopPropagation();
		pictureButtonFunc(); 
	}	
}
function postSubmitButton(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to 'next' footer button
	if (key == 32){ 	
		document.getElementById("reactButtonPost").blur();
		document.getElementById("post_back_btn").focus();
	}
	// if key pressed is the enter key, 
	if (key == 13){
		
	}	
}