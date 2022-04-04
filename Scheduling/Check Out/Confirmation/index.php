<?php
include("../../../assets/Header/Header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Confirmation Page</title>
  <link href="style_header_conf.css" rel="stylesheet" />
</head>

<body>
  <form>
    <div class="container">
      <center>
        <h1> Confirmation Page</h1>
      </center>
      <hr>
      <h1>Confirmation</h1>
      <h2>Your visit has been scheculed with us!</h2>

      <p>Please, confirm your visit by clicking the buttom below :)</p>

      <button onclick="myFunction()">Confirm</button>

      <p id="demo"></p>

      <script>
        function myFunction() {
          let text = "Press a button!\nEither OK or Cancel.";
          if (confirm(text) == true) {
            text = "You pressed OK!";
          } else {
            text = "You canceled!";
          }
          document.getElementById("demo").innerHTML = text;
        }
      </script>
</body>

</html>

<?php
include("../../../assets/Footer/Footer.php");
?>