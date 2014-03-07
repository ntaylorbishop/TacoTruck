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
	var orderitemnum = 0;
	$.cookie('orderitemnum', orderitemnum);
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
		$("#tortFill").append("<input type=\"radio\" name=\"tortillas\" value=\"" + type2[i].name + "\" class=\"tortilla\"/>" + type2[i].name + "<br />" );
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
		$("#riceFill").append("<input type=\"radio\" name=\"rice\" value=\"" + type2[i].name + "\" class=\"rice\"/>" + type2[i].name + "<br />" );
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
		$("#cheeseFill").append("<input type=\"radio\" name=\"cheese\" value=\"" + type2[i].name + "\" class=\"cheese\"/>" + type2[i].name + "<br />" );
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
		$("#beansFill").append("<input type=\"radio\" name=\"beans\" value=\"" + type2[i].name + "\" class=\"beans\"/>" + type2[i].name + "<br />" );
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
	
	var ingredients = document.getElementsByTagName('input');
	var fillings = document.getElementsByClassName('filling');
	var tortillas = document.getElementsByClassName('tortilla');
	var rice = document.getElementsByClassName('rice');
	var cheese = document.getElementsByClassName('cheese');
	var beans = document.getElementsByClassName('beans');

	for(var i = 0; i < fillings.length; i++) {
		//alert(fillings[i].value);
	}
	

	for(var i = 0; i < ingredients.length-3; i++) {
		ingredients[i].addEventListener('click', selected, false);
	}

	function selected(event) {
		var type = event.target.parentElement;
		type = type.id;
		if(type === 'typeFill'){
			for(var i = 0; i < fillings.length; i++) {
				fillings[i].className = "filling";
			}
		}
		if(type === 'tortFill'){
			for(var i = 0; i < tortillas.length; i++) {
				tortillas[i].className = "tortilla";
			}
		}
		if(type === 'riceFill'){
			for(var i = 0; i < rice.length; i++) {
				rice[i].className = "rice";
			}
		}
		if(type === 'cheeseFill'){
			for(var i = 0; i < cheese.length; i++) {
				cheese[i].className = "cheese";
			}
		}
		if(type === 'beansFill'){
			for(var i = 0; i < beans.length; i++) {
				beans[i].className = "beans";
			}
		}
		event.target.className += " selected";
	}

	$("#add").click(function(event) {
		var orderItemDetails = new Array();
		var quantity = document.getElementById("quan");
		quantity = quantity.options[quantity.selectedIndex].value;
		orderItemDetails[0] = quantity;
		tempNum = $.cookie('orderitemnum');
		tempNum++;
		$.cookie('orderitemnum', tempNum);
		alert($.cookie('orderitemnum'));
		var counter = 1;
		for(var i = 0; i < ingredients.length; i++) {
			if(ingredients[i].classList.contains('selected')) {
				orderItemDetails[counter] = ingredients[i].value
				counter++;
				alert(ingredients[i].value);
			}
		}
		numString = $.cookie('orderitemnum');
		$.cookie('OrderItem' + numString, orderItemDetails);
		for(var i = 1; i <= $.cookie('orderitemnum'); i++) {
			
			alert($.cookie('OrderItem' + i));
		}
	});

});

function makeTaco() {
	
}
