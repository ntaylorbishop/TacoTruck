var root_url = "http://localhost/TacoTruck/api/";

$(document).ready(function() {
	var check = $.ajax({
		type: 'GET',
		url: root_url + 'recent_order/1',
		dataType: "json", // data type of response
		async: false,
	});
	check = check.responseJSON;
	check = check.recent_order;
	var price = check.Total;
	var date = check.Dates;
	var orderNo = check.OrderId;
	$("#recentOrder").append("<tr><td>" + orderNo + "</td><td>" + date + "</td><td>" + price + "</td></tr>");
});
