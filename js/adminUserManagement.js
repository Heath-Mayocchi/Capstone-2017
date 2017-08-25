var file = document.querySelector("#uploadPicture");
var hiddenButton = document.querySelector("#registerHiddenSubmitButton");
var mainButton = document.querySelector("#saveUser");


file.addEventListener("change", function() {
	var img = document.querySelector("#pictureForUpload");;
 	img.src = window.URL.createObjectURL(this.files[0]);
});

mainButton.addEventListener("click", function() {
	hiddenButton.click();
});