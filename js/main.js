// JavaScript Document
$(document).ready(function() {
    var resolution = $(window).width();
	resolution -= 800;
	resolution /= 2;
	$("#topBar").css('left',resolution);
	$("#content").css('left',resolution);
	resolution += 220;
	$("#title").css('padding-left',resolution);
	$("#accordion").accordion();

});

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