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
	for(var i = 0; i < 4; i++) {
		alert(type2[i].name);
	}
	var type2 = $("#accordion");
	type2.append("<h3 id=\"" + type.responseJSON + "\">" + type.responseJSON + "</h3>");

	for(var i = 0; i < 4; i++){
		$("#"+type.responseJSON).append("<p>Test</p>" );
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
});
