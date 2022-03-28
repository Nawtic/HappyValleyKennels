<?php
    include "../assets/Header/Header.php";

    echo("Successfully signed in ".$_SESSION["Role"]." ".$_SESSION["First Name"]." ".$_SESSION["Last Name"]." with ID ".$_SESSION["UserID"]);

    include "../assets/Footer/Footer.php";
?>