<?php
session_start();
/*   $adhar = $_SESSION['adhar'];
      $_SESSION['adhar'] = $adhar;
    $uname = $_SESSION['uname'];
    echo $uname;*/
 ?>
<!DOCTYPE html>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="payment.css"> 

</head>

<body>


<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="payment1.php" method="POST">

        <div class="row">

          <div class="col-50">

          <div class="col-50">

<h3>      </h3>

<h3>      </h3>

<label for="fname">Accepted Cards</label>

            <div class="icon-container">

              <i class="fa fa-cc-visa" style="color:navy;"></i>

              <i class="fa fa-cc-amex" style="color:blue;"></i>

              <i class="fa fa-cc-mastercard" style="color:red;"></i>

              <i class="fa fa-cc-discover" style="color:orange;"></i>

            </div>

            <label for="cname">Name on Card</label>

            <input type="text" id="cname" name="cardname" required>

            <label for="ccnum"  required >Credit card number</label>

            <input type="text" pattern="[0-9]{16}" id="ccnum" name="cardnumber" placeholder="XXXX-XXXX-XXXX-XXXX">

            <label for="expmonth" required >Exp Month</label>

            <input type="text" id="expmonth" required name="expmonth" placeholder="August">

            <div class="row">
              
              <div class="col-50">

                <label for="expyear" required >Exp Year</label>

                <input type="text" id="expyear" required  name="expyear" placeholder="2019">

              </div>

              <div class="col-50">

                <label for="cvv">CVV</label>

                <input type="password"  required id="cvv" name="cvv" placeholder="XXX">

              </div>

            </div>

          </div>

        </div>

    </div>

  </div>

</div>

        <button class="btn">Submit</button>

      </form>

</body>

</html>

 

