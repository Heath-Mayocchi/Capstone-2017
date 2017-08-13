/*
QUT Capstone Project 2017
Project Owner: Nursery Road State Special School

SNAP - Social Networking Action Platform

Author: Robert Piper
Author: Heath Mayocchi
Author: Levinard Hugo
Author: David Mackenzie
*/

/* User homepage focus functions */

function init() 
{
	// load page with feed button focused
	feedButtonFocused();
}
window.onload=init;

/* 
global variable to keep track of main button focus
0 = feed
1 = post
2 = message
3 = friends
*/
var buttonCount = 0;


// function for next button key presses
function userHomeBtnNext(event) {	
    var key = event.keyCode;
	// if key pressed is the right arrow, change focus to next footer button
	if (key == 39){
		document.getElementById("next_img").src = "img/next.png";
		document.getElementById("select_btn").focus();
	}
	// if key pressed is the up arrow, change focus to next main button
	if (key == 38){
		if (buttonCount == 0){// feed button
			postButtonFocused();
			feedButtonUnFocused();
			buttonCount++;
		}
		else if (buttonCount == 1){// post button
			messageButtonFocused();
			postButtonUnFocus();
			buttonCount++;
		}
		else if (buttonCount == 2){// message button
			friendsButtonFocused();
			messageButtonUnFocused();
			buttonCount++;
		}
		else if (buttonCount == 3){// friends button
			feedButtonFocused();
			friendsButtonUnFocused();
			buttonCount = 0;
		}
	}
}

// function for select button key presses
function userHomeBtnSelect(event) {
    var key = event.keyCode;
	// if key pressed is the right arrow, change focus to next footer button
	if (key == 39){ 
		document.getElementById("prev_img").src = "img/previous_selected.png";
		document.getElementById("previous_btn").focus();		
	}
	// if key pressed is the up arrow, activate focused main button
	if (key == 38){ 
		if (buttonCount == 0){// feed button
			window.location.assign("view_feed.php")			
		}
		else if (buttonCount == 1){// post button
			window.location.assign("create_post.php")
		}
		else if (buttonCount == 2){// message button
			window.location.assign("#")
		}
		else if (buttonCount == 3){// friends button
			window.location.assign("#")
		}		
	}	
}

// function for previous button key presses
function userHomeBtnPrevious(event) {
    var key = event.keyCode;
	// if key pressed is the right arrow, change focus to next footer button
	if (key == 39){ 	
		document.getElementById("prev_img").src = "img/previous.png";
		document.getElementById("next_img").src = "img/next_selected.png";
		document.getElementById("next_btn").focus();
	}
	// if key pressed is the up arrow, change focus to previous main button
	if (key == 38){
		if (buttonCount == 0){// feed button
			friendsButtonFocused();
			feedButtonUnFocused();
			buttonCount = 3;
		}
		else if (buttonCount == 1){// post button
			postButtonUnFocus();
			feedButtonFocused();
			buttonCount--;
		}
		else if (buttonCount == 2){// message button
			messageButtonUnFocused();
			postButtonFocused();
			buttonCount--;
		}
		else if (buttonCount == 3){// friends button
			friendsButtonUnFocused();
			messageButtonFocused();
			buttonCount--;
		}		
	}
}

// functions to change main button focus elements
function feedButtonFocused(){
	document.getElementById("view_feed_btn").style.backgroundColor = "#000";
	document.getElementById("view_feed_btn").style.border = "6px dashed #00ff00";
	document.getElementById("view_feed_btn").style.color = "#fff";	
}
function feedButtonUnFocused(){
	document.getElementById("view_feed_btn").style.backgroundColor = "#00ff00";
	document.getElementById("view_feed_btn").style.border = "3px solid #000";
	document.getElementById("view_feed_btn").style.color = "#000";	
}

function postButtonFocused(){
	document.getElementById("create_post_btn").style.backgroundColor = "#000";
	document.getElementById("create_post_btn").style.border = "6px dashed #00ff00";
	document.getElementById("create_post_btn").style.color = "#fff";
}
function postButtonUnFocus(){
	document.getElementById("create_post_btn").style.backgroundColor = "#00ff00";
	document.getElementById("create_post_btn").style.border = "3px solid #000";
	document.getElementById("create_post_btn").style.color = "#000";	
}

function messageButtonFocused(){
	document.getElementById("messages_btn").style.backgroundColor = "#000";
	document.getElementById("messages_btn").style.border = "6px dashed #00ff00";
	document.getElementById("messages_btn").style.color = "#fff";
}
function messageButtonUnFocused(){
	document.getElementById("messages_btn").style.backgroundColor = "#00ff00";
	document.getElementById("messages_btn").style.border = "3px solid #000";
	document.getElementById("messages_btn").style.color = "#000";
}

function friendsButtonFocused(){	
	document.getElementById("friends_btn").style.backgroundColor = "#000";
	document.getElementById("friends_btn").style.border = "6px dashed #00ff00";
	document.getElementById("friends_btn").style.color = "#fff";
}
function friendsButtonUnFocused(){
	document.getElementById("friends_btn").style.backgroundColor = "#00ff00";
	document.getElementById("friends_btn").style.border = "3px solid #000";
	document.getElementById("friends_btn").style.color = "#000";	
}
