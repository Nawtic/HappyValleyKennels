<?php
    session_start();

    $passError = $nameError = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["ID"])) {
            $nameError = "An ID is required";
        }
        else {
            $ID=$_POST["ID"];
        }

        if (empty($_POST["Password"])) {
            $passError = "A password is required";
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
                echo("Connection Error, check credentials".$e);
            }
        }
    }
?>

<!DOCTYPE html>

<html>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            ID <input type="text" name="ID"> <?php echo($nameError);?><br>
            Password <input type="password" name="Password"> <?php echo($passError);?><br>
            <input type="submit">
        </form>
    </body>
</html>