function init() 
{
	showDivs(slideIndex);
	showComment(commentSlider);
}
window.onload=init;

var slideIndex = 1;

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("post");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";

}

// function for next button key presses
function feedBtnNext(event) {	
    var key = event.keyCode;
	// if key pressed is the right arrow, change focus to 'react' footer button
	if (key == 39){
		document.getElementById("next_img").src = "img/next.png";
		document.getElementById("react_btn").focus();
	}
	// if key pressed is the up arrow, view next post
	if (key == 38){
		plusDivs(-1);
		plusComment(-1);
	}
}

// function for react button key presses
function feedBtnReact(event) {
    var key = event.keyCode;
	// if key pressed is the right arrow, change focus to 'previous' footer button
	if (key == 39){ 
		document.getElementById("prev_img").src = "img/previous_selected.png";
		document.getElementById("previous_btn").focus();		
	}
	// if key pressed is the up arrow, display react buttons and comments
	if (key == 38){
		// toggles the comment section from hidden to visible and shifts the post left when the comments are viewable
		if (document.getElementById("comment_view").classList.contains('visible'))
		{
			document.getElementById("comment_view").classList.add('hidden');
			document.getElementById("comment_view").classList.remove('visible');
			document.getElementById("post_view").style.left = "20%";
		} else 
		{
			document.getElementById("comment_view").classList.add('visible');
			document.getElementById("comment_view").classList.remove('hidden');
			document.getElementById("post_view").style.left = "0%";
		}
	}	
}

// function for previous button key presses
function feedBtnPrevious(event) {
    var key = event.keyCode;
	// if key pressed is the right arrow, change focus to 'next' footer button
	if (key == 39){ 	
		document.getElementById("prev_img").src = "img/previous.png";
		document.getElementById("next_img").src = "img/next_selected.png";
		document.getElementById("next_btn").focus();
	}
	// if key pressed is the up arrow, view previous post
	if (key == 38){
		plusDivs(1);	
		plusComment(1); //this is for the latest comment
	}
}


// function for react button clicks
var react = document.querySelector("#react_btn");
react.addEventListener("click", function() {
		// toggles the comment section from hidden to visible and shifts the post left when the comments are viewable
		if (document.getElementById("comment_view").classList.contains('visible'))
		{
			document.getElementById("comment_view").classList.add('hidden');
			document.getElementById("comment_view").classList.remove('visible');
			document.getElementById("post_view").style.left = "20%";
		} else 
		{
			document.getElementById("comment_view").classList.add('visible');
			document.getElementById("comment_view").classList.remove('hidden');
			document.getElementById("post_view").style.left = "0%";
		}	
});



/*	Latest comment js below 

	-Levi	
*/

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