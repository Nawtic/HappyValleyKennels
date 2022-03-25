<?php
    #Destroy any existing session
    session_start();
    session_destroy();

    #Create new session with placeholder name
    session_start();
    $_SESSION["Username"] = "Bill";
    $_SESSION["Role"] = "Employee";

    echo "Session created for ".$_SESSION["Username"];
?>