/*	Element selectors	*/
var pictureButton = document.querySelector("#pictureBtn");
var textArea = document.querySelector("textarea");
var modal = document.querySelector(".modal");
var images = [].slice.call(document.querySelectorAll(".modal img"));
var displayPic = document.querySelector("#selectedPicture");
var selectButton = document.querySelector("#selectPicButton");
var cancelButton = document.querySelector("#cancelPicButton");
var picM = document.querySelector("#picM");	// This is the one used to send the selected picture
var upload = document.querySelector(".upload");
var uploadURL = document.querySelector("#uploadURL");
var localURL = document.querySelector("#uploadLocal");

var theSource;
var isTrue = false;
var number = 0;

mainFunc();	// Calls main function


/* functions below	
	- Levi
*/
/*********		For resetting pictures using the mouse button		*********/
function resetColor() {
	//	Used for resetting	
		for (var i = 0; i < images.length - 2; i++) {
			//images[i].removeAttribute("id");
			images[i].classList.remove("imageHover");
		}
};

function resetColor2() {
	for (var i = 0; i < images.length - 2; i++) {
		images[i].removeAttribute("id");
	}
}


function pictureButtonFunc() {
	decider = false;
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
	//pictureFocus = false;
	document.getElementById("pictureBtn").focus();
	picM.value = displayPic.src;
	upload.classList.toggle("uploadVisibility");
	localURL.classList.toggle("uploadVisibility");
	checker();
	decider = true;
	counter = 10;

}

function cancelButtonFunc() {
	modal.classList.toggle("hideModal");
	upload.classList.toggle("uploadVisibility");
	localURL.classList.toggle("uploadVisibility");
	document.getElementById("pictureBtn").focus();
	decider = true;
	counter = 10;

	displayPic.src = "#";
	picM.value = "";
	displayPic.style.display = "none";

	isTrue = false;
	if (isTrue == false) {
		textArea.classList.toggle("textBig");
		textArea.classList.toggle("textSmall");
	}
}

/* This is the main function, which runs everything on the page.
   I decided to put everything inside one function to make it cleaner, and easier to read.. */
function mainFunc() {
	// Event listeners
	pictureButton.addEventListener("click", pictureButtonFunc);			//	Button for the picture to show the 6 pictures	
	selectButton.addEventListener("click", selectButtonFunc);			//	Select button for the pictures 
	cancelButton.addEventListener("click", cancelButtonFunc);
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
/*********************************************************************************/
images[0].id = "imageHover";
images.push(selectButton);
images.push(cancelButton);
var counter = 10;

// If spacebar is pressed and decider is false (meaning the modal is showing)
window.addEventListener("keydown", function (e) {
	if (e.keyCode == "32" && decider == false) {
		if (counter < 5) {
			resetColor();
			counter++;
			images[counter].classList.add("imageHover");
			

		} else if (counter === 5) {
			resetColor();
			counter++;
			images[counter].focus();
			e.preventDefault();
			counter++;

		} else if (counter === images.length - 1) {
			resetColor();
			images[counter].focus();
			e.preventDefault();
			counter++;

		} else if (counter > images.length - 1) {
			resetColor();
			images[counter - 1].blur();
			counter = 0;
			images[counter].classList.add("imageHover");
			e.preventDefault();
		}
	}

	if (e.keyCode == "13" && counter == 10 ) {
		counter = 0;
		images[0].classList.add("imageHover");
		
	} else  if ((e.keyCode == "13" && decider == false) && counter == 0) {
		resetColor2();
		theSource = images[counter].src;
		images[counter].id = "imageSelected";
		

	} else if ((e.keyCode == "13" && decider == false) && counter == 1) {
		resetColor2();
		theSource = images[counter].src;
		images[counter].id = "imageSelected";
		

	} else if ((e.keyCode == "13" && decider == false) && counter == 2) {
		resetColor2();
		theSource = images[counter].src;
		images[counter].id = "imageSelected";
		

	} else if ((e.keyCode == "13" && decider == false) && counter == 3) {
		resetColor2();
		theSource = images[counter].src;
		images[counter].id = "imageSelected";
		

	} else if ((e.keyCode == "13" && decider == false) && counter == 4) {
		resetColor2();
		theSource = images[counter].src;
		images[counter].id = "imageSelected";
		

	} else if ((e.keyCode == "13" && decider == false) && counter == 5) {
		resetColor2();
		theSource = images[counter].src;
		images[counter].id = "imageSelected";
		
	}
});


/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
/*****	Below are post_heath.js contents which is now deleted	******/


// variables to keep track of focus
var footerButtons = true;
var commentFocus = false;
//var pictureFocus = false;

// variables for key presses
var nextElement = 32; // spacebar
var selectElement = 13; // enter key

var decider = true;

/* 
functions for post buttons
*/
function postBtnBack(event){
	event.preventDefault();
    var key = event.which;
	// if key pressed is the spacebar, change focus to comment button
	if (key == nextElement && decider){ 	
		document.getElementById("post_back_btn").blur();
		document.getElementById("postCommentButton").focus();
	}
	// if key pressed is the enter key
	if (key == selectElement){
		backBtn();
	}	
}
function postCommentButton(event){
	event.preventDefault();
    var key = event.which;
	// if key pressed is the spacebar, change focus to picture button
	if (key == nextElement && decider){ 	
		document.getElementById("postCommentButton").blur();
		document.getElementById("pictureBtn").focus();
		// if comment was focused, remove border
		if (commentFocus == true){			
			document.getElementById("postComment").style.borderTop = "none";
			document.getElementById("postComment").style.borderBottom = "none";
			commentFocus = false;
		}
	}
	// if key pressed is the enter key
	if (key == selectElement){	
		// if comment isn't focused, display border
		if (commentFocus == false){
			document.getElementById("postComment").style.borderTop = "8px dashed #ff6b6b";
			document.getElementById("postComment").style.borderBottom = "8px dashed #ff6b6b";
			commentFocus = true;
		}
		
		// if comment is focused, remove border
		else if (commentFocus == true){			
			document.getElementById("postComment").style.borderTop = "none";
			document.getElementById("postComment").style.borderBottom = "none";
			commentFocus = false;
		}
	}	
}
function postpictureButton(event){
	event.preventDefault();
    var key = event.which;
	// if key pressed is the spacebar, change focus to submit button
	if (key == nextElement && decider){ 	
		document.getElementById("pictureBtn").blur();
		document.getElementById("reactButtonPost").focus();
	}
	// if key pressed is the enter key, toggle picture selection
	if (key == selectElement && decider){ 
		pictureButtonFunc(); 
		document.getElementById("pictureBtn").blur();
	}	
}
function postSubmitButton(event){
	event.preventDefault();
    var key = event.which;
	// if key pressed is the spacebar, change focus to back button
	if (key == nextElement && decider){ 	
		document.getElementById("reactButtonPost").blur();
		document.getElementById("post_back_btn").focus();
	}
	// if key pressed is the enter key, submit post to database
	if (key == selectElement && decider){
		// TODO - submit post to database
		var hiddenSubmit = document.querySelector("#hiddenSubmit");
		textArea.value.trim();		// trims spaces
		hiddenSubmit.click();
	}	
}


function validate() {
	var errorMSG = document.querySelector("#errorMSG");
	if (textArea.value == "") {
		errorMSG.style.visibility = "visible";
		textArea.focus();
		return false;
	}
}

textArea.addEventListener("blur", bro, true);

function bro() {
	if (textArea.value != "") {
		errorMSG.style.visibility = "hidden";
		return true;
	}
}

