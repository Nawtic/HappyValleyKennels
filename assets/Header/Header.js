function showDropdown() {
    document.getElementById("dropdown_items").classList.toggle("show");
}


function hideDropdown(){
    document.getElementById("dropdown_items").classList.remove("show");
}

function setActive() {
    //Get current url
    var url = window.location.href;
    
    //Split url into list
    var splitUrl = url.split("/");

    //Get current directory name from url list
    var currentPage = splitUrl[4];

    document.getElementById(currentPage).classList.toggle("active");

    var subpage = splitUrl[5]; 

    //Activate if a subpage is open
    if(subpage != undefined){
        document.getElementById(subpage).classList.toggle("subActive");
    }
}