<?php
    session_start();

    $signinError = $passError = $nameError = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["ID"])) {
            $nameError = "* An ID is required";
        }
        else {
            $ID=$_POST["ID"];
        }

        if (empty($_POST["Password"])) {
            $passError = "* A password is required";
        }
        else {
            $Password = $_POST["Password"];
        }

        if(empty($nameError) and empty($passError)) {
            $Servername = "localhost";

            

            try {
                $conn = new mysqli($Servername, $ID, $Password);

                $Query = "SELECT FIRST_NAME, LAST_NAME, JOB_POSITION FROM TestDB.TestTable WHERE LPAD(ID, 3, 0) = ".$ID;

                $_SESSION["UserID"] = $ID;
                $_SESSION["Password"] = $Password;
                $row = $conn -> query($Query) -> fetch_assoc();
                $_SESSION["Role"] = $row["JOB_POSITION"];
                $_SESSION["First Name"] = $row["FIRST_NAME"];
                $_SESSION["Last Name"] = $row["LAST_NAME"];

                header('Location: /HappyValleyKennels/Assets/SignInSuccess.php');
            }
            catch(Exception $e) {
                $signinError = "Error connecting, check credentials";
            }
        }
    }
?>

<!DOCTYPE html>

<html>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="SignIn.css">

    <body>
        <div id="Side_Box">
        </div>
        <div id="SignIn_Form">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <h1>Sign In</h1>

                <p class="Error"><?php echo $signinError;?></p>

                <p>User ID  <span class="Error"><?php echo($nameError);?></span></p>
                <input class="field" type="text" name="ID"><br>

                <p>Password <span class="Error"><?php echo($passError);?></span></p>
                <input class="field" type="password" name="Password"><br>
                <div>
                    <input id="Submit_Button" type="submit" value="Sign In">
                </div>
            </form>
        </div>
    </body>
</html>