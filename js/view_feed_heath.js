
var reactFocus = 0;

/* 
displays react buttons 
displays comments box
change function for prev and next buttons to focus on react buttons
*/
function displayReactButtons(){
	document.getElementById("react_buttons").style.visibility = "visible";
	
	document.getElementById("comment_view").classList.add('visible'); 
	document.getElementById("comment_view").classList.remove('hidden'); 
	document.getElementById("post_view").style.left = "0%"; 
	document.getElementById("latestCommentSection").style.left = "0%";
	
	reactFocus = 0;
	reactEmojiBtnFocused();
	document.getElementById("next_btn").setAttribute('onkeydown', 'reactNextFocus(event)');
	document.getElementById("previous_btn").setAttribute('onkeydown', 'reactPreviousFocus(event)');
}

function reactNextFocus(event){
    var key = event.keyCode;
	// if key pressed is the right arrow, change focus to 'react' footer button
	if (key == 39){
		document.getElementById("next_img").src = "img/next.png";
		document.getElementById("react_btn").focus();
	}
	if (key == 38){
		if (reactFocus == 0){
			reactEmojiBtnUnfocused();
			reactCommentBtnFocused();
			reactFocus++;
		}
		else if (reactFocus == 1){
			reactCommentBtnUnfocused();
			reactCancelBtnFocused();
			reactFocus++;
		}
		else if (reactFocus == 2){
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
		if (reactFocus == 0){
			reactEmojiBtnUnfocused();
			reactCancelBtnFocused();
			reactFocus = 2;
		}
		else if (reactFocus == 1){
			reactCommentBtnUnfocused();
			reactEmojiBtnFocused();
			reactFocus--;
		}
		else if (reactFocus == 2){
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