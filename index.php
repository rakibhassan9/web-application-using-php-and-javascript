<?php

session_start();

if(isset($_SESSION['phone'])){

  header("location: sendmoney.php");
}

?>

<?php include("header.php"); ?>



<?php include("content.php"); ?>

<?php include("footer.php"); ?>


