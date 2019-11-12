
<?php 

session_start();
	

	include("database.php");

	if(isset($_POST['login_acc'])){


			$phone= trim($_POST['l_phone']);
			$pass= trim($_POST['l_pass']);

			$pass = md5($pass);

			$sql = "SELECT * FROM user WHERE phone='$phone' AND pass='$pass'";

			$result = mysqli_query($db, $sql);

			

			if(mysqli_num_rows($result) ==1){

				$_SESSION['phone'] = $phone;

				$_SESSION['messege'] = "You are logged in";

				header("location: sendmoney.php");

			}

			else{
				header("location: index.php");
			}

	}

	else{}







?>