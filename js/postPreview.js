/*	Element selectors	*/
var pictureButton = document.querySelector("#pictureBtn");
var textArea = document.querySelector("textarea");
var modal = document.querySelector(".modal");
var images = document.querySelectorAll(".modal img");
var displayPic = document.querySelector("#selectedPicture");
var selectButton = document.querySelector("#selectPicButton");
var picM = document.querySelector("#picM");	// This is the one used to send the selected picture
var upload = document.querySelector(".upload");
var uploadURL = document.querySelector("#uploadURL");
var localURL = document.querySelector("#uploadLocal");

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
	upload.classList.toggle("uploadVisibility");
	localURL.classList.toggle("uploadVisibility");
	checker();
}

function selectButtonFunc() {
	// Function for the select button, which is the button that opens along with the modal
	if (document.getElementById("uploadURL").value != ""){
		displayPic.src = document.getElementById("uploadURL").value;
	} else {
		displayPic.src = theSource;
	}
//	displayPic.src = document.getElementById("uploadURL").value;
	modal.classList.add("hideModal");
	displayPic.style.display = "block";
	isTrue = true;
	pictureFocus = false;
	document.getElementById("pictureBtn").focus();
	picM.value = displayPic.src;
	upload.classList.toggle("uploadVisibility");
	localURL.classList.toggle("uploadVisibility");
	checker();
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
	reactButtonPoster();
}

// If a user decides to select a pre-uploaded picture,
// then the form for inserting a URL will be disabled.
function checker() {
	var thisSrc = displayPic.src;

	if (thisSrc.indexOf("#") >= 0) {
		uploadURL.disabled = false;
		localURL.disabled = false;
	} else {
		upload.style.color = "Grey";
		uploadURL.disabled = true;
		uploadURL.placeholder = "";

		localURL.disabled = true;
		localURL.style.color = "Grey";
		localURL.value = "";
		localURL.placeholder = "";
	}
}

// This function is necessary for IE11, because inputs and buttons are not allowed 
// outside of the form, therefore, I implemented hidden inputs and buttons inside the form
// which will be activated and sent when the inputs and buttons that are outside are used.
function reactButtonPoster() {
	var reactButtonPost = document.querySelector("#reactButtonPost");
	var hiddenSubmit = document.querySelector("#hiddenSubmit");
	var hiddenURL = document.querySelector("#hiddenUploadURL");

	reactButtonPost.addEventListener("click", function () {
		hiddenURL.value = uploadURL.value;
		hiddenSubmit.click();
	});
}
