
var reactFocus = 0;

/* 
displays react buttons 
displays comments box
change function for prev and next buttons to focus on react buttons
*/
function reactButtonSelect(event){	
    var key = event.keyCode;
	// if key pressed is the right arrow, change focus to 'react' footer button
	if (key == 39){
			document.getElementById("prev_img").src = "img/previous_selected.png";
			document.getElementById("previous_btn").focus();
	}
	if (key == 38){
		if (reactFocus == 0){// emoji btn
			document.getElementById("react_btn").setAttribute('onkeydown', 'feedBtnEmoji(event)');
		}
		if (reactFocus == 1){// comment btn
			document.getElementById("react_btn").setAttribute('onkeydown', 'feedBtnComment(event)');
		}
		if (reactFocus == 2){// cancel btn
			document.getElementById("react_btn").setAttribute('onkeydown', 'feedBtnCancel(event)');
		}
	}
	
}

function reactNextFocus(event){
    var key = event.keyCode;
	// if key pressed is the right arrow, change focus to 'react' footer button
	if (key == 39){
		document.getElementById("next_img").src = "img/next.png";
		document.getElementById("react_btn").focus();
	}
	if (key == 38){
		if (reactFocus == 0){// emoji btn
			reactEmojiBtnUnfocused();
			reactCommentBtnFocused(); 
			reactFocus++;
		}
		else if (reactFocus == 1){// comment btn
			reactCommentBtnUnfocused();
			reactCancelBtnFocused();
			reactFocus++;
		}
		else if (reactFocus == 2){// cancel btn
			reactCancelBtnUnfocused();
			reactEmojiBtnFocused();
			reactFocus = 0;
		}
	}	
}

// function for previous button key presses
function reactPreviousFocus(event) {
    var key = event.keyCode;
	// if key pressed is the right arrow, change focus to next footer button
	if (key == 39){ 	
		document.getElementById("prev_img").src = "img/previous.png";
		document.getElementById("next_img").src = "img/next_selected.png";
		document.getElementById("next_btn").focus();
	}
	if (key == 38){
		if (reactFocus == 0){// emoji btn
			reactEmojiBtnUnfocused();
			reactCancelBtnFocused();
			reactFocus = 2;
		}
		else if (reactFocus == 1){// comment btn
			reactCommentBtnUnfocused();
			reactEmojiBtnFocused();
			reactFocus--;
		}
		else if (reactFocus == 2){// cancel btn
			reactCancelBtnUnfocused();
			reactCommentBtnFocused();
			reactFocus--;
		}		
	}
}

function reactEmojiBtnFocused(){
	document.getElementById("emoji_button").style.backgroundColor = "#000";
	document.getElementById("emoji_button").style.border = "6px dashed #00ff00";
	document.getElementById("emoji_button").style.color = "#fff";	
}
function reactEmojiBtnUnfocused(){
	document.getElementById("emoji_button").style.backgroundColor = "#00ff00";
	document.getElementById("emoji_button").style.border = "3px solid #000";
	document.getElementById("emoji_button").style.color = "#000";	
}

function reactCommentBtnFocused(){
	document.getElementById("comment_button").style.backgroundColor = "#000";
	document.getElementById("comment_button").style.border = "6px dashed #00ff00";
	document.getElementById("comment_button").style.color = "#fff";	
}
function reactCommentBtnUnfocused(){
	document.getElementById("comment_button").style.backgroundColor = "#00ff00";
	document.getElementById("comment_button").style.border = "3px solid #000";
	document.getElementById("comment_button").style.color = "#000";	
}

function reactCancelBtnFocused(){
	document.getElementById("react_cancel_button").style.backgroundColor = "#000";
	document.getElementById("react_cancel_button").style.border = "6px dashed #00ff00";
	document.getElementById("react_cancel_button").style.color = "#fff";	
}
function reactCancelBtnUnfocused(){
	document.getElementById("react_cancel_button").style.backgroundColor = "#00ff00";
	document.getElementById("react_cancel_button").style.border = "3px solid #000";
	document.getElementById("react_cancel_button").style.color = "#000";	
}
/* 
hide react buttons
display emoji selection
prev and next change from react btn focus to emoji select focus 
*/
function feedBtnEmoji(event){
    var key = event.keyCode;
	// if key pressed is the right arrow, change focus to next footer button
	if (key == 39){
		document.getElementById("prev_img").src = "img/previous_selected.png";
		document.getElementById("previous_btn").focus();
	}
	if (key == 38){
		document.getElementById("react_buttons").style.visibility = "hidden";
		document.getElementById("emoji_selection").style.visibility = "visible";
	}
}
/*
hide react buttons
display comment form
prev and next change from react btn focus to comment form focus
*/
function feedBtnComment(event){
    var key = event.keyCode;
	// if key pressed is the right arrow, change focus to next footer button
	if (key == 39){
		document.getElementById("prev_img").src = "img/previous_selected.png";
		document.getElementById("previous_btn").focus();
	}
	if (key == 38){
		document.getElementById("react_buttons").style.visibility = "hidden";
		document.getElementById("comment_form").style.visibility = "visible";
	}	
}

/*
hide comments
hide react buttons
prev and next from comment form focus to changing post display
change select button function
*/
function feedBtnCancel(event){ 
	// hide comments
	document.getElementById("comment_view").classList.add('hidden'); 
	document.getElementById("comment_view").classList.remove('visible'); 
	document.getElementById("post_view").style.left = "20%"; 
	document.getElementById("latestCommentSection").style.left = "18%";
	// hide react buttons
	document.getElementById("react_buttons").style.visibility = "hidden";
	// change functions for previous and next buttons
	document.getElementById("next_btn").setAttribute('onkeydown', 'reactNextFocus(event)');
	document.getElementById("previous_btn").setAttribute('onkeydown', 'reactPreviousFocus(event)');	
	// change function for select button
	document.getElementById("react_btn").setAttribute('onkeydown', 'feedBtnReact(event)');
	// focus next button
	document.getElementById("next_img").src = "img/next_selected.png";
	document.getElementById("next_btn").focus();
	// unfocus cancel button
	reactCancelBtnUnfocused();
	// reset button counter
	reactFocus = 0;
}