<?php
$page_creator = "Andres Bastidas";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include("con_db.php");

  if (isset($_POST['register'])) {
    if (strlen($_POST['Name']) >= 1 and strlen($_POST['Email']) >= 1 and strlen($_POST['DogName']) >= 1 and strlen($_POST['Breed']) >= 1 and strlen($_POST['Phone']) >= 1 and strlen($_POST['Address']) >= 1 and strlen($_POST['Gender']) >= 1 and strlen($_POST['Size']) >= 1) {

      $name = trim($_POST['Name']);
      $email = trim($_POST['Email']);
      $dogname = trim($_POST['DogName']);
      $breed = trim($_POST['Breed']);
      $phone = trim($_POST['Phone']);
      $address = trim($_POST['Address']);
      $gender = trim($_POST['Gender']);
      $size = trim($_POST['Size']);
      $checkin = date("m/d/y");
      $checkout = date("m/d/y");

      $consulta = "INSERT INTO scheduling(Name, Email, DogName, Breed, Phone, Address, Gender, Size, CheckIn, CheckOut) VALUES ('$name','$email','$dogname','$breed','$phone','$address','$gender','$size','$checkin', '$checkout')";

      $resultado = mysqli_query($conex, $consulta);

      if ($resultado) {
        header("location: http://localhost/HappyValleyKennels/Scheduling/Check Out/");
      } else {
        include($_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Header/Header.php");

        echo ("<h3 class=\"bad\">An error has occurred!</h3>");
      }
    } else {
      include($_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Header/Header.php");

      echo ("<h3 class=\"bad\">Please complete all the fields!</h3>");
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
  <title>Schedule Your Visit</title>
  <link href="formstyle.css" rel="stylesheet" />
  <link href="styleheader.css" rel="stylesheet" />

</head>

<body>
  <div id="Page_Content">
    <form method="post" action="index.php">
      <div class="container">
        <center>
          <h1> Schedule Your Visit With Us</h1>
        </center>
        <hr>

        <label> Owner's Name </label>
        <input type="text" name="Name" placeholder="Your Name" size="50" />

        <label for="email">Email</label>
        <input type="text" placeholder="Enter Email" name="Email" />

        <label> Dog's Name </label>
        <input type="text" name="DogName" placeholder="Your Dog Name" size="50" />

        <label> Breed of the Dog </label>
        <input type="text" name="Breed" placeholder="Breed" size="25" />

        <label>Phone Number : </label>
        <input type="text" name="Phone" placeholder="phone no." size="10" />

        <label>Current Address : </label>
        <input type="text" name="Address" placeholder="Your Address" size="100" />

        <div>
          <label>
            Gender :
          </label><br>
          <input type="radio" value="Male" name="Gender" checked> Male
          <input type="radio" value="Female" name="Gender"> Female
          <div>
            <label>
              Size :
            </label>
          </div>
          <input type="text" name="Size" placeholder="Size" size="25" />
        </div>



        <label>
          Check-In Date :
        </label>
        <input type="date" id="dob" />
        <p></p>

        <label>
          Check-Out Date :
        </label>
        <input type="date" id="dob" />

        <script>
          function viewdate() {
            var x = document.getElementById("dob").value;
            document.getElementById("demo").innerHTML = x;
          }
        </script>

        <hr>
        <input type="submit" name="register">
      </div>
    </form>
  </div>
</body>

</html>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Footer/Footer.php"); ?>