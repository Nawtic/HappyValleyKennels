<?php
$page_creator = "Andres Bastidas";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include("../con_db.php");


  if (isset($_POST['register'])) {
    if (strlen($_POST['Name']) >= 1 and strlen($_POST['Email']) >= 1 and strlen($_POST['Address']) >= 1 and strlen($_POST['City']) >= 1 and strlen($_POST['State']) >= 1 and strlen($_POST['Zip']) >= 1 and strlen($_POST['Cardname']) >= 1 and strlen($_POST['Cardnumber']) >= 1 and strlen($_POST['Expmonth']) >= 1 and strlen($_POST['Expyear']) >= 1 and strlen($_POST['Cvv']) >= 1) {

      $name = trim($_POST['Name']);
      $email = trim($_POST['Email']);
      $address = trim($_POST['Address']);
      $city = trim($_POST['City']);
      $state = trim($_POST['State']);
      $zip = trim($_POST['Zip']);
      $cardname = trim($_POST['Cardname']);
      $cardnumber = trim($_POST['Cardnumber']);
      $expmonth = trim($_POST['Expmonth']);
      $expyear = trim($_POST['Expyear']);
      $cvv = trim($_POST['Cvv']);


      $consulta = "INSERT INTO checkout(Name, Email, Address, City, State, Zip, Cardname, Cardnumber, Expmonth, Expyear, Cvv) VALUES ('$name','$email','$address','$city','$state','$zip','$cardname','$cardnumber','$expmonth','$expyear','$cvv')";

      $resultado = mysqli_query($conex, $consulta);
      if ($resultado) {
        header("location: Confirmation");
        echo("<h3 class=\"ok\">Your information was sent successfully!</h3>");
      } else {
        include($_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Header/Header.php");
        echo("<h3 class=\"bad\">An error has occured!</h3>");
      }
    } else {
      include($_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Header/Header.php");
      echo("<h3 class=\"bad\">Please complete all the fields!</h3>");
    }
  }
} else {
  include($_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Header/Header.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Check-Out</title>
  <link href="checkout_style.css" rel="stylesheet" />
  <link href="styleheader.css" rel="stylesheet" />

</head>

<body>
  <div id="Page_Content">
    <div class="container">
      <center>
        <h1> Check-Out </h1>
      </center>
      <hr>
      <form method="post" action="Index.php">
        <div class="row">
          <div class="col-75">
            <div class="container">
                <div class="row">
                  <div class="col-50">
                    <h3>Billing Address</h3>
                    <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                    <input type="text" id="fname" name="Name" placeholder="John M. Doe" />
                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                    <input type="text" id="email" name="Email" placeholder="john@example.com" />
                    <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                    <input type="text" id="adr" name="Address" placeholder="542 W. 15th Street" />
                    <label for="city"><i class="fa fa-institution"></i> City</label>
                    <input type="text" id="city" name="City" placeholder="New York" />

                    <div class="row">
                      <div class="col-50">
                        <label for="state">State</label>
                        <input type="text" id="state" name="State" placeholder="NY" />
                      </div>
                      <div class="col-50">
                        <label for="zip">Zip</label>
                        <input type="text" id="zip" name="Zip" placeholder="10001" />
                      </div>
                    </div>
                  </div>

                  <div class="col-50">
                    <h3>Payment</h3>
                    <label for="fname">We Accept All Type of Cards</label>
                    <div class="icon-container">
                      <i class="fa fa-cc-visa" style="color: navy"></i>
                      <i class="fa fa-cc-amex" style="color: blue"></i>
                      <i class="fa fa-cc-mastercard" style="color: red"></i>
                      <i class="fa fa-cc-discover" style="color: orange"></i>
                    </div>
                    <label for="cname">Name on Card</label>
                    <input type="text" id="cname" name="Cardname" placeholder="Name on the card">
                    <label for="ccnum">Credit card number</label>
                    <input type="text" id="ccnum" name="Cardnumber" placeholder="1111-2222-3333-4444">
                    <label for="expmonth">Exp Month</label>
                    <input type="text" id="expmonth" name="Expmonth" placeholder="September">

                    <div class="row">
                      <div class="col-50">
                        <label for="expyear">Exp Year</label>
                        <input type="text" id="expyear" name="Expyear" placeholder="2022">
                      </div>
                      <div class="col-50">
                        <label for="cvv">CVV</label>
                        <input type="text" id="cvv" name="Cvv" placeholder="352">
                      </div>
                    </div>
                  </div>
                </div>

                <input type="submit" value="Submit" class="btn" name="register">

            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

</body>

</html>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Footer/Footer.php");
?>