<!-- Page Credit: Isaac Asare -->

<?php
$page_creator = "Isaac Asare";

include("../assets/Header/Header.php");
?>

<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <title>Happy Valley Kennels</title>
  <link rel="stylesheet" type="text/css" href="signup.css">
</head>

<body>

  <div id="Page_Content">
    <section>
      <form action="index.php" method="POST" style="border:1px solid #ccc">
        <div class="container">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>

          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

          <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>
        </div>
      </form>
    </section>

  </div>

</body>

</html>

<?php
include "../assets/Footer/Footer.php";
?>