<?php
session_start();
$conn = mysqli_connect("localhost","root","","rage");
$ph = $_POST["phone"];
$ps = $_POST["password"];
 $_SESSION['phone'] = $ph;
$sql = "Select  * from users where  phone = '$ph'  and password='$ps'";

if ($result=mysqli_query($conn,$sql))
  {

  $count=mysqli_num_rows($result);
  if($count > 0)
  	  {
  	  	$row = mysqli_fetch_assoc($result);
  	  	$cid = $row["cid"];
  	  	$sql1="delete from bookings where $cid='$cid' order by bid desc limit 1";	
  	  	$result1=mysqli_query($conn,$sql1);  	
  	  	 header('location:index.php');
  }
  	else
  		echo "enter correct phone and password ";
  		
}
?>