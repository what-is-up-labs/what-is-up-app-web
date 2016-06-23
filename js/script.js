function subscribe() {
	var email = $("#email-to-subscribe").attr("value");
	var dataString = 'email=' + email;  

	//alert (dataString);return false;  

//	$.ajax({  
//	  type: "POST",  
//	  url: "subscribe.php",  
//	  data: dataString,  
//	  success: function(data) {  
//	  	if (data == "success") {
		    $('#signuparea').hide();  
		    $('#thankyoumsg').fadeIn(1000);  
//	    } else {
//	    	alert("There was an error processing your request.  Please try again later.\n\n" + data);
//	    }
//	  }  
//	});  
	return false;  
}
