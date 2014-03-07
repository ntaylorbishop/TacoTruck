var root_url = "http://localhost/TacoTruck/api/";

// JavaScript Document
$(document).ready(function() {
    var resolution = $(window).width();
	resolution -= 800;
	resolution /= 2;
	$("#topBar").css('left',resolution);
	$("#content").css('left',resolution);
	resolution += 220;
	$("#title").css('padding-left',resolution);

});


//Front-end validation
function checkPassword(pform) {
	var str = pform.pwd.value;
	if(str.length < 8) {
		alert("Password Must be at Least 8 Characters");
		pform.pwd.focus();
		return false;
	}
}

function checkRegister(pform) {
	var str = pform.pwd.value;
	var str1 = pform.pwdC.value;
	if (str.length < 8) {
		alert("Password Less than 8 Characters");
		pform.pwd.focus();
		return false;
	}else if(str != str1) {
		alert("Password and Confirm Password Do Not Match");
		pform.pwd.focus();
		return false;
	}
}

//Back-end validation
function checkLogin(lForm) {
	var email = lForm.email.value;
	var pw = lForm.pwd.value;
	alert("test");
	var check = $.ajax({
		type: 'GET',
		url: root_url + 'verify/' + email + '/' + pw,
		dataType: "json", // data type of response
		async: false,
	});
	alert("test2");
	alert(JSON.stringify(check));
	check = check.responseJSON;
	/*check = check.registered;
	if(check === false){
		alert("Email and Password Do Not Match");
	}
	return check;*/
}
