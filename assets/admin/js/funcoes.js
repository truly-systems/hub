$(document).ready(function() {
			$.ajax({
	  type: "POST",
	  url: "post.php?tipo=loadRss",
	  data: { 'tipo': '0'} ,
	  success: function(msg){

	    $('#msgResposta').html(msg);

	 }    
	});

});


$(function($) {


	// Action Login
	$("#login-btn").click(function(){ 

		
		var username = $("#username").val();
		var password = $("#password").val();
		var lang = $("#lang").val();

		if (username == "" && password == "") {
			// Add effect animation css
			$('#sign-wrapper').addClass('animated shake');
			setTimeout(function(){$('#sign-wrapper').removeClass('animated shake')}, 1500);
		}
		else {

			$.ajax({
			  type: "POST",
			  url: "post.php?tipo=login",
			  data: {'username': username, 'password': password, 'lang': lang},
			  success: function(msg){

			    $('#msgResposta').html(msg);

			 }    
			});

	    }

	});


	// Action Configurar
	$("#config-btn").click(function(){ 

		
		var url = $("#url").val();
		var token = $("#token").val();
		var tipo = $("#tipo").val();
		var localurl = $("#localurl").val();
		var username = $("#username").val();
		var password = $("#password").val();

		if (url == "" && token == "") {
			// Add effect animation css
			$('#sign-wrapper').addClass('animated shake');
			setTimeout(function(){$('#sign-wrapper').removeClass('animated shake')}, 1500);
		}
		else {

			$.ajax({
			  type: "POST",
			  url: "../post.php?tipo=config",
			  data: {'url': url, 'token': token, 'username': username, 'password': password, 'tipo': tipo},
			  success: function(msg){

			    $('#msgResposta').html(msg);
			    // setTimeout(function(){ $('#testalert').fadeIn(250)}, 1500);
			    
			 }    
			});

	    }

	});

});