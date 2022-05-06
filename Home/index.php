<?php
$page_creator = "Stephen Erichsen";

include "../assets/Header/Header.php";
?>

<!-- Page Credit: Stephen Erichsen-->

<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="Home.css">
</head>

<body>

    <div id="Page_Content">
        <div id="row-1">
            <div id="Intro_Text_Box">
                <div id="Image_Box">
                    <img id="Home_Image_1" src="../assets/images/labrador-retriever-1210559_960_720.jpg">
                    <a href="https://pixabay.com/photos/labrador-retriever-dog-pet-1210559/">Click For Image Source</a>
                </div>
                <div>
                    <!-- Note: Replace filler text during project -->
                    <p>We are <span id="Happy_Valley_Emphasized" onclick="clicker()">Happy Valley Kennels</span>...</p>
                    <p>A home away from home for your furry friends! Got somewhere you need to be, but can't bring your companion along for the journey? Entrust your beloved companion with our caring staff composed of trained veterinarians and care staff. If you'd like to learn more about us, please consult the <a href="../About/">About page</a>, or <a href="../Contact/">Contact us directly and schedule a visit.</a> We hope to see you soon!</p>
                </div>
            </div>
        </div>

        <div id="row-2">
            <div>
                <p>Interested in our services? Have a question?</p>
                <p><a href="/HappyValleyKennels/Sign Up">Make an Account</a> or <a href="../Contact">Reach out to Us</a></p>
            </div>
        </div>
    </div>

</body>

</html>

<?php
include "../assets/Footer/Footer.php";
?>