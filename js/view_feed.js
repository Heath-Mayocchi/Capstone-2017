function init() 
{
	showPost(0);
}
window.onload=init;

var slideIndex = 1;
var currentPostID = null;

function displayPost(n) {
    showPost(slideIndex += n);
}

function showPost(n) {
    var x = document.getElementsByClassName("post");
    var z = document.getElementsByClassName("comment_view");

    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length} ;
    for (var i = 0; i < x.length; i++) {
        x[i].style.display = "none";
         z[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
    z[slideIndex-1].style.display = "block";

    var currentPost = document.getElementsByClassName("post_id");
		currentPostID = currentPost[slideIndex-1].innerText;
		document.getElementById("comment_post_id").innerText = currentPostID;

}


function getPostID()
{
	var currentPost = document.getElementsByClassName("post_id");
	currentPostID = currentPost[slideIndex-1].innerText;
	return currentPostID;
}

// toggles the comment section from hidden to visible and shifts the post left when the comments are viewable
function feedBtnClickChoose(){  
		// hide nav buttons
		document.getElementById("postNavigationButtons").style.display = "none";
		// diplay emoji/ comment buttons
		document.getElementById("choose_buttons").style.display = "block";

		// display comments
		document.getElementById("comment_space").style.display = "block";
		document.getElementById("post_view").style.left = "0%"; 

		// auto focus emoji button
		document.getElementById("emoji_button").focus();
		postNavButtons = false;
		chooseButtons = true;
}		

// variables to keep track of footer buttons
var postNavButtons = true;
var chooseButtons = false;	
var emojiSelectButtons = false;
var commentButtons = false;

// variables for key presses
var nextElement = 32; // spacebar
var selectElement = 13; // enter key

// var nextElement = 39; // up
// var selectElement = 38; // right

/*
functions for post navigation
*/
function feedBtnNext(event) {	
	event.preventDefault();
  var key = event.which;
	// if key pressed is the spacebar, change focus to choose button
	if (key == nextElement){
		document.getElementById("next_btn").blur();
		document.getElementById("choose_btn").focus();
	}
	// if key pressed is the enter key, view next post
	if (key == selectElement){ 
		//key.stopPropagation();
		displayPost(-1);
		//plusComment(-1);
	}
}
function feedBtnPrevious(event) {
	event.preventDefault();
    var key = event.which;
	// if key pressed is the spacebar, change focus to next button
	if (key == nextElement){ 	
		document.getElementById("previous_btn").blur();
		document.getElementById("next_btn").focus();
	}
	// if key pressed is the enter key, view previous post
	if (key == selectElement){
		//key.stopPropagation();
		displayPost(1);	
		//plusComment(1); //this is for the latest comment
	}
}

function feedBtnChoose(event) {
	event.preventDefault();
	var key = event.which;
	// if key pressed is the spacebar, change focus to the back button
	if (key == nextElement){ 
			document.getElementById("choose_btn").blur();
			document.getElementById("back_btn").focus();		
	}
	// if key pressed is the enter key, display choose buttons and comments
	if (key == selectElement){
		feedBtnClickChoose()
	}	
}



