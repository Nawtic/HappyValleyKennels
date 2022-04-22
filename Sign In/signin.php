<!DOCTYPE html>
<!-- Page Credit: Isaac Asare -->
<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <title>Happy Valley Kennels</title>

  <link rel="stylesheet" type="text/css" href="reports.css">
  <link rel="stylesheet" type="text/css" href="signup.css">
</head>

<body>
  <div id="Page_Header">
    <a href="../Home">Happy Valley Kennels</a>
  </div>
  <div id="Page_Content">
    <section>
      <form action="action_page.php" style="border:1px solid #ccc">
        <div class="container">
          <h1>Sign In</h1>
          <p>Please fill this form to sign in to your account.</p>
          <hr>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Check box if you are an Employee
          </label> <br>
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>

          <p>By selecting login you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

          <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>
        </div>
      </form>
    </section>

  </div>

  <div id="Page_Footer">
    <hr>
    <div id="Footer_Content">
      <object type="image/svg+xml" data="../assets/HappyValleyLogo.svg" width="100" height="100"></object>
      <p>Happy Valley Kennels</p>
      <p><a href="../Contact">Contact</a></p>
    </div>
  </div>

</body>

</html>
