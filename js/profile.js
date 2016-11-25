var data = new Array();
loadprofile();

$('#apassword').click(function(){
	$('#password').removeAttr('disabled');
	$('#setaccount').show();
});
$('#afullname').click(function(){
	$('#fullname').removeAttr('disabled');
	$('#setaccount').show();
});
$('#aemail').click(function(){
	$('#email').removeAttr('disabled');
	$('#setaccount').show();
});
$('#aaddress').click(function(){
	$('#address').removeAttr('disabled');
	$('#setaccount').show();
});
$('#setaccount').click(function(){
	var p = $('#password').val();
	var e = $('#email').val();
	var a = $('#address').val();
	var f = $('#fullname').val();
	console.log(p +" + "+e+" + "+a+" + "+f);
	$.ajax({	
		url: "../php/UpdateProfile.php",
		type: "post",
		data:{
			'password':p,
			'email':e,
			'address':a,
			'fullname':f
		},
		success:function(string){
			$('#SuccessUpdate').modal('show');
			$('#setaccount').hide();

			$('#password').attr('disabled','disabled');
			
		
			$('#fullname').attr('disabled','disabled');
			
		
			$('#email').attr('disabled','disabled');
			
		
			$('#address').attr('disabled','disabled');
		}
	});
});
function loadprofile() {
	$('#setaccount').hide();
	$.ajax({	
		url: "../php/profile.php",
		type: "get",	
		dataType: "text",
		success: function(string){
			data = JSON.parse(string);
			$("#name-title").text(data.user[0].FullName);
			$("#username").val(data.user[0].Username);
			$("#password").val(data.user[0].Password);
			$('#fullname').val(data.user[0].FullName);
			$('#birthday').val(data.user[0].Birthday);
			$('#email').val(data.user[0].Email);
			$('#address').val(data.user[0].Address);
			for (var i = 0; i < data.bill.length; i++) {
				var str = $('<tr><th><a onclick="loadbill('+data.bill[i].ID+')">HD0000'+data.bill[i].ID+'</a></th><th>'+data.bill[i].Date+'</th></tr>');
				$('#bill-history').append(str);
			}
			
		}
	});
}
function loadbill(id){
	$.ajax({
		url:'../php/loadbill.php',
		type: "post",
		data:{
			'bid':id
		},
		success: function(string){
			var d = JSON.parse(string);
			$('#body-bill').text('');
			var n = d.length;
			for(var i = 0; i< n ;i++){
				var name = d[i].Name;
				var num = parseInt(d[i].Num);
				var price1 = parseInt(d[i].Price);
				var price2 = num * price1;
				var str = $('<tr><td>'+name+'</td><td>'+num.toString()+' x '+price1.toString()+'</td><td>'+price2.toString()+'</td><tr>');

				$('#body-bill').append(str);
			}
			$('#TongCong').text(d[0].PriceTotal);
			$('#buttonPayment').hide();
			$('#mahoadon').text(' HD0000'+id.toString());
			$('#CheckoutModal').modal('show');
		}

	});
		
}