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