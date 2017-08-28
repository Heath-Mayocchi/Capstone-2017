/* 
functions for choose buttons
*/
function feedBtnEmoji(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to comment button
	if (key == nextElement){ 	
		document.getElementById("emoji_button").blur();
		document.getElementById("comment_button").focus();
	}
	// if key pressed is the enter key, display emoji selection
	if (key == selectElement){
		// hide choose buttons
		document.getElementById("choose_buttons").style.display = "none";
		// set emojiSelectButtons to true & chooseButtons to false
		emojiSelectButtons = true;
		chooseButtons = false;
		// show emoji selection
		document.getElementById("emoji_selection").style.display = "inline";
		// focus on like emoji
		document.getElementById("emoji_like").focus();
	}	
}
function feedBtnComment(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to cancel button
	if (key == nextElement){ 	
		document.getElementById("comment_button").blur();
		document.getElementById("choose_cancel_button").focus();
	}
	// if key pressed is the enter key, display comments form
	if (key == selectElement){
		// hide choose buttons
		document.getElementById("choose_buttons").style.display = "none";
		// show comment form
		document.getElementById("comment_form").style.display = "block";
		// focus comment cancel button
		document.getElementById("comment_cancel_button").focus();
		// set commentButtons top true and chooseButtons to false
		commentButtons = true;
		chooseButtons = false;
	}	
}
function feedBtnChooseCancel(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to back button button
	if (key == nextElement){ 	
		document.getElementById("choose_cancel_button").blur();
		document.getElementById("back_btn").focus();
	}
	// if key pressed is the enter key, display post navigation buttons
	if (key == selectElement){
		// hide choose buttons
		document.getElementById("choose_buttons").style.display = "none";

		// hide comments
		document.getElementById("comment_space").style.display = "none";
		document.getElementById("post_view").style.left = "20%"; 

		// show nav buttons
		document.getElementById("postNavigationButtons").style.display = "block";
		// set postNavButtons to true & chooseButtons to false
		postNavButtons = true;
		chooseButtons = false;
		// focus next button
		document.getElementById("next_btn").focus();
	}	
}

/* 
function for back key presses
*/
function feedBtnBack(event){
	event.preventDefault();
    var key = event.which;
	// if key pressed is the spacebar, change focus to relevant button based on what is displayed in the footer section
	if (key == nextElement){
		if (postNavButtons){
			document.getElementById("back_btn").blur();
			document.getElementById("previous_btn").focus();			
		}
		else if (chooseButtons){
			document.getElementById("back_btn").blur();
			document.getElementById("emoji_button").focus();			
		}
		else if (emojiSelectButtons){			
			document.getElementById("back_btn").blur();
			document.getElementById("emoji_like").focus();
		}
		else if (commentButtons){	
			// TODO - this should focus a border for the comment text box then focus submit
			document.getElementById("back_btn").blur();
			document.getElementById("comment_submit_button").focus();
		}
	}
	// if key pressed is the enter key, go to the previous page
	if (key == selectElement){
		window.history.back();
	}	
}

/* 
functions for emoji selection
*/
function feedBtnLike(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to love emoji button
	if (key == nextElement){
		document.getElementById("emoji_like").blur();
		document.getElementById("emoji_love").focus();
	}
	// if key pressed is the enter key
	if (key == selectElement){
		// TODO - submit emoji 1 to db
		closeEmojis();
		// focus next button
		document.getElementById("next_btn").focus();
	}	
}
function feedBtnLove(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to laugh emoji button
	if (key == nextElement){
		document.getElementById("emoji_love").blur();
		document.getElementById("emoji_laugh").focus();
	}
	// if key pressed is the enter key
	if (key == selectElement){
		// TODO - submit emoji 2 to db
		closeEmojis();
		// focus next button
		document.getElementById("next_btn").focus();
	}	
}
function feedBtnLaugh(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to wow emoji button
	if (key == nextElement){
		document.getElementById("emoji_laugh").blur();
		document.getElementById("emoji_wow").focus();
	}
	// if key pressed is the enter key
	if (key == selectElement){
		// TODO - submit emoji 3 to db

		closeEmojis();
// focus next button
		document.getElementById("next_btn").focus();
	}	
}
function feedBtnWow(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to sad emoji button
	if (key == nextElement){
		document.getElementById("emoji_wow").blur();
		document.getElementById("emoji_sad").focus();
	}
	// if key pressed is the enter key
	if (key == selectElement){
		// TODO - submit emoji 4 to db
		closeEmojis();
		// focus next button
		document.getElementById("next_btn").focus();
	}	
}
function feedBtnSad(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to emoji cancel button
	if (key == nextElement){
		document.getElementById("emoji_sad").blur();
		document.getElementById("emoji_cancel_btn").focus();
	}
	// if key pressed is the enter key
	if (key == selectElement){
		// TODO - submit emoji 5 to db
		closeEmojis();
	document.getElementById("next_btn").focus();
	}	
}
function feedBtnEmojiCancel(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to back button
	if (key == nextElement){
		document.getElementById("emoji_cancel_btn").blur();
		document.getElementById("back_btn").focus();
	}
	// if key pressed is the enter key
	if (key == selectElement){

		closeEmojis();
		// focus emoji button
		document.getElementById("emoji_button").focus();
	}	
}

/* 
functions for comment buttons
*/
function feedBtnCommentCancel(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to back button
	if (key == nextElement){
		document.getElementById("comment_cancel_button").blur();
		document.getElementById("back_btn").focus();
	}
	// if key pressed is the enter key
	if (key == selectElement){
		// hide comment form
		document.getElementById("comment_form").style.display = "none";
		document.getElementById("comment_space").style.display = "none";
		document.getElementById("post_view").style.left = "20%"; 

		//continue default operation to actually call the form action method.
		document.getElementById("comment_cancel_button").click();

		// set commentButtons to false & chooseButtons to true
		commentButtons = false;
		chooseButtons = true;
		// display choose buttons
		document.getElementById("choose_buttons").style.display = "block";		
		// focus emoji button
		document.getElementById("emoji_button").focus();
	}		
}
function feedBtnCommentsubmit(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to comment cancel button
	if (key == nextElement){
		document.getElementById("comment_submit_button").blur();
		document.getElementById("comment_cancel_button").focus();
	}
	// if key pressed is the enter key
	if (key == selectElement){
		// TODO - submit comment to database
		var currentPost = document.getElementsByClassName("post_id");
		currentPostID = currentPost[slideIndex-1].innerText;

		// hide comment form
		document.getElementById("comment_form").style.display = "none";
		document.getElementById("comment_space").style.display = "none";
		document.getElementById("post_view").style.left = "20%"; 

		//continue default operation to actually call the form action method.
		document.getElementById("comment_submit_button").click();

		// set commentButtons to false & postNavButtons to true
		commentButtons = false;
		postNavButtons = true;
		// display post navigation buttons
		document.getElementById("postNavigationButtons").style.display = "block";
		// TODO - update latest comment and comments view
		// focus next button
		document.getElementById("next_btn").focus();
	}	
}
function closeEmojis()
{
		// hide emoji selection
		document.getElementById("emoji_selection").style.display = "none";
		document.getElementById("comment_space").style.display = "none";
		document.getElementById("post_view").style.left = "20%"; 

		// set emojiSelectButtons to false & postNavButtons to true
		emojiSelectButtons = false;
		postNavButtons = true;
		// display post navigation buttons
		document.getElementById("postNavigationButtons").style.display = "block";

}