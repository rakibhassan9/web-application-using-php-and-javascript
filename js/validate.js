	

	$("#sing_up").prop("disabled", true);

	 function validate(){ 


     var phone= $("#ppp").val();

   	 if(phone.length == 11  ){
   	 	$(".okbtnphn").show();

    }
    else{
    	$(".okbtnphn").hide();
    }

    var pas= $("#pas1").val();
    
	if (pas.length >= 6) {
		$(".okbtnpass").show();
		// $("#sing_up").prop("disabled", false);
   	 }

	else{
		$(".okbtnpass").hide();
	}

	var repass= $("#repas").val();

	if (repass.length >= 6 && pas == repass) {
		$(".okbtnrepass").show();
		$("#sing_up").prop("disabled", false);
   	 }

	else{
		$(".okbtnrepass").hide();
		$("#sing_up").prop("disabled", true);
	}

}

	function onlive(){
		var phone= $("#ppp").val(); 
		var pas= $("#pas1").val();

	if(phone.length >11 || phone.length < 11){

			$("#sing_up").prop("disabled", true);
	    	$("#animate").slideToggle(10);
	    	$("#animate").fadeToggle(4000);
		}
	else{

	}


	if (pas.length > 6) {
			
	   	 $("#animate").slideToggle(10);	
		}

	else{
		

	}
	}


