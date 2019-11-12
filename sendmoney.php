
<?php 

session_start();


if (empty($_SESSION['phone'])) {
	header("location: index.php");
}

include("header.php"); 
include("database.php");

?>
	<div class="main-wrapper">
     <div class="container">
      <div class="send_money wth" id="send_money">
        
        <div class="menu">

          <ul>

            <div id="send"><li><a href="">Send Money</a></li></div>
            <li><a id="Flexi" href="">Buy Airtime</a></li>
            <li><a id="Pay" href="">Payment</a></li>
            <li><a id="Cash" href="">Cash Out</a></li>
            <li><a id="MyBkash" href="">My Bkash</a></li>

            <li><a id="Remittance" href="">Remittance</a></li>
            <li><a id="Help" href="">Help Line</a></li>
          </ul>

        </div>

      </div>

      <div id="receiverN" class="receiver_box wth">
      	
      	<div class="receiver_input">
      		<form id="inputForm" action="" method="">
	      		<label for="telNo">Enter Receiver No.</label>
	      		<input type="tel" name="inputNumber" id="customerN" required size="22">
	      		<input type="button" name="send_taka" id="send_number" value="Send">

				<input class="button_cancel" id="cancel_but" type="button" onclick="window.location.replace('sendmoney.php')" value="Cancel" />


	      		<!-- <td><button type="cancel" onclick="javascript:window.location='index.php';"></td> -->
      		</form>
      	</div>

      </div>

      <div class="send-amount wth" id="send_amount">
      	<div class="input-taka">
      		<form action="">
      			<label for="amount">Enter Amount</label>
      			<input id="takaamount" type="number" name="sendamount" value="0" required="1" size="22">
      			<input type="button" name="sendtaka" id="send_taka" value="Send">
      			<input class="button_cancel" id="cancel_but" type="button" onclick="window.location.replace('sendmoney.php')" value="Cancel"/>
      		</form>
      	</div>
      </div>
      <div class="send-reference wth" id="send_ref">
      	<div class="input-ref">
      		<form action="">
      			<label for="reference">Enter Reference</label>
      			<input id="ref_n" type="text" name="sendref" required size="22">
      			<input type="button" name="sendrefer" id="send_refer" value="Send">
      			<input class="button_cancel" id="cancel_but" type="button" onclick="window.location.replace('sendmoney.php')" value="Cancel"/>
      		</form>
      	</div>
      </div>

      <div class="send-pin wth" id="send_pin">
      	<div class="input-pin">
      		<form action="">
      			<label for="pin">Enter Pin Number</label>
      			<input id="pin_no" type="text" name="sendref" required="1" size="22">
      			<input type="button" name="sendpin" id="send_pin" value="Send">
      			<input class="button_cancel" id="cancel_but" type="button" onclick="window.location.replace('sendmoney.php')" value="Cancel"/>
      		</form>
      	</div>
      </div>

     </div>

 </div>


<?php include("footer.php"); ?>