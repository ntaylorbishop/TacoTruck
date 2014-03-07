var root_url = "http://localhost/TacoTruck/api/";
var build_url = "http://localhost/TacoTruck/buildTaco.php";

$(document).ready(function() {
	var check = $.ajax({
		type: 'GET',
		url: root_url + 'recent_order/' + $.cookie('user'),
		dataType: "json", // data type of response
		async: false,
	});
	check = check.responseJSON;
	check = check.recent_order;

	var date = check.date_time;
	var price = check.total;
	
	check = check.tacos;

	var numTacos = Object.keys(check).length;
	if(numTacos > 0){
	var tacoSpec;
	var numIngredients;
	var qty;
	
	$("#recentOrder tr:last").after("<tr><td>-</td><td>" + date + "</td><td>" + price + "</td></tr>");


	for(var i = 0; i<numTacos; i++) {
		qty = check[i].Quantity;
		tacoSpec = check[i].TacoFixins;
		numIngredients = Object.keys(tacoSpec).length;
		$("#recentOrderDetails tr:last").after("<tr><td class=\"center\">" + qty + "</td><td>");

		for(var j = 0; j<numIngredients; j++) {
			if (j == 0) {
				$("#recentOrderDetails td:last").after(tacoSpec[j].name + "");
			} else {
				$("#recentOrderDetails td:last").after(tacoSpec[j].name + ", ");
			}
		}
		$("#recentOrderDetails tr:last").after("</td></tr>");
	}
	$(".center").css('text-align', 'center');
	} else {
		window.location.href = build_url;
	}

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
