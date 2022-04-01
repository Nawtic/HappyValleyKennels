var clicks = 0;

function clicker(){
    if (clicks >= 10){
        window.location.href = "Secret";
        
    }
    else {
        clicks += 1;
    }
}