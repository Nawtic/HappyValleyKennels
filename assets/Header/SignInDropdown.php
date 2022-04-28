<!-- Dropdown by Stephen Erichsen -->

<div id="dropdown_items">
    <div>
        <div id="sign_in_options">
            <button id="customer_sign_in_button" class="hide" onclick="toggleSignIn()">Customer Sign In</button>
            <button id="employee_sign_in_button" onclick="toggleSignIn()">Employee Sign In</button>
        </div>

        <form id="customer_sign_in">
            <a href="/HappyValleyKennels/Sign In/index.php">Customer Sign In</a>
        </form>
        

        <form id="employee_sign_in" class="hide" action="/HappyValleyKennels/Employee Sign In/index.php" method="post">
            <p>Employee ID</p>
            <input class="field" type="text" name="ID"><br>

            <p>Password</p>
            <input class="field" type="password" name="Password"><br>
            <div id="Submit_Container">
                <input id="Submit_Button" type="submit" value="Sign In">
            </div>
        </form>
    </div>
</div>