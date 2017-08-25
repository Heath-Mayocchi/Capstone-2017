var file = document.querySelector("#uploadPicture");
var hiddenButton = document.querySelector("#registerHiddenSubmitButton");
var mainButton = document.querySelector("#saveUser");
var fileFormatError = document.querySelector("#fileTypeError");

/**********	Forms **************/
var firstName = document.forms["registerUser"]["firstName"];
var lastName = document.forms["registerUser"]["lastName"];
var dob = document.forms["registerUser"]["dob"];
var pass = document.forms["registerUser"]["password"];
var confPass = document.forms["registerUser"]["confirmPassword"];

/********** Errors *************/
var firstNameError = document.querySelector("#firstNameError");
var lastNameError = document.querySelector("#lastNameError");
var dobError = document.querySelector("#dobError");
var passwordError1 = document.querySelector("#passwordError1");
var passwordError = document.querySelector("#passwordError");



file.addEventListener("change", function() {
	var img = document.querySelector("#pictureForUpload");;
	var val = this.value;
	val = val.substring(val.lastIndexOf('.') + 1).toLowerCase();

	if (val == "png" || val == "jpg" || val == "jpeg" || val == "gif" || val == "tiff") {
 		img.src = window.URL.createObjectURL(this.files[0]);
 		fileFormatError.textContent = "";
		fileFormatError.style.color = "";
	} else {
		val.value = '';
		img.src = 'img/profile-placeholder.png';
		fileFormatError.textContent = "Incorrect file format";
		fileFormatError.style.color = "red";
	}
});

mainButton.addEventListener("click", function() {
	hiddenButton.click();
});

firstName.addEventListener("blur", firstNameVerify, true);
lastName.addEventListener("blur", lastNameVerify, true);
pass.addEventListener("blur", passwordVerify, true);
dob.addEventListener("blur", dobVerify, true);


function validate() {
	// check names for only letters
	// use descriptive error messages
	if (firstName.value == "") {
		firstName.style.border = "2px solid red";
		firstNameError.textContent = "*";
		firstNameError.style.color = "red";
		firstName.focus();
		return false;

	} else if (lastName.value == "") {

		lastName.style.border = "2px solid red";
		lastNameError.textContent = "*";
		lastNameError.style.color = "red";
		lastName.focus();
		return false;

	} 
	
	// this should be in DD MM YYYY format
	// below is what I wrote for a previous project
	/*
	Checks the DOB has format:
		- day: number from 0 to 31
		- either '/' or '-' or ' ' or '.'
		- month: number from 1 to 12
		- either '/' or '-' or ' ' or '.'
		- year: number from 1900 to 2099 or 00 to 99
	*/
	/* 
	regex:
	
	/^([1-9]|0[1-9]|[1-2][0-9]|3[0-1])[- /.]([0-9]|1[0-2]|0[1-9])[- /.]((19|20)\d\d|[0-9]{2,2})$/i
	
	*/
	else if (dob.value == "" || !dob.value.match((/^[0-9]{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])/))) {
		dob.style.border = "2px solid red";
		dobError.textContent = "*";
		dobError.style.color = "red";
		dob.focus();
		return false

	} 
	// passwords should only be validated if the Admin checkbox is checked
	else if (pass.value == "") {
		pass.style.border = "2px solid red";
		passwordError1.textContent = "*";
		passwordError1.style.color = "red";
		pass.focus();
		return false;

	} else if (pass.value.length < 6) {
		pass.style.border = "2px solid red";
		passwordError1.textContent = "Password is 6 characters short";
		passwordError1.style.color = "red";
		pass.focus();
		return false;

	} else if (confPass.value == "") {
		confPass.style.border = "2px solid red";
		passwordError.textContent = "*";
		passwordError.style.color = "red";
		confPass.focus();
		return false;

	} else if (confPass.value.length < 6) {
		confPass.style.border = "2px solid red";
		passwordError.textContent = "Password is 6 characters short";
		passwordError.style.color = "red";
		confPass.focus();
		return false;
	}

	else if (pass.value != confPass.value) {
		confPass.style.border = "1px solid red";
		passwordError.textContent = "Passwords don't match!";
		passwordError.style.color = "red";
		confPass.focus();
		return false;
	}
}

function firstNameVerify() {
	if (firstName.value != "") {
		firstName.style.border = "";
		firstNameError.textContent = "";
		return true;
	}
}

function lastNameVerify() {
	if (lastName.value != "") {
		lastName.style.border = "";
		lastNameError.textContent = "";
		return true;
	}
}

function passwordVerify() {
	if (pass.value != "") {
		pass.style.border = "";
		passwordError1.textContent = "";
		return true;
	}
}

function passwordVerify2() {
	if (confPass.value != "") {
		confPass.style.border = "";
		passwordError.textContent = "";
		return true;
	}
}

function dobVerify() {
	if (dob.value != "") {
		dob.style.border = "";
		dobError.textContent = "";
		return true;
	}
}