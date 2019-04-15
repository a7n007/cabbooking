<?php
error_reporting(0);
session_start();

$conn = mysqli_connect("localhost","root","","rage");
$namcardd=$_POST["cardname"];
$cardnoo=$_POST["cardnumber"];
$expmonthh=$_POST["expmonth"];
$expyearr=$_POST["expyear"];
$cvvv=$_POST["cvv"];


$sql = "INSERT INTO payment(namcard,cardno,expmo,expyear,cvv)
 values".

 "('$namcardd','$cardnoo','$expmonthh','$expyearr','$cvvv'
 )";
if (mysqli_query($conn, $sql)) {
	$_SESSION["feedback"] = "fdbk";
	
   header('location:index.php');
}
?>
