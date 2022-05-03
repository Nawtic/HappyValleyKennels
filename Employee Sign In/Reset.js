show = false;

function show_password() {
    if(show == false){
        document.getElementById("password").setAttribute("type", "text");
        document.getElementById("password_reenter").setAttribute("type", "text");

        show = true;
    }
    else {
        document.getElementById("password").setAttribute("type", "password");
        document.getElementById("password_reenter").setAttribute("type", "password");

        show = false;
    }
}

function validate(sender) {
    try {
        inputElement = document.getElementById(sender);
        inputValue = inputElement.value;

        if (inputValue == "") {
            inputElement.classList.add("input_error");
            document.getElementById("error_text").innerHTML = "Password fields cannot be blank";
        } else {
            try {
                inputElement.classList.remove("input_error");
                document.getElementById("error_text").innerHTML = "";

                if (document.getElementById("password").value != document.getElementById("password_reenter").value){
                    document.getElementById("error_text").innerHTML = "Passwords must match";
                    document.getElementById("submit_button").disabled = true;
                } else {
                    document.getElementById("submit_button").removeAttribute("disabled");
                }

            } catch {

            }
        }
    } catch {

    }

}