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


function userHomeBtnFocusFwd(event) {	
	//cross-browser solution, keyCode property does not work with onkeypress event in Firefox.
	var keyPress = event.which || event.keyCode;
	// if key pressed is the right arrow, change focus to next button
	if (keyPress == 39){ 
		
	}
}

function userHomeBtnActivate(event) {
	//cross-browser solution, keyCode property does not work with onkeypress event in Firefox.
	var keyPress = event.which || event.keyCode;
	// if key pressed is the up arrow, activate focused button
	if (keyPress == 38){ 
		
	}	
}

function userHomeBtnFocusBack(event) {
	//cross-browser solution, keyCode property does not work with onkeypress event in Firefox.	
	var keyPress = event.which || event.keyCode;
	// if key pressed is the right arrow, change focus to previous button
	if (keyPress == 39){ 
		
	}
}

function nextfocus() {
	var nextfocused = document.getElementsByClassName{"next_btn_img"};									
	nextfocused.src = "img/next_selected.png";
	// var nextfocused = document.getElementsByClassName{"next_btn"};
	// nextfocused.innerHTML = "<img src="img/next_selected.png" alt="Next"></img>";
}

/* function postBtnFocus(event){
	//cross-browser solution, keyCode property does not work with onkeypress event in Firefox.
	var keyPress = event.which || event.keyCode;
	if (keyPress == 39){ // if key pressed is the right arrow
	document.getElementById("create_post_btn").focus();		
	}
}
function msgBtnFocus(event){
	//cross-browser solution, keyCode property does not work with onkeypress event in Firefox.
	var keyPress = event.which || event.keyCode;
	if (keyPress == 39){ // if key pressed is the right arrow
	document.getElementById("messages_btn").focus();
	}
}
function friendBtnFocus(event){
	//cross-browser solution, keyCode property does not work with onkeypress event in Firefox.
	var keyPress = event.which || event.keyCode;
	if (keyPress == 39){ // if key pressed is the right arrow
	document.getElementById("friends_btn").focus();
	}
}
function feedBtnFocus(event){
	//cross-browser solution, keyCode property does not work with onkeypress event in Firefox.
	var keyPress = event.which || event.keyCode;
	if (keyPress == 39){ // if key pressed is the right arrow
	document.getElementById("view_feed_btn").focus();
	}
}
function logoutBtnFocus(event){
	//cross-browser solution, keyCode property does not work with onkeypress event in Firefox.
	var keyPress = event.which || event.keyCode;
	if (keyPress == 39){ // if key pressed is the right arrow
	document.getElementById("logout_btn").focus();}
} */
