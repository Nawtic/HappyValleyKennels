<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Confirmation Page</title>
    <link href="styleheader.css" rel="stylesheet" / >
  </head>

  <style>
 {
  box-sizing: border-box;
  
}

.row {
  display: flex;
}

/* Create two equal columns that sits next to each other */
.column {
  flex: 70%;
  padding: 0px;
  
}
</style>


  <body>
  <div id="Page_Header">
            <a href="../Home">Happy Valley Kennels</a>
        </div>

        <ul id="Nav_Bar">
            <li><a href="../Home">Home</a></li>
            <li ><a href="../About">About</a></li>
            <li ><a href="../FAQ">FAQ</a></li>
            <li ><a href="../Contact">Contact</a></li>
            <li id="Profile_Button"><a href="../Profile">Profile</a></li>
        </ul>
        <div class="container">  
      <center>  <h1> Confirmation Page</h1> </center>  
      <hr>  

        
          
    <form>  
      
    <h1>Confirmation</h1>
    <h2>Your visit has been scheculed with us!</h2>
    <img src="image.jpg" alt="confirmation" >

    <p>Please, confirm your visit by clicking the buttom below :)</p>

    <button onclick="myFunction()">Confirm</button>

    <p id="demo"></p>

    <script>
      function myFunction() {
        let text = "Confirm Your Visit!\nPress Ok or Cancel";
        if (confirm(text) == true) {
          text = "You pressed OK!";
        } else {
          text = "You canceled!";
        }
        document.getElementById("demo").innerHTML = text;
      }
    </script>
    <hr>
    </article>
    <left>

    <aside class="column" style="background-color:light-gray;" >
    
    
      <div>
        <ol>
            <li>Dogs should be wearing a collar with ID tags. </li>
            <li> Food, treats and any supplements. Give specific instructions on amounts and when to feed. Some kennels provide food, but this may upset your pet's stomach.</li>
            <li>Medication - if your pet is on any medicine, pack enough for the duration of the stay plus a few extra days. Bring written dosage instructions for the kennel.</li>
            <li>Favorite play toys and chew toys.</li>
            <li>Bed or blanket - this helps your pet feel more at home.</li>
            <li>Anything else that might make your dog or cat feel safe, such as an old t-shirt.</li>
            <li>Proof of vaccination.</li>
    </ol>
    </aside>
    </left>
    
        


  </body>
</html>
