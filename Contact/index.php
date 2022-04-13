<!-- Page Credit: Mauricio Alfaro -->

<?php
include "../assets/Header/Header.php";
?>

<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="Page_Content">
        <div class="container">
            <h1>Contact Us</h1>
            <p>In our kennel we will be pleased to help you if any problem may occur with any of our services. Feel free
                to get in touch with us.</p>
            <div class="contact-box">
                <div class="contact-left">
                    <h3>Send Us Your Request</h3>
                    <form action="send.php" method="POST">

                        <div class="input-row">
                            <div class="input-group">
                                <label>Name</label>
                                <input name="Name" class="text-input" type="text" placeholder="Mauricio Alfaro">
                            </div>
                            <div class="input-group">
                                <label>Phone</label>
                                <input name="Phone" class="text-input" type="text" placeholder="+1 453 340 3213">
                            </div>
                            <div class="input-group">
                                <label>Email</label>
                                <input name="Email" class="text-input" type="email" placeholder="chiky1496@gmail.com">
                            </div>
                            <div class="input-group">
                                <label>Subject</label>
                                <input name="Subject" class="text-input" type="text" placeholder="Product demo">
                            </div>
                            <div class="input-group">
                                <label>Message</label>
                            </div>
                        </div>

                        <textarea name="Message" cols="70" rows="5" placeholder="Type your message"></textarea>
                        <button id="contact_submit" type="submit">SEND</button>
                    </form>
                </div>
                <div class="contact-right">
                    <h3>Reach us</h3>

                    <table>
                        <tr>
                            <td>Email</td>
                            <td>kennelcustomersupport@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td>+1 012 345 6754</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td> 1 University Dr <br>
                                Campbellsville University <br>
                                42718 </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
    include "../assets/Footer/Footer.php";
?>