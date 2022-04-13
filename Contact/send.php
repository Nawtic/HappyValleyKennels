<?php
include("../assets/Header/Header.php");

try {
    $dateAndTime = date("d-m-Y_H-i-s");
    $filepath = "Messages/".$dateAndTime.".xml";

    $metaAttributes = array("date" => $dateAndTime, "subject" => $_POST["Subject"]);
    $attributes = array("email" => $_POST["Email"], "phone" => $_POST["Phone"]);

    $file = fopen($filepath, "w");

    $writer = new XMLWriter();
    $writer -> openMemory();
    
    $writer -> setIndent(1);
    $writer -> setIndentString('    ');

    $writer -> startDocument('1.0', 'utf-8');

    $writer -> startElement("message");
    foreach($attributes as $key => $val) {
        $writer -> startAttribute($key);
        $writer -> text($val);
        $writer -> endAttribute();
    }

    $writer -> startElement("sender");

    foreach($attributes as $key => $val) {
        $writer -> startAttribute($key);
        $writer -> text($val);
        $writer -> endAttribute();
    }

    $writer -> text($_POST["Name"]);   
    $writer -> endElement();

    $writer -> startElement("content");
    $writer -> text($_POST["Message"]);
    $writer -> endElement();

    $writer -> endElement();

    
    $writer->endDocument();

    fwrite($file, $writer -> outputMemory());

    echo("<div id=\"Page_Content\"><h1>Success</h1><p>Your message has been successfully sent. <br> We will get back to you as soon as we can.</p></div>");
}

catch (Exception $error){
    echo("<h1>Error</h1><p>Your message could not be sent, please try again later.</p>");
}

include("../assets/Footer/Footer.php");

?>