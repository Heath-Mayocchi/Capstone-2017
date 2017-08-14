/*	Element selectors	*/
var pictureButton = document.querySelector(".pictureButton");
var textArea = document.querySelector("textarea");
var modal = document.querySelector(".modal");
var images = document.querySelectorAll(".modal img");
var displayPic = document.querySelector("#selectedPicture");
var selectButton = document.querySelector(".selectPicButton");

//	 Used for conditions	
var theSource;
var isTrue = false;
var midas = 0;

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

//	For getting the clicked image src	
for (var i = 0; i < images.length; i++) {
	images[i].addEventListener("click", function () {
		theSource = this.src;
	});
}

//	For adding the id when a specific image is clicked 
for (var i = 0; i < images.length; i++) {
	images[i].addEventListener("click", function() {
		if (midas === 0) {
			resetColor();
			this.id = (this.id == "imageSelected") ? "" : "imageSelected";
			midas++;
		} else if (midas === 1) {
			resetColor();
			this.id = (this.id == "imageSelected") ? "" : "imageSelected";
			midas = 0;	
		}
	});
}	

//	Used for resetting	
function resetColor() {
	for (var i = 0; i < images.length; i++) {
		images[i].removeAttribute("id");
	}
};
