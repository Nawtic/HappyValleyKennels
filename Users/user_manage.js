function addUser() {
    document.getElementById("options_menu").classList.add("hide");
    document.getElementById("add_menu").classList.remove("hide");
}

function mainMenu() {
    document.getElementById("options_menu").classList.remove("hide");
    document.getElementById("add_menu").classList.add("hide");
    document.getElementById("edit_menu").classList.add("hide");
}

function editMenu() {
    document.getElementById("options_menu").classList.add("hide");
    document.getElementById("edit_menu").classList.remove("hide");
}


function validate(sender) {
    try {
        inputElement = document.getElementById(sender);
        inputValue = inputElement.value;

        if (inputValue == "") {
            inputElement.classList.add("input_error");
            document.getElementById("empty_error").classList.remove("hide");
        } else {
            try {
                inputElement.classList.remove("input_error");
                document.getElementById("empty_error").classList.add("hide");
            } catch {

            }
        }
        
    } catch {

    }

}