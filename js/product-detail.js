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
			var star = Math.round(parseFloat(data['product'][0].star)*10)/10;
			if(data['product'][0].Type !='Loa') type = 'mp3';
			var str1 = $('<img src="../img/'+type+'/'+data['product'][0].Name+'/1.jpg" alt="" id="show-picture" class="picture-responsive small">');
			var str2 = $('<div class="row-click"><div class="img-click"><img src="../img/'+type+'/'+data['product'][0].Name+'/1.jpg" alt="" onclick="myfunction(this)"></div><div class="img-click img-click1"><img src="../img/'+type+'/'+data['product'][0].Name+'/2.jpg" alt="" onclick="myfunction(this)"></div><div class="img-click img-click1"><img src="../img/'+type+'/'+data['product'][0].Name+'/3.jpg" alt="" onclick="myfunction(this)"></div><div class="img-click img-click1"><img src="../img/'+type+'/'+data['product'][0].Name+'/4.jpg" alt="" onclick="myfunction(this)"></div><div class="clear"></div></div>');
			$("#magnify").append(str1);
			$("#magnify").append(str2);

			$('#star-input').append('<input  value="'+star+'" class="rating" min=0 max=5 step=0.1 data-size="xs" disabled>');
			$('#num-rating').text('  ('+data['product'][0].NumVote+' người đã đánh giá) ')
			$("#Name-product").text(data['product'][0].Name);
			$("#number-id-product").text('No. 0000'+data['product'][0].ID.toString());
			$("#price-product").text(data['product'][0].Price +' VNĐ');
			var str3 = $('<p>'+data['product'][0].Description+'</p>');
			$('#description').append(str3);

			var $input = $('input.rating');
			if ($input.length) {
			    $input.removeClass('rating-loading').addClass('rating-loading').rating();
			}

			getCommentData();
		}
	});
}
function comment(id,name,content,time){
	return $('<div class="user" id="comment'+id+'"><div class="col-md-1"><img src="../img/avatar_login.png" alt="" style="width:90px;height:90px"></div><div class="col-md-11" style="padding-left:20px;"><a href="#" style="font-size:125%;color:red;">'+name+'</a><button type="button" class="close" style="color:red" onclick="delcomment('+id+')">&times;</button><br><p>'+content+'</p><a href="#" class="ac">Like</a><span> - </span><a href="#" class="ac">Reply</a><span> - </span><span><i style="font-size:80%;">'+time+'</i></span></div><div class="clear"></div></div>');
}
function getCommentData(){
	$('#number-comment').text(data.comment.length.toString());
	for (var i = 0; i < data.comment.length; i++) {
		var str = comment(data.comment[i].ID,data.comment[i].Username,data.comment[i].Content,data.comment[i].Time);
		$("#list-comment").append(str);
	}
}
$("#cong").click(function(){
	$("#soluong").val((parseInt($("#soluong").val()) + 1).toString());
});
$("#tru").click(function(){
	if(parseInt($("#soluong").val()) >1){
		$("#soluong").val((parseInt($("#soluong").val()) - 1).toString());
	}
});
$("#buttonRating").click(function(){
	var star = parseInt($('#input-rating').val());
	if(star != 0){
		$.ajax({	
			url: "../php/rating.php",
			type: "post",	
			data:{
				'star':star
			},
			success: function(string){
				$("#RatingForm").modal('hide');
				$('#RatingForm').on('hidden.bs.modal',function(){
					$('#SuccessRating').modal('show');
				});
				$('#SuccessRating').on('shown.bs.modal',function(){
					setTimeout(function(){
					    window.location.href = document.URL;
					}, 1500);
				});
			}
		});
	}

});
$('#Btn-Comment').click(function(){
	var str = $('#mycomment').val();
	
	if(str.length > 0){
		$.ajax({
			url: "../php/comment.php",
			type: "post",
			data:{
				'content':str,
			},
			success: function(string){
				var d = JSON.parse(string);
				var str = comment(d[0].ID,d[0].Username,d[0].content,d[0].Time);
				$("#list-comment").prepend(str);
				$('#number-comment').text((parseInt($('#number-comment').text())+1).toString());
				$("#mycomment").val("");
			}
		});
	}
});

function delcomment(id){
	$.ajax({	
		url: "../php/delcomment.php",
		type: "post",	
		data:{
			'cid':id
		},
		success: function(string){
			if(string == '1'){
				$('#comment'+id.toString()).remove();
			}
		}
	});
}

