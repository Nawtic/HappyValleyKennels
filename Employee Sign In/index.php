<?php
    session_start();

    $signinError = $passError = $nameError = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["ID"])) {
            $nameError = "* An ID is required";
        }
        else {
            $ID=ltrim($_POST["ID"], "0");
        }

        if (empty($_POST["Password"])) {
            $passError = "* A password is required";
        }
        else {
            $Password = $_POST["Password"];
        }

        if(empty($nameError) and empty($passError)) {
            try {
                $username = "logincheck";
                $password = "loginmanage";
                $dsn = 'mysql:host=localhost;dbname=happy_kennel';

                $db = new PDO($dsn, $username, $password);
                
                try {
                    $query = $db->query("SELECT * FROM employees WHERE employee_id = " . $ID);
                    $queryResult = $query->fetch();
                    if(!isset($queryResult["role"])) {
                        throw new Exception("Empty query result");
                    } else {
                        if(password_verify($Password, $queryResult["password"])){
                            $_SESSION["Role"] = $queryResult["role"];
                            $_SESSION["UserID"] = $queryResult["employee_id"];
                            $_SESSION["First Name"] = $queryResult["first_name"];
                            $_SESSION["Last Name"] = $queryResult["last_name"];

                            header('Location: /HappyValleyKennels/Assets/SignInSuccess.php');
                        } else {
                            throw new Exception("Invalid Password");
                        }
                    }

                } catch (Exception $e) {
                    $signinError = "Error When Signing In, Please Re-Enter Credentials";
                }               
            }
            catch(Exception $e) {
                $signinError = "Error Connecting, Please Try Again Later";
            }
        }
    }
?>

<!DOCTYPE html>

<html>
    <link rel="stylesheet" type="text/css" href="SignIn.css">
    <head>
        <title>Sign In</title>
    </head>
    <body>
        <p id="page_credit">Page Creator: Stephen Erichsen</p>

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