
function imgclick() {
    base = 0;
    increment = true;

    try {
        document.getElementById("secret_input").remove();
    } catch { }

    input = document.createElement("input");
    input.id = "secret_input";
    input.setAttribute("onkeydown", "enter(this)");
    input.style = "margin: 1%";

    document.getElementById("Page_Header").appendChild(input)
}

function enter(text) {
    if (event.key == "Enter") {
        var entry = text.value.split(" ");

        if (entry[0] == "redalert") {
            setInterval(change, 25);
        } else if (entry[0] == "doggone") {
            try {
                document.getElementById("Home_Image_1").remove()
            } catch { }

        } else if (entry[0] == "getahead") {
            document.getElementById("Header_Text").innerHTML = "";

            entry[0] = "";

            for (word of entry) {
                document.getElementById("Header_Text").innerHTML += (word + " ");
            }
        } else if (entry[0] == "speen") {
            degree = 0;
            setInterval(speen, 25);
        }
        else if (entry[0] == "movingday") {
            document.getElementById("Header_Text").style.transform += "translate(" + entry[1] + "px, " + entry[2] + "px)";
        }
        else if ((entry[0] + " " + entry[1]) == "dee bug") {
            window.location.href = "/HappyValleyKennels/assets/debug.php";
        }

        document.getElementById("secret_input").remove();
    }
}

function change() {

    document.getElementById("Nav_Bar").style.backgroundColor = "rgb(255, " + base + ", " + base + ")";
    document.querySelector(".active").style.backgroundColor = "rgb(255, " + (base + 50) + ", " + (base + 50) + ")";
    document.getElementById("Page_Header").style.backgroundColor = "rgb(255, " + (base + 20) + ", " + (base + 20) + ")";
    document.getElementById("Page_Content").style.backgroundColor = "rgb(255, " + (base + 90) + ", " + (base + 90) + ")";
    document.getElementById("Profile_Button").style.backgroundColor = "rgb(255, " + (base + 90) + ", " + (base + 90) + ")";

    if (increment) {
        base += 1;
    }
    else {
        base -= 1;
    }

    if (base >= 165) {
        increment = false;
    } else if (base <= 0) {
        increment = true;
    }
}

function speen() {
    document.getElementById("Header_Text").style.transform += "rotate3d(1, 1, 1, " + degree + "deg)";

    degree += 1;
}