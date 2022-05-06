<?php
    if(!isset($page_creator)){
        $page_creator = "Unknown";
    }

    if(session_status() == 1){
        session_start();
    }

    if(isset($_SESSION["First Name"])) {
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
        <link rel="icon" type="image/x-icon" href="/HappyValleyKennels/assets/images/favicon.ico">

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
        <p id="page_credit">Page Creator: <?php echo($page_creator); ?></p>

        <div id="Page_Header">
            <a id="Header_Text" href="/HappyValleyKennels/Home">Happy Valley Kennels</a>
        

        

        <?php        
            if(isset($_SESSION["Role"]) AND ($_SESSION["Role"] == "Employee" OR $_SESSION["Role"] == "Customer" OR $_SESSION["Role"] == "Human Resources" OR $_SESSION["Role"] == "Veterinarian")){
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
            <!-- Links must have ids which match the directory they point to -->
            <?php
                if(isset($_SESSION["Role"]) AND $_SESSION["Role"] == "Employee"){
                    echo "<li><a href=\"/HappyValleyKennels/Home\" id=\"Home\">Home</a></li>";
                    echo "<li><a href=\"/HappyValleyKennels/About\" id=\"About\">About</a><li>";
                    echo "<li><a href=\"/HappyValleyKennels/Inquiries\" id=\"Inquiries\">Inquiries</a><li>";
                    echo "<li><a href=\"/HappyValleyKennels/Reports\" id=\"Reports\">Reports</a><li>";
                    echo "<li><a href=\"/HappyValleyKennels/Finance\" id=\"Finance\">Finance</a><li>";
                } else if(isset($_SESSION["Role"]) AND $_SESSION["Role"] == "Veterinarian"){
                    echo "<li><a href=\"/HappyValleyKennels/Home\" id=\"Home\">Home</a></li>";
                    echo "<li><a href=\"/HappyValleyKennels/Reports\" id=\"Reports\">Reports</a><li>";
                } else if(isset($_SESSION["Role"]) AND $_SESSION["Role"] == "Customer"){
                    echo "<li><a href=\"/HappyValleyKennels/Home\" id=\"Home\">Home</a></li>";
                    echo "<li><a href=\"/HappyValleyKennels/About\" id=\"About\">About</a></li>";
                    echo "<li><a href=\"/HappyValleyKennels/Contact\" id=\"Contact\">Contact</a></li>";
                    echo "<li><a href=\"/HappyValleyKennels/Scheduling\" id=\"Scheduling\">Scheduling</a></li>";
                } else if(isset($_SESSION["Role"]) AND $_SESSION["Role"] == "Human Resources"){
                    echo "<li><a href=\"/HappyValleyKennels/Home\" id=\"Home\">Home</a></li>";
                    echo "<li><a href=\"/HappyValleyKennels/About\" id=\"About\">About</a></li>";
                    echo "<li><a href=\"/HappyValleyKennels/Users\" id=\"Users\">Users</a></li>";
                }
                else {
                    echo "<li><a href=\"/HappyValleyKennels/Home\" id=\"Home\">Home</a></li>";
                    echo "<li><a href=\"/HappyValleyKennels/About\" id=\"About\">About</a></li>";
                    echo "<li><a href=\"/HappyValleyKennels/Contact\" id=\"Contact\">Contact</a></li>";
                }
            ?>
        </ul>
        </div>
    </body>
</html>