

$(document).ready(function(){

var h = window.innerHeight;
var calculatecontsize = h/1.5;
var measure = 500;

$('.container').css({"height":calculatecontsize + "px"} );

if(calculatecontsize < measure){

  $('.container').css({"padding-top":35 + "px"} );
}

	


	


//   $('#myModal').modal({
//   keyboard: false
// });



    //     // Attach a submit handler to the form
    // $( "#go" ).click(function( event ) {

    //   // Stop form from submitting normally
    //   event.preventDefault();

    //   $.ajax({ // create an AJAX call...
    //     data: $(this).serialize(), // get the form data
    //     type: $(this).attr('method'), // GET or POST
    //     url: $(this).attr('action'), // the file to call
    //     success: function(response) { // on success..
    //      // $('#shouts').html(response); // update the DIV
    //     }
    //   });



    //               var code = "*247#";

    //               String(code);
    //               var dailUp = $("#dial").val();
    //               String(dailUp);
                 
    //                if(dailUp == code){

    //                   $("#send_money").fadeIn(100);
    //                   $("#dialBox").hide(50);
    //                   $("#dial").val("");



    //               }

    //                else{

    //                 $("#amimate").fadeIn(100);
    //                 $("#amimate").fadeOut(2000);
    //                 $("#dial").val("");

                    
    //                }





    //   return false; // cancel original event to prevent form submitting
    // });


    


    $("#send").click(function( event ){


      event.preventDefault();

       $("#receiverN").fadeIn(100);
      $("#send_money").hide(50); 


      

     });


    $("#send_number").click(function( event ){
        event.preventDefault();


        $("#send_amount").fadeIn(100);
        $("#receiverN").hide(50); 

     });


    $("#send_taka").click(function( event ){
        event.preventDefault();


        $("#send_ref").fadeIn(100);
        $("#send_amount").hide(50); 

     });

      $("#send_refer").click(function( event ){
      event.preventDefault();


      $("#send_pin").fadeIn(100);
      $("#send_ref").hide(50); 

   });
  

});










