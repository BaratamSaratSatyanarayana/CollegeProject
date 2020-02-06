var Password = document.forms['vform']['Password'];
var Confirm_Password = document.forms['vform']['Confirm_Password'];
var phonenum = document.forms['vform']['phonenum'];
// SELECTING ALL ERROR DISPLAY ELEMENTS
var password_error = document.getElementById('password_error');
var phone_error = document.getElementById('phone_error');
// SETTING ALL EVENT LISTENERS
Password.addEventListener('blur', passwordVerify, true);
phonenum.addEventListener('blur', phoneVerify, true);
// validation function
function Validate() { 
  // check if the two passwords match
  if (Password.value != Confirm_Password.value) {
    Password.style.border = "1px solid red";
    document.getElementById('pass_confirm_div').style.color = "red";
    Confirm_Password.style.border = "1px solid red";
    password_error.innerHTML = "**Password and Confirm Password does not match**";
    return false;
  }

  if (phonenum.value.length != 10) {
  	phonenum.style.border = "1px solid red";
  	document.getElementById('phone_div').style.color = "red";
	phonenum.style.border="1px solid red";
  	phone_error.innerHTML = "**Number length must be 10**";
  	return false;
  }
}
// event handler functions
function passwordVerify() {
  if (Password.value === Confirm_Password.value) {
  	Password.style.border = "1px solid #5e6e66";
  	document.getElementById('pass_confirm_div').style.color = "#5e6e66";
  	password_error.innerHTML = "";
  	return true;
  }
}

function phoneVerify() {
  if (phonenum.value.length === 10) {
  	phonenum.style.border = "1px solid #5e6e66";
  	document.getElementById('phone_div').style.color = "#5e6e66";
  	phone_error.innerHTML = "";
  	return true;
  }
}