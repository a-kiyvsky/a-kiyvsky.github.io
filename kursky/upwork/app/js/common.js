function validatePasswords() {
	var password = document.getElementById('password');
	var	passwordConfirm = document.getElementById('passwordConfirm');
	if(passwordConfirm.value != password.value && passwordConfirm != '') {
		passwordConfirm.setCustomValidity("Passwords Don't Match");
		passwordConfirm.classList.add('error');
	} else {
		passwordConfirm.setCustomValidity('');
		passwordConfirm.classList.remove('error');
	}
}

function validateEmail() {
	var email = document.getElementById('email');

	var re = /\S+@\S+\.\S+/;
	console.log(re.test(email.value));
	if(email.value != '') {

	if( re.test(email.value) && email !="") { 
			email.setCustomValidity("");
			email.classList.remove('error');
		 } else {
			email.setCustomValidity("Enter valid email");
			email.classList.add('error')
		}
	} else {
		email.setCustomValidity("");
		email.classList.remove('error');
	}
}