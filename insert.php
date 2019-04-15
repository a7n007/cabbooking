<?php 
session_start();
$conn = mysqli_connect("localhost","root","","rage");

 $name=$_POST["name"];
$email=$_POST["email"];
 $phone=$_POST["phone"];
 $password=$_POST["password"];

$sql = "INSERT INTO users(name,email,phone,password)
 values".

 "(
 '$name',
 '$email',
 '$phone',
 '$password'
 )";
if (mysqli_query($conn, $sql)) {
	  	 $_SESSION['phone'] = $phone;
  	  	 $_SESSION['uname'] = $uname;
}

    header('location:index.php');
 ?>