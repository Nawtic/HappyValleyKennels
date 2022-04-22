<?php
    include "../assets/Header/Header.php";
?>

<html>
    <body>
        <div id="Page_Content">
            <?php echo("Successfully signed in ".$_SESSION["Role"]." ".$_SESSION["First Name"]." ".$_SESSION["Last Name"]." with ID ".$_SESSION["UserID"]); ?>
        </div>
    </body>
</html>

<?php
    include "../assets/Footer/Footer.php";
?>