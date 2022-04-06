<?php
    include "../assets/Header/Header.php";
?>

<!-- Page Credit: Stephen Erichsen-->

<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Home.css">
        <script src="home.js"></script>
    </head>

    <body>
        
        <div id="Page_Content">
            <div id="row-1">
                <div>
                    <img id="Home_Image_1" src="../assets/images/labrador-retriever-1210559_960_720.jpg">
                    <!-- Note: Add image credit: "https://pixabay.com/photos/labrador-retriever-dog-pet-1210559/" -->
                </div>
                <div id="Intro_Text_Box">
                    <!-- Note: Replace filler text during project -->
                    <p>We are <span id="Happy_Valley_Emphasized" onclick="clicker()">Happy Valley Kennels</span>...</p>
                    <p>And this, is filler text. Filler text is used in situations where a design element, like this paragraph, has been created and positioned, but not assigned a value. This text will eventually be replaced by other text which is relevant to the final design, but for now it is just filler text.</p>
                    <p>This is also filler text, but in a different paragraph. So if you had two paragraphs worth of text you could place them in different paragraph. You could also place it in one paragraph but that could be difficult to read.</p>
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