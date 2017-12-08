$(document).ready(function() {
	$("#show-signin").on("click", function(){
		//alert("The signup was clicked.");
		$('#signin-modal').modal(); 
		
	}); 

	$("#show-signup").on("click", function(){
		//alert("The signin was clicked.");
		$('#signup-modal').modal(); 
	}); 
}); 

