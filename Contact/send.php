<?php
    $dateAndTime = date("d-m-Y_H-i-s");
    $message = fopen("Messages/".$dateAndTime.".txt", "w");

    $messageContent = "Date: ".$dateAndTime."Name: ".$_POST["Name"]."\nPhone: ".$_POST["Phone"]."\nEmail: ".$_POST["Email"]."\nSubject: ".$_POST["Subject"]."\nMessage: ".$_POST["Message"];

    fwrite($message, $messageContent);

    echo("Your message has been successfully sent.");
?>