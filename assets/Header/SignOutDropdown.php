<!-- Dropdown by Stephen Erichsen -->

<div id="dropdown_items">
    <?php
        if(isset($_SESSION["Role"]) AND ($_SESSION["Role"] != "Customer")){
            echo("<a href=\"\\HappyValleyKennels\\Employee Sign In\\Reset.php\">Reset Password</a>");
        }
    ?>
    <a href="/HappyValleyKennels/Sign Out">Sign Out</a>
</div>