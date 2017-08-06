/*
QUT Capstone Project 2017
Project Owner: Nursery Road State Special School

SNAP - Social Networking Action Platform

Author: Robert Piper
Author: Heath Mayocchi
Author: Levinard Hugo
Author: David MacKenzie
*/

/* User homepage focus functions */

function init() 
{
	// load page with feed button focused
	feedFocused();
}
window.onload=init;
/* 
global variable to keep track of main button focus 
0 = feed
1 = post
2 = message
3 = friends
4 = logout
*/
var buttonCount = 0;


function nextButtonFocused(){
	document.getElementById("next_img").src = "img/next_selected.png";
}
function nextButtonNotFocused(){
	document.getElementById("next_img").src = "img/next.png";	
}
function previousButtonFocused(){
	document.getElementById("prev_img").src = "img/previous_selected.png";
}
function previousButtonNotFocused(){
	document.getElementById("prev_img").src = "img/previous.png";	
}

// function for next button key presses
function userHomeBtnNext(event) {	
    var key = event.keyCode;
	// if key pressed is the right arrow, change focus to next footer button
	if (key == 39){
		nextButtonNotFocused();
		document.getElementById("select_btn").focus();
	}
	// if key pressed is the up arrow, change focus to next main button
	if (key == 38){
		if (buttonCount == 0){
			postFocused();
			feedUnFocused();
			buttonCount++;
		}
		else if (buttonCount == 1){
			messageFocused();
			postUnFocus();
			buttonCount++;
		}
		else if (buttonCount == 2){
			friendsFocused();
			messageUnFocused();
			buttonCount++;
		}
		else if (buttonCount == 3){
			logoutFocused();
			friendsUnFocused();
			buttonCount++;
		}
		else if (buttonCount == 4){
			feedFocused();
			logoutUnFocused();
			buttonCount = 0;
		}
	}
}

// function for select button key presses
function userHomeBtnActivate(event) {
    var key = event.keyCode;
	// if key pressed is the right arrow, change focus to next footer button
	if (key == 39){ 
		previousButtonFocused();
		document.getElementById("previous_btn").focus();		
	}
	// if key pressed is the up arrow, activate focused main button
	if (key == 38){ 
		if (buttonCount == 0){
			window.location.assign("view_feed.php")			
		}
		else if (buttonCount == 1){
			window.location.assign("post.php")
		}
		else if (buttonCount == 2){
			window.location.assign("message.php")
		}
		else if (buttonCount == 3){
			window.location.assign("friends.php")
		}
		else if (buttonCount == 4){
			window.location.assign("#")
		}		
	}	
}

// function for previous button key presses
function userHomeBtnPrevious(event) {
    var key = event.keyCode;
	// if key pressed is the right arrow, change focus to next footer button
	if (key == 39){ 	
		previousButtonNotFocused();
		nextButtonFocused();
		document.getElementById("next_btn").focus();
	}
	// if key pressed is the up arrow, change focus to previous main button
	if (key == 38){
		if (buttonCount == 0){
			logoutFocused();
			feedUnFocused();
			buttonCount = 4;
		}
		else if (buttonCount == 1){
			postUnFocus();
			feedFocused();
			buttonCount--;
		}
		else if (buttonCount == 2){
			messageUnFocused();
			postFocused();
			buttonCount--;
		}
		else if (buttonCount == 3){
			friendsUnFocused();
			messageFocused();
			buttonCount--;
		}
		else if (buttonCount == 4){
			logoutUnFocused();
			friendsFocused();
			buttonCount--;
		}		
	}
}

function feedFocused(){
	// focus feed
	document.getElementById("view_feed_btn").style.backgroundColor = "#000";
	document.getElementById("view_feed_btn").style.border = "6px dashed #00ff00";
	document.getElementById("view_feed_btn").style.color = "#fff";	
}
function feedUnFocused(){
	// unfocus feed
	document.getElementById("view_feed_btn").style.backgroundColor = "#00ff00";
	document.getElementById("view_feed_btn").style.border = "3px solid #000";
	document.getElementById("view_feed_btn").style.color = "#000";	
}

function postFocused(){	
	// focus post
	document.getElementById("create_post_btn").style.backgroundColor = "#000";
	document.getElementById("create_post_btn").style.border = "6px dashed #00ff00";
	document.getElementById("create_post_btn").style.color = "#fff";
}
function postUnFocus(){
	// unfocus post
	document.getElementById("create_post_btn").style.backgroundColor = "#00ff00";
	document.getElementById("create_post_btn").style.border = "3px solid #000";
	document.getElementById("create_post_btn").style.color = "#000";	
}

function messageFocused(){	
	// focus message
	document.getElementById("messages_btn").style.backgroundColor = "#000";
	document.getElementById("messages_btn").style.border = "6px dashed #00ff00";
	document.getElementById("messages_btn").style.color = "#fff";
}
function messageUnFocused(){
	// unfocus message
	document.getElementById("messages_btn").style.backgroundColor = "#00ff00";
	document.getElementById("messages_btn").style.border = "3px solid #000";
	document.getElementById("messages_btn").style.color = "#000";
}

function friendsFocused(){	
	// focus friends
	document.getElementById("friends_btn").style.backgroundColor = "#000";
	document.getElementById("friends_btn").style.border = "6px dashed #00ff00";
	document.getElementById("friends_btn").style.color = "#fff";
}
function friendsUnFocused(){
	// unfocus friends
	document.getElementById("friends_btn").style.backgroundColor = "#00ff00";
	document.getElementById("friends_btn").style.border = "3px solid #000";
	document.getElementById("friends_btn").style.color = "#000";	
}

function logoutFocused(){	
	// focus logout
	document.getElementById("logout_btn").style.backgroundColor = "#000";
	document.getElementById("logout_btn").style.border = "6px dashed #00ff00";
	document.getElementById("logout_btn").style.color = "#fff";
}
function logoutUnFocused(){
	// unfocus logout
	document.getElementById("logout_btn").style.backgroundColor = "#00ff00";
	document.getElementById("logout_btn").style.border = "3px solid #000";
	document.getElementById("logout_btn").style.color = "#000";	
}
