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
                include("Header.js")
            ?>
        </script>
    </head>
    <body onload="setActive()">

        <div id="Page_Header">
            <a id="Header_Text" href="/HappyValleyKennels/Home">Happy Valley Kennels</a>
        </div>

        <?php        
            if(isset($_SESSION["Role"]) AND ($_SESSION["Role"] == "Employee" OR $_SESSION["Role"] == "Customer")){
                echo "<div id=\"dropdown_container\" onmouseleave=\"hideDropdown()\"><button id=\"Profile_Button\" onclick=\"showDropdown()\">".$username."</button>";
                include("SignOutDropdown.php");
                echo "</div>";
            }
            else {
                echo "<div id=\"dropdown_container\" onmouseleave=\"hideDropdown()\"><button id=\"Profile_Button\" onclick=\"showDropdown()\">".$username."</button>";
                include("SignInDropdown.php");
                echo "</div>";
            }
        ?>

        <ul id="Nav_Bar">
            <!-- Links must have ids which make the directory they point to -->
            <?php
                if(isset($_SESSION["Role"]) AND $_SESSION["Role"] == "Employee"){
                    echo "<li><a href=\"/HappyValleyKennels/Home\" id=\"Home\">Home</a></li>";
                    echo "<li><a href=\"/HappyValleyKennels/Reports\" id=\"Reports\">Reports</a><li>";
                    echo "<li><a href=\"/HappyValleyKennels/Finance\" id=\"Finances\">Finance</a><li>";
                }
                else if(isset($_SESSION["Role"]) AND $_SESSION["Role"] == "Customer"){
                    echo "<li><a href=\"/HappyValleyKennels/Home\" id=\"Home\">Home</a></li>";
                    echo "<li><a href=\"/HappyValleyKennels/About\" id=\"About\">About</a></li>";
                    echo "<li><a href=\"/HappyValleyKennels/Contact\" id=\"Contact\">Contact</a></li>";
                    echo "<li><a href=\"/HappyValleyKennels/Scheduling\" id=\"Scheduling\">Scheduling</a></li>";
                }
                else {
                    echo "<li><a href=\"/HappyValleyKennels/Home\" id=\"Home\">Home</a></li>";
                    echo "<li><a href=\"/HappyValleyKennels/About\" id=\"About\">About</a></li>";
                    echo "<li><a href=\"/HappyValleyKennels/Contact\" id=\"Contact\">Contact</a></li>";
                }
            ?>
        </ul>
    </body>
</html>