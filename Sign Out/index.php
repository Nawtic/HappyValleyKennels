<?php
    session_start();
    session_destroy();

    include "../assets/Header/Header.php";

    echo("You've been signed out");

    include "../assets/Footer/Footer.php";
?>