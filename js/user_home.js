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
	feedFocused();
}
window.onload=init;

var buttonCount = 0;

function userHomeBtnNext(event) {	
    var key = event.keyCode;
	// if key pressed is the right arrow, change focus to next footer button
	if (key == 39){
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

function userHomeBtnActivate(event) {
    var key = event.keyCode;
	// if key pressed is the right arrow, change focus to next footer button
	if (key == 39){ 
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

function userHomeBtnPrevious(event) {
    var key = event.keyCode;
	// if key pressed is the right arrow, change focus to next footer button
	if (key == 39){ 		
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
	document.getElementById("view_feed_btn").style.border = "6px solid #00ff00";
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
	document.getElementById("create_post_btn").style.border = "6px solid #00ff00";
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
	document.getElementById("messages_btn").style.border = "6px solid #00ff00";
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
	document.getElementById("friends_btn").style.border = "6px solid #00ff00";
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
	document.getElementById("logout_btn").style.border = "6px solid #00ff00";
	document.getElementById("logout_btn").style.color = "#fff";
}
function logoutUnFocused(){
	// unfocus logout
	document.getElementById("logout_btn").style.backgroundColor = "#00ff00";
	document.getElementById("logout_btn").style.border = "3px solid #000";
	document.getElementById("logout_btn").style.color = "#000";	
}
