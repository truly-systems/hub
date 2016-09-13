$(function($) {

	// Action Login
	$("#login-btn").click(function(){ 

		
		var username = $("#username").val();
		var password = $("#password").val();

		if (username == "" && password == "") {
			// Add effect animation css
			$('#sign-wrapper').addClass('animated shake');
			setTimeout(function(){$('#sign-wrapper').removeClass('animated shake')}, 1500);
		}
		else {

			$.ajax({
			  type: "POST",
			  url: "post.php?tipo=login",
			  data: {'username': username, 'password': password},
			  success: function(msg){

			    $('#msgResposta').html(msg);

			 }    
			});

	    }

	});

});