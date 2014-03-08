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
	var email = pform.email.value;
	var check = $.ajax({
		type: 'GET',
		url: root_url + 'registered/' + email,
		dataType: "json", // data type of response
		async: false,
	});
	check = check.responseJSON;
	check = check.email_registered;
	if(check === true){
		alert("Email is already registered");
	}
	else
		register(pform);
	return !check;
}

function checkLogin(lForm) {
	var email = lForm.email.value;
	var pw = lForm.pwd.value;
	var check = $.ajax({
		type: 'GET',
		url: root_url + 'verify/' + email + '/' + pw,
		dataType: "json", // data type of response
		async: false,
	});
	check = check.responseJSON;
	check = check.registered;
	if(check === false){
		alert("Email and Password Do Not Match");
	}
	return check;
}

function register(rform) {
	$.ajax({
		type: 'POST',
		url: root_url + 'register',
		data: regFormToJSON(),
		async: false,
		success: function(){
			alert('User created successfully');
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('register() error: ' + textStatus + "\nerrorThrown: " + errorThrown);
		}
	});
}

// Helper function to serialize all the form fields into a JSON string
function regFormToJSON() {
	return JSON.stringify({
		"fName": $('#fName').val(), 
		"lName": $('#lName').val(),
		"tele": $('#phone').val(),
		"email": $('#email').val(),
		"pw": $('#pwd').val(),
		"ccp": $('#ccType').val(),
		"ccnum": $('#ccNum').val()
	});
}

function addOrder() {
	var userID = $.ajax({
		type: 'GET',
		url: root_url + 'email_to_id/' + $.cookie('user'),
		dataType: "json", // data type of response
		async: false,
	});
	userID = userID.responseJSON;
	var userId = userID.UserId;
	$.ajax({
		type: 'POST',
		url: root_url + 'add_order',
		data: orderFormToJSON(userId),
		async: false,
		success: function(){
			alert('Order created successfully');
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('addOrder() error: ' + textStatus + "\nerrorThrown: " + errorThrown);
		}
	});
	for(var i = 1; i <= $.cookie('orderitemnum'); i++) {
		var orderId = addOrderItem(i);
		var tacoFixins = ($.cookie('OrderItem'+i)).split(",");
		for(var j = 1; j <= tacoFixins.length - 1; j++) {
			alert(orderId + " " + tacoFixins[j]);
			addOrderItemDetail(orderId, tacoFixins[j]);
		}
	}
}

function orderFormToJSON(data) {
	var now = new Date();
  	var date = [ now.getFullYear(), now.getMonth() + 1, now.getDate(),  ];
  	var time = [ now.getHours(), now.getMinutes(), now.getSeconds() ];
  	for ( var i = 1; i < 3; i++ ) {
  		if ( time[i] < 10 ) {
			time[i] = "0" + time[i];
    		}
  	}
  	for ( var i = 1; i < 3; i++ ) {
  		if ( date[i] < 10 ) {
      			date[i] = "0" + date[i];
    		}
  	}
 	// Return the formatted string
  	var timestamp = date.join("-") + " " + time.join(":");
	$.cookie('recentOrderTimestamp', timestamp);
	return JSON.stringify({
		"UserId": data,
		"date": timestamp,
		"total": $.cookie('total')
	});
}

function addOrderItem(item) {
	var orderID = $.ajax({
		type: 'GET',
		url: root_url + 'time_to_orderid/' + $.cookie('recentOrderTimestamp'),
		dataType: "json", // data type of response
		async: false,
	});
	orderID = orderID.responseJSON;
	var orderId = orderID.OrderId;
	$.ajax({
		type: 'POST',
		url: root_url + 'add_order_item',
		data: orderItemsToJSON(orderId, item),
		async: false,
		success: function(){
			alert('Order Item created successfully');
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('addOrderItem() error: ' + textStatus + "\nerrorThrown: " + errorThrown);
		}
	});
	return orderId;
}

function orderItemsToJSON(data, item) {
	var quantity = $.cookie('OrderItem' + item)[0];
	return JSON.stringify({
		"OrderId": data,
		"quantity": quantity
	});
}

function addOrderItemDetail(orderId, fixinName) {
	var orderItemID = $.ajax({
		type: 'GET',
		url: root_url + 'orderId_to_orderItemId/' + orderId,
		dataType: "json", // data type of response
		async: false,
	});
	orderItemID = orderItemID.responseJSON;
	var orderItemId = orderItemID.OrderItemId;
	var fixinID = $.ajax({
		type: 'GET',
		url: root_url + 'fixinName_to_Id/' + fixinName,
		dataType: "json", // data type of response
		async: false,
	});
	fixinID = fixinID.responseJSON;
	var fixinId = fixinID.TacoFixinId;

	$.ajax({
		type: 'POST',
		url: root_url + 'add_order_item_detail',
		data: orderItemDetailsToJSON(orderItemId, fixinId),
		async: false,
		success: function(){
			alert('Order Item Details created successfully');
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('addOrderItemDetail() error: ' + textStatus + "\nerrorThrown: " + errorThrown);
		}
	});
}

function orderItemDetailsToJSON(orderItemId, fixinId) {
	alert(JSON.stringify({
		"OrderItemId": orderItemId,
		"fixinId": fixinId
	}));
return JSON.stringify({
		"OrderItemId": orderItemId,
		"fixinId": fixinId
	});
}
