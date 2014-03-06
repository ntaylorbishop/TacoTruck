var root_url = "http://localhost/TacoTruck/api/menu/";

$(document).ready(function() {
	var type = $.ajax({
		type: 'GET',
		url: root_url + "type",
		dataType: "json",
		async: false,
	});
	alert(JSON.stringify(type));
	var type2 = type.responseJSON;
	var type3 = $("#accordion");
	type3.append("<h3 id=\"type\">Filling</h3><div>");
	for(var i = 0; i < 4; i++){
		$("#type").append("<input type=\"radio\" name=\"filling\" value=\"" + type2[i].name + "\" />" + type2[i].name + "<br />" );
	}
	/*var tortillas = $.ajax({
		type: 'GET',
		url: root_url +,
		dataType: "json",
		async: false,
	});
	var rice = $.ajax({
		type: 'GET',
		url: root_url +,
		dataType: "json",
		async: false,
	});
	var cheese = $.ajax({
		type: 'GET',
		url: root_url +,
		dataType: "json",
		async: false,
	});
	var beans = $.ajax({
		type: 'GET',
		url: root_url +,
		dataType: "json",
		async: false,
	});
	var sauces = $.ajax({
		type: 'GET',
		url: root_url +,
		dataType: "json",
		async: false,
	});*/

	$("#accordion").accordion();
});
