<?php
include($_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Header/Header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Confirmation Page</title>
  <link href="styleheader.css" rel="stylesheet" />
</head>

<style>
  .row {
    display: flex;
  }

  /* Create two equal columns that sits next to each other */
  .column {
    flex: 70%;
    padding: 0px;

  }

  #item_list{
    text-align: left;
  }
</style>


<body>
  <div class="container" id="Page_Content">
    <center>
      <h1> Confirmation Page</h1>
    </center>
    <hr>



    <form>

      <h1>Confirmation</h1>
      <h2>Your visit has been scheculed with us!</h2>
      <img src="image.jpg" alt="confirmation">

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

        <aside class="column" style="background-color:light-gray;">


          <div id="item_list">
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
    </form>
  </div>




</body>

</html>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Footer/Footer.php");
?>