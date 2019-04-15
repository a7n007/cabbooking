<?php 
session_start();
$conn = mysqli_connect("localhost","root","","rage");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="payment.css"> 
	<link href="details.css" rel="stylesheet">
	<title>details</title>

</head>
<body>
	<?php
	$src = $_POST["src"];
	$dest = $_POST["dest"];
	$s = "avail";
	$t = $_POST["r1"];
	$t1 = "enterprise";
	$t2 = "economy";
	$t3 = "standard";
	 $phone = $_SESSION['phone'];
	 $sq2 = "Select  * from users where phone='$phone'";
$result2=mysqli_query($conn,$sq2);

$ro = mysqli_fetch_assoc($result2);
$cid = $ro["cid"];

	$r = rand(10,40);

	$sql = "Select  * from drivers where cartype='$t' and status = '$s'";
	if ($result=mysqli_query($conn,$sql))
	{
		$row = mysqli_fetch_assoc($result);
		$did = $row["did"];
		$count=mysqli_num_rows($result);
		if($count <= 0)
			echo "<h3>Cabs with that spec not available </h3>";
		else
		{
			$sq1 = "INSERT INTO bookings(date,cid,did,src,dest) values".

 "(
 NOW(),
 '$cid',
 '$did',
 '$src',
 '$dest'
 )";
 $rest=mysqli_query($conn,$sq1);
			echo '<div id="details">
			<table>
			<thead><th>Booking Details</th><th>&nbsp;</th></thead>
			<tbody>';
			echo '<tr><td width="30%">DRIVER NAME</td><td>';echo $row["dname"];echo "</td></tr>
			<tr><td>DRIVER NUMBER</td><td>";echo $row["dphone"];echo "</td></tr>
			<tr><td>CAR TYPE </td><td>";echo $row["cartype"];echo "</td></tr>
			<tr><td>CAR NUMBER </td><td>";echo $row["carno"];echo "</td></tr>
			<tr><td>TOTAL COST OF TRIP </td><td>";
				if(strcmp($t, $t1)==0)
					echo $r*25;
				elseif (strcmp($t, $t2)==0)
					echo $r*16;
				else
					echo $r*20;
				echo " Rupees";
			echo "</td></tr>
			</tbody>
			</table>
			</div>";
		}
	}	
		else
			echo "error";
		?>
		<?php
			$_SESSION["feedback"] = "fdbk";
		?>
		<input type="checkbox" onclick=window.location.href='index.php'>
		<label>Cash On Destination </label>
		<button class="btn" type = "submit" onclick=window.location.href='payment.php'>PAY</button>
		</body>
	</html>
