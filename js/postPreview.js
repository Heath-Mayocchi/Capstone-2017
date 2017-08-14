var pictureButton = document.querySelector(".pictureButton");
var textArea = document.querySelector("textarea");
var modal = document.querySelector(".modal");
var images = document.querySelectorAll(".modal img");
var displayPic = document.querySelector("#selectedPicture");
var selectButton = document.querySelector(".selectPicButton");

var theSource;
var compareSource;
var compareSource2;
var isTrue = false;


pictureButton.addEventListener("click", function() {
	if (isTrue == false) {
		textArea.classList.toggle("textBig");
		textArea.classList.toggle("textSmall");
	}
	modal.classList.toggle("hideModal");
});

selectButton.addEventListener("click", function() {
	displayPic.src = theSource;
	modal.classList.add("hideModal");
	displayPic.style.display = "block";
	isTrue = true;
});

for (var i = 0; i < images.length; i++) {
	images[i].addEventListener("click", function () {
		theSource = this.src;
	});
}


