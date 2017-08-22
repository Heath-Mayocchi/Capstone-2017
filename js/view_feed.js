// var switchBtn = 32;
// var selectBtn = 13;

var switchBtn = 39;
var selectBtn = 38;

function init() 
{
	showPost(slideIndex);
	showLatestComment(commentSlider);
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
	showLatestComment(commentSlider += n);
}

function showLatestComment(n) {
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
	if (key == switchBtn){
		document.getElementById("back_btn").blur();
		document.getElementById("previous_btn").focus();
	}
	// if key pressed is the up arrow, view next post
	if (key == selectBtn){
		event.preventDefault();
        event.stopPropagation();
		window.history.back();
	}	
}

// function for next button key presses
function feedBtnNext(event) {	
    var key = event.which;
	// if key pressed is the right arrow, change focus to 'react' footer button
	if (key == switchBtn){
		document.getElementById("next_btn").blur();
		document.getElementById("choose_btn").focus();
	}
	// if key pressed is the up arrow, view next post
	if (key == selectBtn){        
		event.preventDefault();
        event.stopPropagation();
		displayPost(-1);
		plusComment(-1);
	}
}

/* 
function for selecting emojis

hide react buttons
display emoji selection
prev and next change from react btn focus to emoji select focus 
*/
function feedBtnEmoji(event){
    var key = event.which;
	// if key pressed is the switchBtn, change focus to next footer button
	if (key == switchBtn){
		document.getElementById("emoji_button").blur();
		document.getElementById("comment_button").focus();
	}
 if (key == selectBtn){
		hideReactButtons();
		showEmojiButtons();
		document.getElementById("emoji_button").blur();
		document.getElementById("emoji_like").focus();
	}
}
/*
function for selecting comment

hide react buttons
display comment form
prev and next change from react btn focus to comment form focus
*/
function feedBtnComment(event){
   var key = event.which;
	// if key pressed is the switchBtn, change focus to next footer button
	if (key == switchBtn){
		document.getElementById("comment_button").blur();
		document.getElementById("react_cancel_button").focus();		
	}
	// if (key == selectBtn){
	// 	document.getElementById("react_buttons").style.visibility = "hidden";
	// 	document.getElementById("comment_form").style.visibility = "visible";
	// }	
}

function showNavButtons()
{
	// show nav buttons
	document.getElementById("postNavigationButtons").style.display = "block";
	document.getElementById("previous_btn").classList.add('visible'); 
	document.getElementById("previous_btn").classList.remove('hidden'); 
	document.getElementById("next_btn").classList.add('visible'); 
	document.getElementById("next_btn").classList.remove('hidden'); 
	document.getElementById("choose_btn").classList.add('visible'); 
	document.getElementById("choose_btn").classList.remove('hidden'); 
}

function hideNavButtons()
{
	// hide nav buttons
	document.getElementById("postNavigationButtons").style.display = "none";
	document.getElementById("previous_btn").classList.add('hidden'); 
	document.getElementById("previous_btn").classList.remove('visible'); 
	document.getElementById("next_btn").classList.add('hidden'); 
	document.getElementById("next_btn").classList.remove('visible'); 
	document.getElementById("choose_btn").classList.add('hidden'); 
	document.getElementById("choose_btn").classList.remove('visible'); 
}

function showReactButtons()
{
	document.getElementById("react_buttons").style.display = "block";
	document.getElementById("emoji_button").classList.add('visible'); 
	document.getElementById("emoji_button").classList.remove('hidden'); 
	document.getElementById("comment_button").classList.add('visible'); 
	document.getElementById("comment_button").classList.remove('hidden'); 
	document.getElementById("react_cancel_button").classList.add('visible'); 
	document.getElementById("react_cancel_button").classList.remove('hidden'); 		
}
function hideReactButtons()
{
	document.getElementById("react_buttons").style.display = "none";
	document.getElementById("emoji_button").classList.add('hidden'); 
	document.getElementById("emoji_button").classList.remove('visible'); 
	document.getElementById("comment_button").classList.add('hidden'); 
	document.getElementById("comment_button").classList.remove('visible'); 
	document.getElementById("react_cancel_button").classList.add('hidden'); 
	document.getElementById("react_cancel_button").classList.remove('visible'); 
}

function showEmojiButtons()
{
	document.getElementById("emoji_selection").style.display = "block";
}
function hideEmojiButtons()
{
	document.getElementById("emoji_selection").style.display = "none";
}

function showComments()
{
	document.getElementById("comment_view").classList.add('visible'); 
	document.getElementById("comment_view").classList.remove('hidden'); 
	document.getElementById("post_view").style.left = "0%"; 
	document.getElementById("latestCommentSection").style.left = "0%"; 
}

function hideComments()
{
	document.getElementById("comment_view").classList.add('hidden'); 
	document.getElementById("comment_view").classList.remove('visible'); 
	document.getElementById("post_view").style.left = "20%"; 
	document.getElementById("latestCommentSection").style.left = "18%"; 	
}
/*
function for selecting cancel after react

hide comments
hide react buttons
prev and next from comment form focus to changing post display
change select button function
*/
function feedBtnCancel(event){ 
   var key = event.which;
	// if key pressed is the switchBtn, change focus to next footer button
	if (key == switchBtn){
		document.getElementById("react_cancel_button").blur();
		document.getElementById("emoji_button").focus();		
	}
	else{
		
		if( key == selectBtn){

			showNavButtons();
			hideReactButtons();
			hideComments();
		
			// auto focus next button		
			document.getElementById("emoji_button").blur();
			document.getElementById("next_btn").focus();	

		}
	}	
}
/*
function for selecting cancel when selecting emojis

hide emojis
prev and next from selecting emoji focus to changing post display
change select button function
*/
function emojiButtonCancel(event){ 
  var key = event.which;
	// if key pressed is the switchBtn, change focus to next footer button
	if (key == switchBtn){
		document.getElementById("emoji_cancel_btn").blur();
		document.getElementById("emoji_like").focus();
	}
  if (key == selectBtn){
		// hide emoji/ comment buttons	
		hideEmojiButtons();
		showReactButtons();

		document.getElementById("emoji_cancel_btn").blur();
		document.getElementById("emoji_button").focus();
	}
}

// toggles the comment section from hidden to visible and shifts the post left when the comments are viewable
function feedBtnClickChoose(){  

	hideNavButtons();
	showReactButtons();

	showComments();
		
	// auto focus emoji button		
	document.getElementById("choose_btn").blur();
	document.getElementById("emoji_button").focus();	
}		
		

// function for choose button key presses
function feedBtnChoose(event) {
		var key = event.which;
		// if key pressed is the switchBtn, change focus to the back button
		if (key == switchBtn){ 
			document.getElementById("choose_btn").blur();
			document.getElementById("back_btn").focus();		
		}else 
		{
			if (key == selectBtn)
			{
				feedBtnClickChoose();
			}			
		}	// if key pressed is the selectBtn key, display react buttons and comments
	
}

// function for previous button key presses
function feedBtnPrevious(event) {
    var key = event.which;
	// if key pressed is the spacebar, change focus to 'next' footer button
	if (key == switchBtn){ 	
		document.getElementById("previous_btn").blur();
		document.getElementById("next_btn").focus();
	}
	// if key pressed is the enter key, view previous post
	if (key == selectBtn){
		event.preventDefault();
        event.stopPropagation();
		displayPost(1);	
		plusComment(1); //this is for the latest comment
	}
}


function emojiButtonLike(event)
{
  var key = event.which;
	// if key pressed is the switchBtn, change focus to next footer button
	if (key == switchBtn){
		document.getElementById("emoji_like").blur();
		document.getElementById("emoji_love").focus();
	}
}

function emojiButtonLove(event)
{
  var key = event.which;
	// if key pressed is the switchBtn, change focus to next footer button
	if (key == switchBtn){
		document.getElementById("emoji_love").blur();
		document.getElementById("emoji_laugh").focus();
	}
}

function emojiButtonLaugh(event)
{
  var key = event.which;
	// if key pressed is the switchBtn, change focus to next footer button
	if (key == switchBtn){
		document.getElementById("emoji_laugh").blur();
		document.getElementById("emoji_wow").focus();
	}
}

function emojiButtonWow(event)
{
  var key = event.which;
	// if key pressed is the switchBtn, change focus to next footer button
	if (key == switchBtn){
		document.getElementById("emoji_wow").blur();
		document.getElementById("emoji_sad").focus();
	}
}

function emojiButtonSad(event)
{
  var key = event.which;
	// if key pressed is the switchBtn, change focus to next footer button
	if (key == switchBtn){
		document.getElementById("emoji_sad").blur();
		document.getElementById("emoji_cancel_btn").focus();
	}
}