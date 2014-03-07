var root_url = "http://localhost/TacoTruck/api/menu/";

$(document).ready(function() {
	var type = $.ajax({
		type: 'GET',
		url: root_url + "type",
		dataType: "json",
		async: false,
	});
	var type2 = type.responseJSON;
	var type3 = $("#accordion");
	type3.append("<h3 id=\"type\">Filling</h3>");
	type3.append("<div id=\"typeFill\"></div>");

	for(var i = 0; i < 4; i++){
		$("#typeFill").append("<input type=\"radio\" name=\"filling\" value=\"" + type2[i].name + "\" class=\"filling\"/>" + type2[i].name + "<br />" );
	}
	
	var tortillas = $.ajax({
		type: 'GET',
		url: root_url + "tortillas",
		dataType: "json",
		async: false,
	});
	var type2 = tortillas.responseJSON;
	var type3 = $("#accordion");
	type3.append("<h3 id=\"tortillas\">Tortillas</h3>");
	type3.append("<div id=\"tortFill\"></div>");

	for(var i = 0; i < 4; i++){
		$("#tortFill").append("<input type=\"radio\" name=\"tortillas\" value=\"" + type2[i].name + "\" />" + type2[i].name + "<br />" );
	}
	
	var rice = $.ajax({
		type: 'GET',
		url: root_url + "rice",
		dataType: "json",
		async: false,
	});
	var type2 = rice.responseJSON;
	var type3 = $("#accordion");
	type3.append("<h3 id=\"rice\">Rice</h3>");
	type3.append("<div id=\"riceFill\"></div>");

	for(var i = 0; i < 2; i++){
		$("#riceFill").append("<input type=\"radio\" name=\"rice\" value=\"" + type2[i].name + "\" />" + type2[i].name + "<br />" );
	}

	var cheese = $.ajax({
		type: 'GET',
		url: root_url + "cheese",
		dataType: "json",
		async: false,
	});
	var type2 = cheese.responseJSON;
	var type3 = $("#accordion");
	type3.append("<h3 id=\"cheese\">Cheese</h3>");
	type3.append("<div id=\"cheeseFill\"></div>");

	for(var i = 0; i < 3; i++){
		$("#cheeseFill").append("<input type=\"radio\" name=\"cheese\" value=\"" + type2[i].name + "\" />" + type2[i].name + "<br />" );
	}

	var beans = $.ajax({
		type: 'GET',
		url: root_url + "beans",
		dataType: "json",
		async: false,
	});
	var type2 = beans.responseJSON;
	var type3 = $("#accordion");
	type3.append("<h3 id=\"beans\">Beans</h3>");
	type3.append("<div id=\"beansFill\"></div>");

	for(var i = 0; i < 3; i++){
		$("#beansFill").append("<input type=\"radio\" name=\"beans\" value=\"" + type2[i].name + "\" />" + type2[i].name + "<br />" );
	}

	var sauces = $.ajax({
		type: 'GET',
		url: root_url + "sauces",
		dataType: "json",
		async: false,
	});
	var type2 = sauces.responseJSON;
	var type3 = $("#accordion");
	type3.append("<h3 id=\"sauces\">Sauces</h3>");
	type3.append("<div id=\"saucesFill\"></div>");

	for(var i = 0; i < 12; i++){
		$("#saucesFill").append("<input type=\"checkbox\" name=\"sauces\" value=\"" + type2[i].name + "\" />" + type2[i].name + "<br />" );
	}

	var vegetables = $.ajax({
		type: 'GET',
		url: root_url + "vegetables",
		dataType: "json",
		async: false,
	});
	var type2 = vegetables.responseJSON;
	var type3 = $("#accordion");
	type3.append("<h3 id=\"veggies\">Vegetables</h3>");
	type3.append("<div id=\"vegFill\"></div>");

	for(var i = 0; i < 2; i++){
		$("#vegFill").append("<input type=\"checkbox\" name=\"veggies\" value=\"" + type2[i].name + "\" />" + type2[i].name + "<br />" );
	}

	$("#accordion").accordion({
		event: "click hoverintent"
	});

	$("#accordion div").css('color', '#000');

});
