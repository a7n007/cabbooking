<?php 
session_start();
$conn = mysqli_connect("localhost","root","","rage");

 $name=$_POST["name"];
$email=$_POST["email"];
 $phone=$_POST["exp"];
 
$sql = "INSERT INTO feedback(name,email,exp)
 values".

 "(
 '$name',
 '$email',
 '$phone')";
if (mysqli_query($conn, $sql)) {
	  	 $_SESSION['phone'] = $phone;
  	  	 $_SESSION['uname'] = $uname;
}

    header('location:index.php');
 ?>