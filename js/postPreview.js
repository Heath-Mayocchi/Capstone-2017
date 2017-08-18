/*	Element selectors	*/
var pictureButton = document.querySelector("#pictureBtn");
var textArea = document.querySelector("textarea");
var modal = document.querySelector(".modal");
var images = document.querySelectorAll(".modal img");
var displayPic = document.querySelector("#selectedPicture");
var selectButton = document.querySelector(".selectPicButton");

var emojiCancelButton = document.querySelector("#emoji_cancel_btn");
var emojiSelection = document.querySelector("#emoji_selection");
var emojiButton = document.querySelector("#reactEmojiButton");

var emojiLike = document.querySelector("#emoji_like");
var emojiLove = document.querySelector("#emoji_love");
var emojiLaugh = document.querySelector("#emoji_laugh");
var emojiWow = document.querySelector("#emoji_wow");
var emojiSad = document.querySelector("#emoji_sad");
	
var theSource;
var isTrue = false;

mainFunc();	// Calls main function


/* functions below	

	- Levi
*/

function resetColor() {
	//	Used for resetting	
	for (var i = 0; i < images.length; i++) {
		images[i].removeAttribute("id");
	}
};

function pictureButtonFunc() {
	// Used for toggling the textarea to be small or big depending if the user wants to use a picture
	if (isTrue == false) {
		textArea.classList.toggle("textBig");
		textArea.classList.toggle("textSmall");
	}
	modal.classList.toggle("hideModal");
}

function selectButtonFunc() {
	// Function for the select button, which is the button that opens along with the modal
	displayPic.src = theSource;
	modal.classList.add("hideModal");
	displayPic.style.display = "block";
	isTrue = true;
}

function emojiButtonFunc() {
	// Shows the emoji selection when the emoji button is clicked
	emojiSelection.style.visibility = "visible";
}

function emojiCancelButtonFunc() {
	// Hides the emoji selection when the cancel button is clicked
	emojiSelection.style.visibility = "hidden";
}

function emote(emotion) {
	// Adds an emoji to the form when a specific emoji is clicked
	switch(emotion) {
		case 'like':
			textArea.value += String.fromCodePoint(0x1f44d);
			break;
		case 'heart':
			textArea.value += String.fromCodePoint(0x2764);
			break;
		case 'grin':
			textArea.value += String.fromCodePoint(0x1F600);
			break;
		case 'wow':
			textArea.value += String.fromCodePoint(0x1F62E);
			break;
		case 'sad':
			textArea.value += String.fromCodePoint(0x1F622);
			break;
	}
}



/* This is the main function, which runs everything on the page.
   I decided to put everything inside one function to make it cleaner, and easier to read.. */
function mainFunc() {
	//	For getting the clicked image src	
	for (var i = 0; i < images.length; i++) {
		images[i].addEventListener("click", function () {
			theSource = this.src;
		});
	}
	//	For adding the id when a specific image is clicked 
	for (var i = 0; i < images.length; i++) {
		images[i].addEventListener("click", function() {
				resetColor();
				this.id = (this.id == "imageSelected") ? "" : "imageSelected";
		});
	}	

	// Event listeners
	pictureButton.addEventListener("click", pictureButtonFunc);			//	Button for the picture to show the 6 pictures	
	selectButton.addEventListener("click", selectButtonFunc);			//	Select button for the pictures 
	emojiButton.addEventListener("click", emojiButtonFunc);				//  Emoji button
	emojiCancelButton.addEventListener("click", emojiCancelButtonFunc);	// closes the emoji selection
	emojiLike.addEventListener("click", function() {
		emote("like");
	});
	emojiLove.addEventListener("click", function() {
		emote("heart");
	});
	emojiLaugh.addEventListener("click", function() {
		emote("grin");
	});
	emojiWow.addEventListener("click", function() {
		emote("wow");
	});
	emojiSad.addEventListener("click", function() {
		emote("sad");
	});
}