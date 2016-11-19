var data = new Array();
getProductData();
function getProductData() {
	$.ajax({	
		url: "../php/loadcart.php",
		type: "get",	
		dataType: "text",
		success: function(string){
			data = JSON.parse(string);
			for(var i = 0;i < data.length ; i++){
	
				var str =$('<tbody id="'+data[i].ID+'"><tr><th class="Product-detail"><img src="../img/'+data[i].Type+'/'+data[i].Name+'/1.jpg" alt="" style="height:80px;width:80px;"><a href="../product" style="margin-left:5px;" onclick ="product('+data[i].ID+')">'+data[i].Name+'</a></th><th class="con"><input type="number" name="quantity" min="1" max="10" value="'+data[i].Number+'"></th><th class="con"><p>'+data[i].Price+'</p></th><th class="con"><p>'+data[i].Price*data[i].Number+'</p></th><th class="con"><button onclick ="del('+data[i].ID+')"><span class="glyphicon glyphicon-trash"></span></button></th></tr></tbody>');
				$('#table-cart').append(str);
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
			$("#"+id.toString()).remove();
		}
	});
}
