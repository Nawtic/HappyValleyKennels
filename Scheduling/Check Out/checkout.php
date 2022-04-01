<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Check-Out</title>
    <link href="checkout_style.css" rel="stylesheet" />
    <link href="style_header_check.css" rel="stylesheet" />

    <script>
      function confirmation(){
        window.location.href = "Confirmation";
      }
    </script>

  </head>
  <body>
    <div id="Page_Header">
      <a href="../Home">Happy Valley Kennels</a>
    </div>

    <ul id="Nav_Bar">
      <li><a class="active" href="../Home">Home</a></li>
      <li><a href="../About">About</a></li>

      <li><a href="../FAQ">FAQ</a></li>
      <li><a href="../Contact">Contact</a></li>
    </ul>
    <div class="container">  
      <center>  <h1> Check-Out </h1> </center>  
      <hr>  
    <form method="post">
      <div class="row">
        <div class="col-75">
          <div class="container">
            <form action="/action_page.php">
              <div class="row">
                <div class="col-50">
                  <h3>Billing Address</h3>
                  <label for="fname"
                    ><i class="fa fa-user"></i> Full Name</label
                  >
                  <input
                    type="text"
                    id="fname"
                    name="firstname"
                    placeholder="John M. Doe"
                  />
                  <label for="email"
                    ><i class="fa fa-envelope"></i> Email</label
                  >
                  <input
                    type="text"
                    id="email"
                    name="email"
                    placeholder="john@example.com"
                  />
                  <label for="adr"
                    ><i class="fa fa-address-card-o"></i> Address</label
                  >
                  <input
                    type="text"
                    id="adr"
                    name="address"
                    placeholder="542 W. 15th Street"
                  />
                  <label for="city"
                    ><i class="fa fa-institution"></i> City</label
                  >
                  <input
                    type="text"
                    id="city"
                    name="city"
                    placeholder="New York"
                  />

                  <div class="row">
                    <div class="col-50">
                      <label for="state">State</label>
                      <input
                        type="text"
                        id="state"
                        name="state"
                        placeholder="NY"
                      />
                    </div>
                    <div class="col-50">
                      <label for="zip">Zip</label>
                      <input
                        type="text"
                        id="zip"
                        name="zip"
                        placeholder="10001"
                      />
                    </div>
                  </div>
                </div>

                <div class="col-50">
                  <h3>Payment</h3>
                  <label for="fname">We Accept All Type of Cards</label>
                  <div class="icon-container">
                    <i class="fa fa-cc-visa" style="color: navy"></i>
                    <i class="fa fa-cc-amex" style="color: blue"></i>
                    <i class="fa fa-cc-mastercard" style="color: red"></i>
                    <i class="fa fa-cc-discover" style="color: orange"></i>
                  </div>
                  <label for="cname">Name on Card</label>
                  <input
                    type="text"
                    id="cname"
                    name="cardname"
                    placeholder="Name on the card"
                  />
                  <label for="ccnum">Credit card number</label>
                  <input
                    type="text"
                    id="ccnum"
                    name="cardnumber"
                    placeholder="1111-2222-3333-4444"
                  />
                  <label for="expmonth">Exp Month</label>
                  <input
                    type="text"
                    id="expmonth"
                    name="expmonth"
                    placeholder="September"
                  />

                  <div class="row">
                    <div class="col-50">
                      <label for="expyear">Exp Year</label>
                      <input
                        type="text"
                        id="expyear"
                        name="expyear"
                        placeholder="2022"
                      />
                    </div>
                    <div class="col-50">
                      <label for="cvv">CVV</label>
                      <input
                        type="text"
                        id="cvv"
                        name="cvv"
                        placeholder="352"
                      />
                    </div>
                  </div>
                </div>
              </div>

              <button type="button" class="btn" onclick="confirmation()">Continue to Confirmation</button>
            </form>
          </div>
        </div>
      </div>
    </form>
  </body>
</html>
