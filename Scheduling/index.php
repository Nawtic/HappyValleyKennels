<?php
  include("../assets/Header/Header.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Schedule Your Visit</title>
    <link href="styleheader.css" rel="stylesheet" />
    <link href="formstyle.css" rel="stylesheet" />
  </head>
  
  <body>
    
    <form action="Check Out/checkout.php">  
      <div class="container">  
      <center>  <h1> Schedule Your Visit With Us</h1> </center>  
      <hr>  
      <label> Owner's Name </label>   
    <input type="text" name="firstname" placeholder= "Your Name" size="15" required />   

    <label for="email">Email</label>  
    <input type="text" placeholder="Enter Email" name="email" required>  
           
    <label> Dog's Name </label>   
    <input type="text" name="middlename" placeholder="Your Dog Name" size="15" required />   
    <label> Breed of the Dog </label>    
    <input type="text" name="lastname" placeholder="Breed" size="15"required />
    <div>  
      <label>   
      Gender :  
      </label><br>  
      <input type="radio" value="Male" name="gender" checked > Male   
      <input type="radio" value="Female" name="gender"> Female   
      

      <div>  
        <label>   
        Size :  
        </label>   
          
        <select>  
        <option value="Course">Small</option>  
        <option value="BCA">Medium</option>  
        <option value="BBA">Big</option>  
        <option value="B.Tech">Extra Big</option>  
         
        </select>  
        </div>  
     
        
      </div>  
    <label>   
      Phone Number :  
      </label>  
      <input type="text" name="country code" placeholder="Country Code"  value="+1" size="2"/>   
      <input type="text" name="phone" placeholder="phone no." size="10"/ required>   
      Current Address :  
      <textarea cols="80" rows="5" placeholder="Current Address" value="address" required>  
      </textarea>  

      <label>
      Chek-In Date :
      </label>
        <input type="date" id="dob" />
        <p></p>

      <label>
          Chek-Out Date :
          </label>
            <input type="date" id="dob" />

            <script>
              function viewdate() {
                var x = document.getElementById("dob").value;
                document.getElementById("demo").innerHTML = x;
              }
            </script>
        
        <button type="submit" class="registerbtn">Submit</button>    
    </form>  
    
  </body>
</html>

<?php
  include("../assets/Footer/Footer.php");
?>