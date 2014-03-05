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