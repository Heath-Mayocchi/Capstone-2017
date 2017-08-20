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

// function for back key presses
function feedBtnBack(event){
    var key = event.which;
	// if key pressed is the right arrow, change focus to 'react' footer button
	if (key == 32){
		document.getElementById("back_btn").blur();
		document.getElementById("previous_btn").focus();
	}
	// if key pressed is the up arrow, view next post
	if (key == 13){
		event.preventDefault();
        event.stopPropagation();
		window.history.back();
	}	
}

// function for next button key presses
function feedBtnNext(event) {	
    var key = event.which;
	// if key pressed is the right arrow, change focus to 'react' footer button
	if (key == 32){
		document.getElementById("next_btn").blur();
		document.getElementById("choose_btn").focus();
	}
	// if key pressed is the up arrow, view next post
	if (key == 13){        
		key.preventDefault();
        key.stopPropagation();
		displayPost(-1);
		plusComment(-1);
	}
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
		

// function for choose button key presses
function feedBtnChoose(event) {
		var key = event.which;
		// if key pressed is the spacebar, change focus to the back button
		if (key == 32){ 
			document.getElementById("choose_btn").blur();
			document.getElementById("back_btn").focus();		
		}
		// if key pressed is the enter key, display react buttons and comments
		if (key == 13){
		// hide nav buttons
		// TODO
		// diplay emoji/ comment buttons
		// TODO
		// display comments
		document.getElementById("comment_view").classList.add('visible'); 
		document.getElementById("comment_view").classList.remove('hidden'); 
		document.getElementById("post_view").style.left = "0%"; 
		document.getElementById("latestCommentSection").style.left = "0%"; 
		document.getElementById("reacted_emojis").style.marginLeft = "60px";
		// auto focus emoji button		
		// TODO
	}	
}

// function for previous button key presses
function feedBtnPrevious(event) {
    var key = event.which;
	// if key pressed is the spacebar, change focus to 'next' footer button
	if (key == 32){ 	
		document.getElementById("previous_btn").blur();
		document.getElementById("next_btn").focus();
	}
	// if key pressed is the enter key, view previous post
	if (key == 13){
		key.preventDefault();
        key.stopPropagation();
		displayPost(1);	
		plusComment(1); //this is for the latest comment
	}
}


