$.getJSON("../api/api.php", function( data ) { 
var container = document.getElementById("data");
for (var i = 0; i < data.length; i++) {
var div = document.createElement("div");
    div.innerHTML = 'Name: ' + data[i].firstname + ' ' + data[i].lastname + ' Address: ' + data[i].address + ' Company: ' + data[i].company;
	container.appendChild(div);
  }
}	
);

$(document).ready(function() {
	$('#downloadcustomers').click(function(e) {
		window.open("../api/customers.php")
	});
	$('#downloadcompanies').click(function(e) {
		window.open("../api/company.php")
	});
});


