var data = new Array();
getProductData();
function getProductData() {
	$.ajax({	
		url: "../php/detail.php",
		type: "get",	
		dataType: "text",
		success: function(string){
			data = JSON.parse(string);
			var type = 'Loa';
			if(data[0].Type !='Loa') type = 'mp3';
			var str1 = $('<img src="../img/'+type+'/'+data[0].Name+'/1.jpg" alt="" id="show-picture" class="picture-responsive small">');
			var str2 = $('<div class="row-click"><div class="img-click"><img src="../img/'+type+'/'+data[0].Name+'/1.jpg" alt=""></div><div class="img-click img-click1"><img src="../img/'+type+'/'+data[0].Name+'/2.jpg" alt="" onclick="myfunction(this)"></div><div class="img-click img-click1"><img src="../img/'+type+'/'+data[0].Name+'/3.jpg" alt="" onclick="myfunction(this)"></div><div class="img-click img-click1"><img src="../img/'+type+'/'+data[0].Name+'/4.jpg" alt="" onclick="myfunction(this)"></div><div class="clear"></div></div>');
			$("#magnify").append(str1);
			$("#magnify").append(str2);
			$("#Name-product").text(data[0].Name);
			$("#number-id-product").text('No. 0000'+data[0].ID.toString());
			$("#price-product").text(data[0].Price +' VNĐ');
			var str3 = $('<p>'+data[0].Description+'</p>');
			$('#description').append(str3);
		}
	});
}
$("#cong").click(function(){
	$("#soluong").val((parseInt($("#soluong").val()) + 1).toString());
});
$("#tru").click(function(){
	if(parseInt($("#soluong").val()) >1){
		$("#soluong").val((parseInt($("#soluong").val()) - 1).toString());
	}
});
