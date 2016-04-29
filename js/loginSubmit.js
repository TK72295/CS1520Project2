$("#login").on('click', function(){
	var email = $("#email").val();
	var password = $("#password").val();

	if(email=='' || password==''){
		$('input[type="text"],input[type="password"]').css("border","2px solid red");
	}
	else{
		$.post("loginProcess.php", {email: email, password: password}, function(data){
			if(data == '1'){
				//console.log("WTF");
				window.location='index.php';
			}
		});
	}
});

$("#register").on('click', function(){
	var email = $("#email").val();
	var password = $("#password").val();

	if(email=='' || password==''){
		$('input[type="text"],input[type="password"]').css("border","2px solid red");
	}
	else{
		$.post("registerProcess.php", {email: email, password: password}, function(data){
			if(data == '1'){
				window.location='index.php';
			}
		});
	}
});