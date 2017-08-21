// keycodes: space 32, right arrow 39, enter 13, up arrow 38

/* 
functions for choose buttons
*/
function feedBtnEmoji(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to 'next' footer button
	if (key == 32){ 	
		document.getElementById("emoji_button").blur();
		document.getElementById("comment_button").focus();
	}
	// if key pressed is the enter key, view previous post
	if (key == 13){
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
	// if key pressed is the spacebar, change focus to 'next' footer button
	if (key == 32){ 	
		document.getElementById("comment_button").blur();
		document.getElementById("choose_cancel_button").focus();
	}
	// if key pressed is the enter key, view previous post
	if (key == 13){
		key.preventDefault();
		key.stopPropagation();
		// TODO - hide choose buttons
		// TODO - show comment form
		// TODO - focus comment textbox
	}	
}
function feedBtnChooseCancel(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to 'next' footer button
	if (key == 32){ 	
		document.getElementById("choose_cancel_button").blur();
		document.getElementById("back_btn").focus();
	}
	// if key pressed is the enter key, view previous post
	if (key == 13){
		// hide choose buttons
		document.getElementById("choose_buttons").style.display = "none";
		// hide comments
		document.getElementById("comment_view").classList.add('hidden'); 
		document.getElementById("comment_view").classList.remove('visible'); 
		document.getElementById("post_view").style.left = "20%"; 
		document.getElementById("latestCommentSection").style.left = "18%";
		document.getElementById("reacted_emojis").style.marginLeft = "260px";
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
    var key = event.which;
	// if key pressed is the spacebar, change focus to 'react' footer button
	if (key == 32){
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
	}
	// if key pressed is the enter key, view next post
	if (key == 13){
		key.preventDefault();
		key.stopPropagation();
		window.history.back();
	}	
}

/* 
functions for emoji selection
*/
function feedBtnLike(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to 'react' footer button
	if (key == 32){
		document.getElementById("emoji_like").blur();
		document.getElementById("emoji_love").focus();
	}
	// if key pressed is the enter key, view next post
	if (key == 13){
		// TODO - submit emoji 1 to db
		alert("send emoji 1 to db");
		// hide emoji selection
		document.getElementById("emoji_selection").style.display = "none";
		// display choose buttons
		document.getElementById("choose_buttons").style.display = "block";
		// focus next button
		document.getElementById("emoji_button").focus();
	}	
}
function feedBtnLove(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to 'react' footer button
	if (key == 32){
		document.getElementById("emoji_love").blur();
		document.getElementById("emoji_laugh").focus();
	}
	// if key pressed is the enter key, view next post
	if (key == 13){
		// TODO - submit emoji 2 to db
		alert("send emoji 2 to db");
		// hide emoji selection
		document.getElementById("emoji_selection").style.display = "none";
		// display choose buttons
		document.getElementById("choose_buttons").style.display = "block";
		// focus next button
		document.getElementById("emoji_button").focus();
	}	
}
function feedBtnLaugh(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to 'react' footer button
	if (key == 32){
		document.getElementById("emoji_laugh").blur();
		document.getElementById("emoji_wow").focus();
	}
	// if key pressed is the enter key, view next post
	if (key == 13){
		// TODO - submit emoji 3 to db
		alert("send emoji 3 to db");
		// hide emoji selection
		document.getElementById("emoji_selection").style.display = "none";
		// display choose buttons
		document.getElementById("choose_buttons").style.display = "block";
		// focus next button
		document.getElementById("emoji_button").focus();
	}	
}
function feedBtnWow(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to 'react' footer button
	if (key == 32){
		document.getElementById("emoji_wow").blur();
		document.getElementById("emoji_sad").focus();
	}
	// if key pressed is the enter key, view next post
	if (key == 13){
		// TODO - submit emoji 4 to db
		alert("send emoji 4 to db");
		// hide emoji selection
		document.getElementById("emoji_selection").style.display = "none";
		// display choose buttons
		document.getElementById("choose_buttons").style.display = "block";
		// focus next button
		document.getElementById("emoji_button").focus();
	}	
}
function feedBtnSad(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to 'react' footer button
	if (key == 32){
		document.getElementById("emoji_sad").blur();
		document.getElementById("emoji_cancel_btn").focus();
	}
	// if key pressed is the enter key, view next post
	if (key == 13){
		// TODO - submit emoji 5 to db
		alert("send emoji 5 to db");
		// hide emoji selection
		document.getElementById("emoji_selection").style.display = "none";
		// display choose buttons
		document.getElementById("choose_buttons").style.display = "block";
		// focus next button
		document.getElementById("emoji_button").focus();
	}	
}
function feedBtnEmojiCancel(event){
    var key = event.which;
	// if key pressed is the spacebar, change focus to 'react' footer button
	if (key == 32){
		document.getElementById("emoji_cancel_btn").blur();
		document.getElementById("back_btn").focus();
	}
	// if key pressed is the enter key, view next post
	if (key == 13){
		// TODO - hide emoji selection
		document.getElementById("emoji_selection").style.display = "none";
		// set emojiSelectButtons to false & chooseButtons to true
		emojiSelectButtons = false;
		chooseButtons = true;
		// display choose buttons
		document.getElementById("choose_buttons").style.display = "block";
		// focus next button
		document.getElementById("emoji_button").focus();
	}	
}