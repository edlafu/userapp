//check if username is empty an shows an error
function validate_username(){
	var username = document.getElementById("username").value;
	if (username == "") {
		document.getElementById("message_username").innerHTML = "username is necessary";
	}else{
		document.getElementById("message_username").innerHTML = "";
		return true;
	}
}

//check if password is empty an shows an error
function validate_password(){
	var pass = document.getElementById("password").value;
	if (pass == "") {
		document.getElementById("message_password").innerHTML = "password is necessary";
	}else{
		document.getElementById("message_password").innerHTML = "";
		return true;
	}
}

//check the fields and return true or false. If true, the form will be submitted
function validate_login() {
	if (validate_username() && validate_password()){
		return true;
	}else{
		return false;
	}
}
