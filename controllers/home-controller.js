var showSignup = false; 
var showSignin = false; 


$(document).ready(function() {
	$("#show-signin").on("click", function(){
		$("#signup-logbox").css("display", "none"); 
		$("#signin-logbox").css("display", "inline-block"); 
		$('#sign-modal').modal(); 
	}); 

	$("#show-signup").on("click", function(){
		$("#signup-logbox").css("display", "inline-block"); 
		$("#signin-logbox").css("display", "none"); 
		$('#sign-modal').modal(); 
	}); 


	$("#already-has-account").on("click", function(){
		$("#signin-logbox").css("display", "inline-block"); 
		$("#signup-logbox").css("display", "none"); 
	}); 


	$("#create-account").on("click", function(){
		$("#signup-logbox").css("display", "inline-block"); 
		$("#signin-logbox").css("display", "none"); 
	}); 
}); 
