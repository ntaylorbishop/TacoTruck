var root_url = "http://localhost/TacoTruck/api/";

$(document).ready(function() {
	alert("test");
	var check = $.ajax({
		type: 'GET',
		url: root_url + 'recent_order/BobbyDDickerson@armyspy.com',
		dataType: "json", // data type of response
		async: false,
	});
	check = check.responseJSON;
	check = check.recent_order;
	alert(JSON.stringify(check));

	var date = check.date_time;
	var price = check.total;
	
	check = check.tacos;

	var numTacos = Object.keys(check).length;
	var tacoSpec = check[0].TacoFixins;
	alert(JSON.stringify(tacoSpec));
	var numIngredients;
	var qty;
	
	


	for(var i = 0; i<numTacos; i++) {
		qty = check[i].Quantity;
		tacoSpec = check[i].TacoFixins;
		numIngredients = Object.keys(tacoSpec).length;
		alert(numIngredients);
		$("#recentOrderDetails tr:last").after("<tr><td>" + qty + "</td><td>");

		for(var j = 0; j<numIngredients; j++) {
			//alert(tacoSpec[j].name);
			$("#recentOrderDetails td:last").after(tacoSpec[j].name + " ");
			//alert("test");
		}
		$("#recentOrderDetails tr:last").after("</td></tr>");
	}

	check = check.recent_order;
	var price = check.Total;
	var date = check.Dates;
	var orderNo = check.OrderId;
	$("#recentOrder").append("<tr><td>" + orderNo + "</td><td>" + date + "</td><td>" + price + "</td></tr>");
});

function count(obj) {
   var count=0;
   for(var prop in obj) {
      if (obj.hasOwnProperty(prop)) {
         ++count;
      }
   }
   return count;
}
