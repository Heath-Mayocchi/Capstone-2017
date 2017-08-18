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

emojiLike.addEventListener("click", function() {
	var temp = String.fromCodePoint(0x1f44d);	// unicode for thumbs up
	textArea.value += temp;
});

emojiLove.addEventListener("click", function() {
	var temp = String.fromCodePoint(0x2764);	// unicode for heart
	textArea.value += temp;
});

emojiLaugh.addEventListener("click", function() {
	var temp = String.fromCodePoint(0x1F600);	// unicode for grinning 
	textArea.value += temp;
});

emojiWow.addEventListener("click", function() {
	var temp = String.fromCodePoint(0x1F62E);	// unicode fro wow
	textArea.value += temp;
});

emojiSad.addEventListener("click", function() {
	var temp = String.fromCodePoint(0x1F622);	// unicode for sad
	textArea.value += temp;
});

//	 Used for conditions	
var theSource;
var isTrue = false;

//	Button for the picture to show the 6 pictures	
pictureButton.addEventListener("click", function() {
	if (isTrue == false) {
		textArea.classList.toggle("textBig");
		textArea.classList.toggle("textSmall");
	}
	modal.classList.toggle("hideModal");
});

//	Select button for the pictures 
selectButton.addEventListener("click", function() {
	displayPic.src = theSource;
	modal.classList.add("hideModal");
	displayPic.style.display = "block";
	isTrue = true;
});

emojiButton.addEventListener("click", function() {
	emojiSelection.style.visibility = "visible";
});

emojiCancelButton.addEventListener("click", function() {
	emojiSelection.style.visibility = "hidden";
});

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

//	Used for resetting	
function resetColor() {
	for (var i = 0; i < images.length; i++) {
		images[i].removeAttribute("id");
	}
};
