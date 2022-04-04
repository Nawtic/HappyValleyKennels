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
                if($ID[0] == "1"){
                    $_SESSION["Role"] = "Customer";
                    $conn = new mysqli($Servername, $ID, $Password);

                    $Query = "SELECT first_name, last_name FROM KennelDB.customers WHERE LPAD(id, 3, \"0\") = ".ltrim($ID, 1);

                    $_SESSION["UserID"] = $ID;
                    $_SESSION["Password"] = $Password;
                    $row = $conn -> query($Query) -> fetch_assoc();
                    $_SESSION["First Name"] = $row["first_name"];
                    $_SESSION["Last Name"] = $row["last_name"];

                    header('Location: /HappyValleyKennels/Assets/SignInSuccess.php');
                }
            }
            catch(Exception $e) {
                $signinError = "Error connecting, check credentials";
                echo($e);
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