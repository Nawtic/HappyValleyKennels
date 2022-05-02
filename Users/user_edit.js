function confirmation() {
    var oldFirst = document.getElementById("oldFirst").innerHTML;
    var oldLast = document.getElementById("oldLast").innerHTML;
    var oldRole = document.getElementById("oldRole").innerHTML;

    var Message = "Are You Sure You Want To Make These Changes?";

    var form = document.forms["edit_form"].elements;
    var newFirst = form["first"].value;
    var newLast = form["last"].value;
    var newRole = form["role"].value;

    var changed = false; 

    if(oldFirst != newFirst){
        Message += "\n" + oldFirst + " ---> " + newFirst;
        changed = true;
    }
    if(oldLast != newLast){
        Message += "\n" + oldLast + " ---> " + newLast;
        changed = true;
    }
    if(oldRole != newRole){
        Message += "\n" + oldRole + " ---> " + newRole;
        changed = true;
    }

    if(changed){
        if(confirm(Message)){
            document.forms["edit_form"].submit();
        }
    } else {
        alert("No Fields Have Been Changed");
    }
}