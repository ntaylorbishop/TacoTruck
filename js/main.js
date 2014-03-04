// JavaScript Document
$(document).ready(function() {
    var resolution = $(window).width();
	resolution -= 800;
	resolution /= 2;
	$("#topBar").css('left',resolution);
	resolution += 25;
	$("#content").css('left',resolution);
	
	$("#accordion").accordion();
});


$(function() {
    $("#accordion").accordion();
});