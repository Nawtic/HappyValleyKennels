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
            <?php
                echo "<button id=\"Profile_Button\">".$username."</button>";
                if(isset($_SESSION["Role"]) AND $_SESSION["Role"] == "Employee"){
                    echo "<li><a href=\"../Home\">Home</a></li>";
                    echo "<li><a href=\"../Reports\">Reports</a><li>";
                }
                else {
                    echo "<li><a href=\"../Home\">Home</a></li>";
                    echo "<li><a href=\"../About\">About</a></li>";
                    echo "<li><a href=\"../Contact\">Contact</a></li>";
                }
            ?>
        </ul>
    </body>
</html>