<?php
session_start();
$conn = mysqli_connect("localhost","root","","rage");
$ph = $_POST["phone"];
$ps = $_POST["password"];

$sql = "Select  * from users where  phone = '$ph'  and password='$ps'";

if ($result=mysqli_query($conn,$sql))
  {
  $count=mysqli_num_rows($result);
  if($count > 0)
  	  {
  	  	$row = mysqli_fetch_assoc($result);
  	  	$uname = $row["name"];
  	  	 $_SESSION['phone'] = $ph;
  	  	 $_SESSION['uname'] = $uname;
  	  header('location:index.php');
  }
  	else
  		echo "enter correct phone and password ";
  		
}
?>