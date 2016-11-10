$("#buttonsign").click(function(){
	
	var email = $("#inputmail2").val();
	var username = $("#inputusername2").val();
	var pass = $("#inputPassword2").val();
	var passconfirm = $("#confirmPassword2").val();

	if(email.length !=0 && username.length!=0 &&passconfirm.length!=0 &&pass.length!=0){
		if(pass == passconfirm){
			var data = 'email='+email+'&username='+username+'&pass='+pass;
				$.ajax({
					url: "php/register.php",
					type: "post",
					data: data,
					success : function(result){
						if(result == 1) {
							alert('OK!')
						}
						else if(result == 2){
							$("#register-error").text("Email đã được đăng kí!"); 
						}
						else{
							$("#register-error").text("Username đã được sử dụng!");
						}
					}
				});
		}
		else{
			$("#register-error").text("Password không khớp!");
		}
	}
	else{
		$("#register-warmning").text("Nhập đầy đủ thông tin!");
	}
});
$("#buttonlogin").click(function(){
	var username = $("#inputusername1").val();
	var pass = $("#inputPassword1").val();
	var valid = $("#rememberbox").checked;

	if(username.length !=0 && pass.length!=0){
		var data = 'valid='+valid+'&username='+username+'&pass='+pass;
		$.ajax({
			url: "php/login.php",
			type: "post",
			data: data,
			success : function(result){
				if(result == 2){
					$("#login-error").text("Username hoặc Password sai!"); 
				}
				else{
					window.location.href = 'http://localhost/AssWeb/';
				}
			}
		});
	}
	else{
		$("#login-warmning").text("Nhập đầy đủ thông tin!");
	}
	
});
$("#logout").click(function(){
	$.ajax({
		url: "php/logout.php",
		type: "get",
		success : function(){	
			window.location.href = 'http://localhost/AssWeb/';
		}
	});
});