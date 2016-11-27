
var loading  = false; 
var data = new Array();
var j = 6;
var typesearch = 0;
// 0 - bình thường  1 - giá gảm dần  2-giá tắng dần  3-sao tăng dần  4-sao giảm dần
load();
function load(){
	$.ajax({	
		url: "../php/loadpage.php",
		type: "get",	
		dataType: "text",
		success: function(string){
			data = JSON.parse(string);
			
			
			$("#num-show").append('Có tất cả '+data.loa[typesearch].length+' sản phẩm!')
			for (var i = 0; i < 6; i++) {
				var star = Math.round(parseFloat(data.loa[typesearch][i].star)*10)/10;
				var str = $('<div class="item  col-xs-4 col-lg-4"><div class="thumbnail"><img class="group list-group-image" src="../img/loa/'+data.loa[typesearch][i].Name+'/1.jpg" alt="" ><div class="caption"><h5 class="group inner list-group-item-heading">'+data.loa[typesearch][i].Name+'</h5><div class="H"><div class="col-md-5"><label class="lead">'+data.loa[typesearch][i].Price+' VNĐ</label></div><div class="col-md-7"><input value="'+star+'" type="number" class="rating" min=0 max=5 step=0.1 data-size="xs" disabled></div><div class="clear"></div></div><div class="row"><div class="col-xs-12 col-md-6"><button class="btn btn-success" data-toggle="modal" onclick="addcart('+data.loa[typesearch][i].ID+',1)">Add to cart</button></div><div class="col-xs-12 col-md-6"><button class="btn btn-success button-product" onclick="product('+data.loa[typesearch][i].ID+')">Details</button></div></div></div></div></div>');
				$("#products").append(str);
				var $input = $('input.rating');
			    if ($input.length) {
			        $input.removeClass('rating-loading').addClass('rating-loading').rating();
			    }
			}
		}
	});
}


$(window).scroll(function() { //detect page scroll
	if($(window).scrollTop() + $(window).height() >= $(document).height()) { //if user scrolled to bottom of the page
		load_contents(); //load content	
	}
});	
$('#search-price').click(function(){
	if(typesearch ==1) typesearch = 2;
	else typesearch = 1;
	$('#products').text("");
	j = 0;
});
$('#search-rating').click(function(){
	if(typesearch ==4) typesearch = 3;
	else typesearch = 4;
	$('#products').text("");
	j = 0;
});
$('#search-buy').click(function(){
	if(typesearch ==6) typesearch = 5;
	else typesearch = 6;
	$('#products').text("");
	j = 0;
});

function load_contents(){
    if(loading == false){
    	if(j <= data.loa[typesearch].length){
			loading = true;  //set loading flag on
			$('.loading-info').show();
			var n =3;
			if(j+3 > data.loa[typesearch].length) n = data.loa[typesearch].length - j;
			for (var i = j; i < j+n; i++) {
				var star = Math.round(parseFloat(data.loa[typesearch][i].star)*10)/10;
				var str = $('<div class="item  col-xs-4 col-lg-4"><div class="thumbnail"><img class="group list-group-image" src="../img/loa/'+data.loa[typesearch][i].Name+'/1.jpg" alt="" ><div class="caption"><h5 class="group inner list-group-item-heading">'+data.loa[typesearch][i].Name+'</h5><div class="H"><div class="col-md-5"><label class="lead">'+data.loa[typesearch][i].Price+' VNĐ</label></div><div class="col-md-7"><input value="'+star+'" type="number" class="rating" min=0 max=5 step=0.1 data-size="xs" disabled></div><div class="clear"></div></div><div class="row"><div class="col-xs-12 col-md-6"><button class="btn btn-success" data-toggle="modal" onclick="addcart('+data.loa[typesearch][i].ID+',1)">Add to cart</button></div><div class="col-xs-12 col-md-6"><button class="btn btn-success button-product" onclick="product('+data.loa[typesearch][i].ID+')">Details</button></div></div></div></div></div>');
				$("#products").append(str);
				var $input = $('input.rating');
			    if ($input.length) {
			        $input.removeClass('rating-loading').addClass('rating-loading').rating();
			    }
			}
			$('.loading-info').hide();
			loading = false;
			j = j + n;
		}
		else{
			$('.loading-info').hide();

		}
	}
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

function addcart(pid,num){
	$.ajax({
		url: '../php/addcart.php',
		type: "post",
		data:{
			'productID':pid,
			'num':num
		},
		success: function(str){
			if(parseInt(str)==1) {
                $('#Tinnhan').css('visibility','visible');
                $('#Tinnhan').text((parseInt($('#Tinnhan').text())+1).toString());
                $("#success").modal('show');
            }
			else if(parseInt(str)==0) $("#error").modal('show');
			else $("#LoginModal").modal('show');
		}
	});
}
    


