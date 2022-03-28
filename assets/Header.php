<?php
    session_start();

    if(isset($_SESSION["First Name"]) == 1) {
        $username = $_SESSION["First Name"];
    }
    else {
        $username = "Sign In";
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Happy Valley Kennels</title>
        <link rel="stylesheet" type="text/css" href="../Skeleton.css">
    </head>
    <body>
        <!-- For testing purposes, will be removed later -->
        <a href="../Sign In">Sign In</a>
        <a href="../Sign Out">Sign Out</a>

        <div id="Page_Header">
            <a href="../Home">Happy Valley Kennels</a>
        </div>

        <ul id="Nav_Bar">
            <li><a href="../Home">Home</a></li>
            <li><a href="../About">About</a></li>
            <li><a href="../Contact">Contact</a></li>
            <?php
                if(session_status() == 2) {
                    echo "<button id=\"Profile_Button\">".$username;
                }
                else {
                    if($_SESSION["Role"] == "Employee"){
                        echo "<button id=\"Profile_Button\">".$username;
                    }
                }
            ?>
        </ul>
    </body>
</html>