var data = new Array();
var T = 0;
getHomeData();
function getHomeData() {
	$.ajax({	
		url: "php/loadhome.php",
		type: "get",	
		dataType: "text",
		success: function(string){
			data = JSON.parse(string);
			var i = 0;
			var str1 = $('<div class="item active item1" onclick="product('+data[0][i].ID+')"><div class="col-md-4"><img src="img/'+data[0][i].Type+'/'+data[0][i].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="col-md-4"><img src="img/'+data[0][i+1].Type+'/'+data[0][i+1].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="col-md-4"><img src="img/'+data[0][i+2].Type+'/'+data[0][i+2].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="carousel-caption">...</div></div>');
			$('#list-product-home-0').append(str1);
			var str2 = $('<div class="item active item1" onclick="product('+data[1][i].ID+')"><div class="col-md-4"><img src="img/'+data[1][i].Type+'/'+data[1][i].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="col-md-4"><img src="img/'+data[1][i+1].Type+'/'+data[1][i+1].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="col-md-4"><img src="img/'+data[1][i+2].Type+'/'+data[1][i+2].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="carousel-caption">...</div></div>');
			$('#list-product-home-1').append(str2);
			var str3 = $('<div class="item active item1" onclick="product('+data[2][i].ID+')"><div class="col-md-4"><img src="img/'+data[2][i].Type+'/'+data[2][i].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="col-md-4"><img src="img/'+data[2][i+1].Type+'/'+data[2][i+1].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="col-md-4"><img src="img/'+data[2][i+2].Type+'/'+data[2][i+2].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="carousel-caption">...</div></div>');
			$('#list-product-home-2').append(str3);
			var str4 = $('<div class="item active item1" onclick="product('+data[3][i].ID+')"><div class="col-md-4"><img src="img/'+data[3][i].Type+'/'+data[3][i].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="col-md-4"><img src="img/'+data[3][i+1].Type+'/'+data[3][i+1].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="col-md-4"><img src="img/'+data[3][i+2].Type+'/'+data[3][i+2].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="carousel-caption">...</div></div>');
			$('#list-product-home-3').append(str4);
			for(var i = 1;i < data[0].length-2 ; i++){
				var str1 = $('<div class="item item1" onclick="product('+data[0][i].ID+')"><div class="col-md-4"><img src="img/'+data[0][i].Type+'/'+data[0][i].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="col-md-4"><img src="img/'+data[0][i+1].Type+'/'+data[0][i+1].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="col-md-4"><img src="img/'+data[0][i+2].Type+'/'+data[0][i+2].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="carousel-caption">...</div></div>');
				$('#list-product-home-0').append(str1);
				var str2 = $('<div class="item item1" onclick="product('+data[1][i].ID+')"><div class="col-md-4"><img src="img/'+data[1][i].Type+'/'+data[1][i].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="col-md-4"><img src="img/'+data[1][i+1].Type+'/'+data[1][i+1].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="col-md-4"><img src="img/'+data[1][i+2].Type+'/'+data[1][i+2].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="carousel-caption">...</div></div>');
				$('#list-product-home-1').append(str2);
				var str3 = $('<div class="item item1" onclick="product('+data[2][i].ID+')"><div class="col-md-4"><img src="img/'+data[2][i].Type+'/'+data[2][i].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="col-md-4"><img src="img/'+data[2][i+1].Type+'/'+data[2][i+1].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="col-md-4"><img src="img/'+data[2][i+2].Type+'/'+data[2][i+2].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="carousel-caption">...</div></div>');
				$('#list-product-home-2').append(str3);
				var str4 = $('<div class="item item1" onclick="product('+data[3][i].ID+')"><div class="col-md-4"><img src="img/'+data[3][i].Type+'/'+data[3][i].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="col-md-4"><img src="img/'+data[3][i+1].Type+'/'+data[3][i+1].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="col-md-4"><img src="img/'+data[3][i+2].Type+'/'+data[3][i+2].Name+'/1.jpg" class="img-responsive" alt=""></div><div class="carousel-caption">...</div></div>');
				$('#list-product-home-3').append(str4);
			}
		}
	});
}
function product(id){
	$.ajax({
		url: 'php/product-details.php',
		type: "post",
		data:{
			'id':id,
		},
		success: function(str){
			window.location.href = 'http://localhost/AssWeb/product';
		}
	});
}
