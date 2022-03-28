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

        <style>
            <?php
                include("Header.css");
            ?>
        </style>
        <script>
            <?php
                include("Dropdown.js")
            ?>
        </script>
    </head>
    <body>

        <div id="Page_Header">
            <a href="../Home">Happy Valley Kennels</a>
        </div>

        <?php        
            if(isset($_SESSION["Role"]) AND $_SESSION["Role"] == "Employee"){
                echo "<div id=\"dropdown_container\"><button id=\"Profile_Button\" onclick=\"showDropdown()\">".$username."</button>";
                include("SignOutDropdown.php");
                echo "</div>";
            }
            else {
                echo "<div id=\"dropdown_container\"><button id=\"Profile_Button\" onclick=\"showDropdown()\">".$username."</button>";
                include("SignInDropdown.php");
                echo "</div>";
            }
        ?>

        <ul id="Nav_Bar">
            <?php
                if(isset($_SESSION["Role"]) AND $_SESSION["Role"] == "Employee"){
                    echo "<li><a href=\"../Home\">Home</a></li>";
                    echo "<li><a href=\"../Reports\">Reports</a><li>";
                }
                else {
                    echo "<li><a href=\"/HappyValleyKennels/Home\">Home</a></li>";
                    echo "<li><a href=\"/HappyValleyKennels/About\">About</a></li>";
                    echo "<li><a href=\"/HappyValleyKennels/Contact\">Contact</a></li>";
                }
            ?>
        </ul>
    </body>
</html>