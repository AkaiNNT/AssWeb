var data = new Array();
var T = 0;
getProductData();
$('#btn-checkout').click(function(){
	if(T != 0){
		$('#body-bill').text('');
		var n =parseInt($("#table-cart").find("tbody").length);
		for(var i = 0; i< n ;i++){
			var name = $("#table-cart").find("tbody").eq(i).find("th").eq(0).find('a').text();
			var num = parseInt($("#table-cart").find("tbody").eq(i).find("th").eq(1).find('input').val());
			var price1 = parseInt($("#table-cart").find("tbody").eq(i).find("th").eq(2).find("p").text());
			var price2 = parseInt($("#table-cart").find("tbody").eq(i).find("th").eq(3).find("p").text());
			var str = $('<tr><td>'+name+'</td><td>'+num.toString()+' x '+price1.toString()+'</td><td>'+price2.toString()+'</td><tr>');

			$('#body-bill').append(str);
		}
		$('#TongCong').text($("#Order").text());
		$('#CheckoutModal').modal('show');
	}
});
$('#buttonPayment').click(function(){
	var n =parseInt($("#table-cart").find("tbody").length);
	var total = parseInt($("#Order").text());
	$.ajax({	
		url: "../php/createBill.php",
		type: "post",	
		data:{
			'total':total,
		},
		success: function(string){
			for(var i = 0; i< n ;i++){
				var pid = $("#table-cart").find("tbody").eq(i).attr('id');
				var num = parseInt($("#table-cart").find("tbody").eq(i).find("th").eq(1).find('input').val());
				var price = parseInt($("#table-cart").find("tbody").eq(i).find("th").eq(2).find("p").text());
		
				$.ajax({	
					url: "../php/payment.php",
					type: "post",	
					data:{
						'bid':string,
						'pid':pid,
						'num':num,
						'price':price,
					},
					success: function(string){
						$('#CheckoutModal').modal('hide');
						$('#CheckoutModal').on('hidden.bs.modal',function(){
							$('#SuccessPayment').modal('show');
						});
					}
				});
				
				del(pid);
			}
		}
	});
	
});
function getProductData() {
	$.ajax({	
		url: "../php/loadcart.php",
		type: "get",	
		dataType: "text",
		success: function(string){
			data = JSON.parse(string);
			var total = 0;
			var ship = 100000;
			for(var i = 0;i < data.length ; i++){
				total += parseInt(data[i].Price)*parseInt(data[i].Number);
				var str =$('<tbody id="'+data[i].ID+'"><tr><th class="Product-detail"><img src="../img/'+data[i].Type+'/'+data[i].Name+'/1.jpg" alt="" style="height:80px;width:80px;"><a href="../product" style="margin-left:5px;" onclick ="product('+data[i].ID+')">'+data[i].Name+'</a></th><th class="con"><input type="number" name="'+data[i].Number+'" min="1" max="10" value="'+data[i].Number+'" onchange="update('+data[i].ID+')"></th><th class="con"><p>'+data[i].Price+'</p></th><th class="con"><p>'+data[i].Price*data[i].Number+'</p></th><th class="con"><button onclick ="del('+data[i].ID+')"><span class="glyphicon glyphicon-trash"></span></button></th></tr></tbody>');
				$('#table-cart').append(str);
			}
			$("#Total").text(total.toString());
			$("#Shipping").text(ship.toString());
			$("#Order").text((total+ship).toString());
			T = total;
		}
	});
	$.ajax({	
		url: "../php/loadsample.php",
		type: "get",	
		dataType: "text",
		success: function(string){
			var d = JSON.parse(string);
			for(var i = 0;i < d.length ; i++){
				str = $('<div class="col-lg-3 col-sm-3 spd" style="text-align:center;" onclick="product('+d[i].ID+')"><img src="../img/'+d[i].Type+'/'+d[i].Name+'/1.jpg" alt="" style="height:20em;width:100%;"><p>'+d[i].Name+'</p></div>');
				$("#Product-same-show").prepend(str);
			}
		}
	});
}
function product(id){
	$.ajax({
		url: '../php/product-details.php',
		type: "post",
		data:{
			'id':id,
		},
		success: function(str){
			window.location.href = 'http://localhost/AssWeb/product';
		}
	});
}
function del(id){
	$.ajax({
		url: '../php/DelProductInCart.php',
		type: "post",
		data:{
			'id':id,
		},
		success: function(str){
			var num = parseInt($("#"+id.toString()).find("th").eq(1).find("input").val());
			var numstart = parseInt($("#"+id.toString()).find("th").eq(1).find("input").attr('name'));
			var price = parseInt($("#"+id.toString()).find("th").eq(2).find("p").text());
			var ship = parseInt($("#Shipping").text());

			var total = (- numstart)*price + T;
			$("#"+id.toString()).find("th").eq(1).find("input").attr('name',num.toString());
			T = total;
		
			$("#"+id.toString()).find("th").eq(3).find("p").text((num*price).toString());

			$("#Total").text(total.toString());
			$("#Shipping").text(ship.toString());
			$("#Order").text((total+ship).toString());

			$("#"+id.toString()).remove();

		}
	});
}

function update(id){
		var num = parseInt($("#"+id.toString()).find("th").eq(1).find("input").val());
		var numstart = parseInt($("#"+id.toString()).find("th").eq(1).find("input").attr('name'));
		var price = parseInt($("#"+id.toString()).find("th").eq(2).find("p").text());
		var ship = parseInt($("#Shipping").text());

		var total = (num - numstart)*price + T;
		$("#"+id.toString()).find("th").eq(1).find("input").attr('name',num.toString());
		T = total;
		
		$("#"+id.toString()).find("th").eq(3).find("p").text((num*price).toString());
		$("#Total").text(total.toString());
		$("#Shipping").text(ship.toString());
		$("#Order").text((total+ship).toString());

}
function product(id){
	$.ajax({
		url: '../php/product-details.php',
		type: "post",
		data:{
			'id':id,
		},
		success: function(str){
			window.location.href = 'http://localhost/AssWeb/product';
		}
	});
}
