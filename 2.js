function is_name_valid(name) {

  var uppercaseRe = /[A-Z]/g;
  
	if(name.length >= 7 && name.match(uppercaseRe).length == name.length) {
    	return true;
    }
    return false;
}

function is_password_valid(password) {

	var lowercaseRe = /[a-z]/g;
  
  var numberRe = /[0-9]/g;

  var specialRe = /[*]/g;

  if(password.length == 7
     && numberRe.test(password)
     && specialRe.test(password)
     && lowercaseRe.test(password)) {
     return true;
  }

  return false;
}


console.log(is_name_valid('ARKDEMY') ? 'true' : 'false'); // benar
console.log(is_name_valid('GALIH') ? 'true' : 'false'); // salah
console.log(is_password_valid('111*sss') ? 'true' : 'false'); // benar
console.log(is_password_valid('1234*try') ? 'true' : 'false'); // salah
