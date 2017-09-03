function init() 
{
	showPost(slideIndex);
	showComment(commentSlider);
}
window.onload=init;

// display post

var slideIndex = 1;
function displayPost(n) {
    showPost(slideIndex += n);
}
function showPost(n) {
    var x = document.getElementsByClassName("post");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length} ;
    for (var i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
}


// latest comment

var forward = document.querySelector("#next_btn");
var backward = document.querySelector("#previous_btn");
var commentSlider = 1;

forward.addEventListener("click", function() {
	plusComment(1);
});

backward.addEventListener("click", function() {
	plusComment(-1);
});

function plusComment(n) {
	showComment(commentSlider += n);
}

function showComment(n) {
	var items = document.getElementsByClassName("latestCommentBar");
	var length = items.length;
	if (n > length) { 
		commentSlider = 1;
	} else if (n < 1) {
		commentSlider = length;
	}

	for (var i = 0; i < length; i++) {
	items[i].style.display = "none";
	}
	items[commentSlider - 1].style.display = "block";
}

// toggles the comment section from hidden to visible and shifts the post left when the comments are viewable
function feedBtnClickChoose(){  
	/* if (document.getElementById("comment_view").classList.contains('visible')) 
	{ 
		document.getElementById("comment_view").classList.add('hidden'); 
		document.getElementById("comment_view").classList.remove('visible'); 
		document.getElementById("post_view").style.left = "20%"; 
		document.getElementById("latestCommentSection").style.left = "18%";
		document.getElementById("reacted_emojis").style.marginLeft = "260px";
	} else  
	{ 
		document.getElementById("comment_view").classList.add('visible'); 
		document.getElementById("comment_view").classList.remove('hidden'); 
		document.getElementById("post_view").style.left = "0%"; 
		document.getElementById("latestCommentSection").style.left = "0%"; 
		document.getElementById("reacted_emojis").style.marginLeft = "60px";
	} */
}		

// variables to keep track of footer buttons
var postNavButtons = true;
var chooseButtons = false;	
var emojiSelectButtons = false;
var commentButtons = false;

// variables for key presses
var nextElement = 32; // spacebar
var selectElement = 13; // enter key

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
		key.stopPropagation();
		displayPost(-1);
		plusComment(-1);
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
		key.stopPropagation();
		displayPost(1);	
		plusComment(1); //this is for the latest comment
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
		// hide nav buttons
		document.getElementById("postNavigationButtons").style.display = "none";
		// diplay emoji/ comment buttons
		document.getElementById("choose_buttons").style.display = "block";
		// display comments
		document.getElementById("comment_view").classList.add('visible'); 
		document.getElementById("comment_view").classList.remove('hidden'); 
		document.getElementById("post_view").style.left = "0%"; 
		document.getElementById("latestCommentSection").style.left = "0%"; 
		document.getElementById("reacted_emojis").style.marginLeft = "60px";
		// auto focus emoji button
		document.getElementById("emoji_button").focus();
		postNavButtons = false;
		chooseButtons = true;
	}	
}

function validateComment() {
	var content = document.forms["new_comment"]["content"].value;
	if (content == "") {
		alert("Please enter a comment before submitting");
		return false;
	} else if (content.length > 90) {
		alert("Please enter a comment with 90 characters or less");
		return false;
	}
}




/*************** JS for the emoji ****************/

var emojiLike = document.querySelector("#emoji_like");
var emojiLove = document.querySelector("#emoji_love");
var emojiLaugh = document.querySelector("#emoji_laugh");
var emojiWow = document.querySelector("#emoji_wow");
var emojiSad = document.querySelector("#emoji_sad");

var emojiHidden = document.querySelector("#emojiHidden");
var emojiHiddenButton = document.querySelector("#emojiHiddenButton");

emojiLike.addEventListener("keydown", function(e) {
	if (e.keyCode == "13") {
		emojiHidden.value = "like";
		emojiHiddenButton.click();
	}
});

emojiLove.addEventListener("keydown", function(e) {
	if (e.keyCode == "13") {
		emojiHidden.value = "love";
		emojiHiddenButton.click();
	}
});

emojiLaugh.addEventListener("keydown", function(e) {
	if (e.keyCode == "13") {
		emojiHidden.value = "laugh";
		emojiHiddenButton.click();
	}
});

emojiWow.addEventListener("keydown", function(e) {
	if (e.keyCode == "13") {
		emojiHidden.value = "wow";
		emojiHiddenButton.click();
	}
});

emojiSad.addEventListener("keydown", function(e) {
	if (e.keyCode == "13") {
		emojiHidden.value = "sad";
		emojiHiddenButton.click();
	}
});

