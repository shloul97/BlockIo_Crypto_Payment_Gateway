$(document).ready(function(){

	$('.verify-btn').click(function(){
		var type = $(this).attr('id');
		var wallet = $(this).attr('data-id');
		

		$.ajax({
	      type: "POST",
	      url: "checkBalance.php",
	      data: {type : type, wallet : wallet},
	      success: function (d) {
	      	var objJSON = JSON.parse(d);
	        if(objJSON.response == true){
	        	var alert = "Your wallet balance : $" + objJSON.balance;
	        	window.alert(alert);
	        }
	        else{
	        	
	        }
	        
		  }
		});


	});
});