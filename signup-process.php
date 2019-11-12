<?php

include("database.php");

$first_name = "";
$last_name = "";
$phone_no ="";
$password ="";
$repassword ="";

if(isset($_POST['signup'])){

	$first_name = trim($_POST['fname']);
	$last_name = trim($_POST['lname']);

	//phone number check if it is greater than 10 digig and not more than 14 digit.
	if (!empty($_POST['phone'])) {
		

			if (strlen($_POST['phone']) > 11 && strlen($_POST['phone']) <= 14) {
				$phone_no = trim($_POST['phone']);
				$phone_no = substr($phone_no, 3);

			}
			elseif(strlen($_POST['phone']) == 11){
				$phone_no = trim($_POST['phone']);
				
				
			}
			else{
				echo "Please input 11 digit phone number</br>";
				
			}

	}

if (!empty($_POST['pass'])) {

	if (strlen($_POST['pass']) >=6) {
		$password = trim($_POST['pass']);
	}
	else{
		echo "Password must be 6 character</br>";
	}

}		
	$repassword = trim($_POST['repass']);


	if ($password == $repassword) {
		$password = md5($password);

		if (!empty($phone_no) && !empty($password) ) {

			$sql = "INSERT INTO user(fname, lname, phone, pass) VALUES ('$first_name', '$last_name', '$phone_no','$password')";
			mysqli_query($db, $sql);
			header('location: index.php');
		}

		
		
	}


}





?>