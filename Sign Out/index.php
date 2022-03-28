<?php
    session_start();
    session_destroy();

    include "../assets/Header.php";

    echo("You've been signed out");

    include "../assets/Footer.html";
?>