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
	document.getElementById("view_feed_btn").focus();
}
window.onload=init;

function view_feed(event){	
    var key = event.keyCode;
	// if key pressed is the spacebar, change focus to create post button
	if (key == 32){
		document.getElementById("view_feed_btn").blur();
		document.getElementById("create_post_btn").focus();
			
	}
	// if key pressed is the enter key, goto href view feed
	else if (key == 13){
		window.location.href = 'view_feed.php';
	}	
}
function create_post(event){
    var key = event.keyCode;
	// if key pressed is the spacebar, change focus to friends button
	if (key == 32){
		document.getElementById("create_post_btn").blur();
		document.getElementById("friends_btn").focus();
	}
	// if key pressed is the enter key, goto href view feed
	if (key == 13){
		window.location.href = 'create_post.php';
	}	
}
function friends(event){
    var key = event.keyCode;
	// if key pressed is the spacebar, change focus to messages button
	if (key == 32){
		document.getElementById("friends_btn").blur();
		document.getElementById("messages_btn").focus();
	}
	// if key pressed is the enter key, goto href view feed
	if (key == 13){
		window.location.href = '#';
	}	
}
function messages(event){
    var key = event.keyCode;
	// if key pressed is the spacebar, change focus to create post button
	if (key == 32){
		document.getElementById("messages_btn").blur();
		document.getElementById("logout_btn").focus();
	}
	// if key pressed is the enter key, goto href view feed
	if (key == 13){
		window.location.href = '#';
	}	
}
function messages(event){
    var key = event.keyCode;
	// if key pressed is the spacebar, change focus to logout button
	if (key == 32){
		document.getElementById("messages_btn").blur();
		document.getElementById("logout_btn").focus();
	}
	// if key pressed is the enter key, goto href view feed
	if (key == 13){
		window.location.href = '#';
	}	
}
function logout(event){
    var key = event.keyCode;
	// if key pressed is the spacebar, change focus to view feed button
	if (key == 32){
		document.getElementById("logout_btn").blur();
		document.getElementById("view_feed_btn").focus();
	}
	// if key pressed is the enter key, goto href view feed
	if (key == 13){
		window.location.href = '#';
	}	
}

