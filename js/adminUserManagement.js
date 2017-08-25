var file = document.querySelector("#uploadPicture");

file.addEventListener("change", function() {
	var img = document.querySelector("#pictureForUpload");;
 	img.src = window.URL.createObjectURL(this.files[0]);
});