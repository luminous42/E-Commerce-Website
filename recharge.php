<?php
session_start();

include('./includes/connect.php');
include('functions/common_function.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KIcKeR ML Shop</title>
  <!-- Bootstrap CSS link -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- CSS file link -->
  <link rel="stylesheet" href="style.css">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <style>
    form {
      max-width: 900px;
      margin: 0 auto;

      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      user-select: none;


    }

    .part2 label {

      padding: 20px 0px;
      text-align: center;


    }

    input,
    select {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;

      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 12px;

    }

    .qty input {
      text-align: center;
      border-top: 1px solid black;
      border-bottom: 1px solid black;
      border-right: none;
      border-left: none;
      border-radius: 0;
      margin-bottom: 0;
    }

    .qty input:focus {
      outline: none;
    }

    .recharge-option {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 15px;
      padding: 0px 20px;
      border: 1px solid rgb(237, 237, 237);
      border-radius: 10px;
    }


    .recharge-option input[type="number"] {
      width: 40px;
      height: 35px;

    }

    button[type="submit"] {
      
    background-color: #0a0a0a;
    padding: 10px 50px;
    border: none;
    border-radius: 5px;
    color: white;
    font-family: 'Poppins', sans-serif !important;

    }

    button[type="submit"]:hover {
      background-color: #0a0a0a;
      border: #fff 1px solid;
    }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    .qty {

      display: flex;
      align-items: center;
      border-radius: 5px;

    }

    .qty .button {
      width: 35px;
      height: 35px;
      padding: 6.7px 10px;
      background-color: #fff;
      border: 1px solid black;

      -webkit-user-select: none;
      /* Safari */
      -ms-user-select: none;
      /* IE 10 and IE 11 */
      user-select: none;
      /* Standard syntax */

      display: flex;
      align-items: center;
      justify-content: center;

    }

    .qty .button:active {
      background-color: #ccc;
    }

    .recharge-sec {
      display: flex;
      justify-content: center;
    }

    /* .parts {
  display:flex;
  justify-content: space-around;
    vertical-align: text-top;

} */
  </style>
</head>

<body>
  <!-- nav bar -->

  <section id="header">
    <div class="logo-sec"><a href="index.php"><img src="img/logo.png" class="logo"> KIcKeR ML Shop </a></div>
    <div class="nav-sec">
      <ul id="navbar">

        <li><a class="active" href="index.php"> Home</a></li>
        <li><a href="shop.php"> Shop</a></li>


        <li class="nav-item dropdown">

          <a class="nav-link " href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
          <div class="dropdown-menu dropdown-menu-dark">
            <a class="dropdown-item" href="shop.php">Account Market</a>
            <a class="dropdown-item " href="top-up.php">Diamond Top Up</a>
            <a class="dropdown-item " href="rank-boost.php">Boost Rank</a>
            <a class="dropdown-item " href="buy-squad.php">Buy Verified Squads</a>
          </div>
        </li>
        <li><a href="about.php"> About</a></li>
        <li><a href="contact.php"> Contact</a></li>
        <!-- <li><a><i class="fa-solid fa-magnifying-glass"></i></a></li> -->
        <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
      </ul>

    </div>
    <div id="mobile">
      <i id="bar" class="fa-solid fa-bars"></i>

    </div>
  </section>
  <section class="section-p1 recharge-sec">
    <div class="top-up">
      <h5>MLBB Diamond Top Up via Moonton Login</h5>

      <form action="" method="POST">
        <div class="parts">
          <div class="part1">
            <label for="name">Phone No:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Moonton Login:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Moonton Password:</label>
            <input type="password" id="password" name="password" required>
          </div>
          <div class="part2">
            <p>Diamond Recharge:</p>

            <div class="recharge-option">
              <label for="option1" id="price1">1155 💎 = 14€ </label>
              <div class="qty" id="qty1">
                <div class="dec button">-</div>
                <input type="number" id="option1" name="diamond_recharge_1" min="0" value="0">
                <div class="inc button">+</div>
              </div>
            </div>

            <div class="recharge-option">
              <label for="option2" id="price2">1765 💎 = 21€</label>
              <div class="qty" id="qty2">
                <div class="dec button">-</div>
                <input type="number" id="option2" name="diamond_recharge_2" min="0" value="0">
                <div class="inc button">+</div>
              </div>
            </div>

            <div class="recharge-option">
              <label for="option3" id="price3">2380 💎 = 28€</label>
              <div class="qty" id="qty3">
                <div class="dec button">-</div>
                <input type="number" id="option3" name="diamond_recharge_3" min="0" value="0">
                <div class="inc button">+</div>
              </div>
            </div>

            <div class="recharge-option">
              <label for="option4" id="price4">2975 💎 = 34€</label>
              <div class="qty" id="qty4">
                <div class="dec button">-</div>
                <input type="number" id="option4" name="diamond_recharge_4" min="0" value="0">
                <div class="inc button">+</div>
              </div>
            </div>

            <div class="recharge-option">
              <label for="option5" id="price5">4740 💎 = 54€</label>
              <div class="qty" id="qty5">
                <div class="dec button">-</div>
                <input type="number" id="option5" name="diamond_recharge_5" min="0" value="0">
                <div class="inc button">+</div>
              </div>
            </div>

            <div class="recharge-option">
              <label for="option6" id="price6">6000 💎 = 65€</label>
              <div class="qty" id="qty6">
                <div class="dec button">-</div>
                <input type="number" id="option6" name="diamond_recharge_6" min="0" value="0">
                <div class="inc button">+</div>
              </div>
            </div>

            <div class="recharge-option">
              <div id="price7"><label for="option7">12000 💎 = 125€</label></div>
              <div class="qty" id="qty7">
                <div class="dec button">-</div>
                <input type="number" id="option7" name="diamond_recharge_7" min="0" value="0">
                <div class="inc button">+</div>
              </div>
            </div>
          </div>
        </div>


        <button class="btn-op" type="submit" name="submit">Buy</button>
      </form>
      <h5>Process of Recharge</h5>
      <p>1. Enter your moonton email and password</p>
      <p>2. Order the required Amount</p>
      <p>3. After completing the payment message us</p>
      <p>4. We will respond immediately and complete the order within 2 hours</p>
      <h5>PROCESS TIME - UPTO 2 Hour</h5>
      <h5>LOGIN VIA - MOONTON / VK / FB / TIKTOK ✅
      </h5>
      <h5>P.S.: TURN OFF NEW DEVICE VERIFICATION</h5>

    </div>






  </section>


  <!-- include footer -->
  <?php
  include('includes/footer.php');
  ?>

  <!-- bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/4558e187e4.js" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <script>
    // for (var i = 1; i < 8; i++) {
    //   var quantity = "qty" + i;
    //   var price = "price" + i;


    //   const targetDiv = document.getElementById(quantity);
    //   const btn = document.getElementById(price);
    //   btn.onclick = function() {
    //     if (targetDiv.style.display == "none") {
    //       targetDiv.style.display = "flex";
    //     } else {
    //       targetDiv.style.display = "none";
    //     }
    //   }
    // }

    function showqty() {
      if (document.querySelector("option6").style.display !== "none") {
        document.querySelector("option6").style.display = "none";
      } else {
        document.querySelector("option6").style.display = "flex";
      }
    }


    var incrementButton = document.getElementsByClassName('inc');
    var decrementButton = document.getElementsByClassName('dec');

    //INCREMENT BUTTON
    for (var i = 0; i < incrementButton.length; i++) {
      var button = incrementButton[i];
      button.addEventListener('click', function(event) {
        var buttonClicked = event.target;
        // console.log(buttonClicked);
        var input = buttonClicked.parentElement.children[1];
        // console.log(input);
        var inputValue = input.value;
        // console.log(inputValue);
        var newValue = parseInt(inputValue) + 1;
        // console.log(newValue);

        input.value = newValue;


      })

    }


    //DECREMENT BUTTON
    for (var i = 0; i < decrementButton.length; i++) {
      var button = decrementButton[i];
      button.addEventListener('click', function(event) {
        var buttonClicked = event.target;
        // console.log(buttonClicked);
        var input = buttonClicked.parentElement.children[1];
        // console.log(input);
        var inputValue = input.value;
        // console.log(inputValue);
        var newValue = parseInt(inputValue) - 1;
        // console.log(newValue);
        if (newValue >= 0) {
          input.value = newValue;
        } else {
          input.value = 0;
        }
      })

    }
  </script>
</body>

</html>

<?php



// Function to retrieve the price for a given option
function getPriceForOption($option) {
  // Replace this with your own logic to retrieve the price for each option
  switch ($option) {
    case 1:
      return 14;
    case 2:
      return 21;
    case 3:
      return 28;
    case 4:
      return 34;
    case 5:
      return 54;
    case 6:
      return 65;
    case 7:
      return 125;
    default:
      return 0;
  }
}

include('./includes/connect.php');




// Assuming you have already established a database connection
 global $con;
// Retrieve form inputs
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];



// Initialize an array to store the chosen diamond recharge options and their quantities
$diamondRechargeOptions = array();

// Iterate over the submitted diamond recharge options
for ($i = 1; $i <= 7; $i++) {
  $optionName = 'diamond_recharge_' . $i;
  $quantity = intval($_POST[$optionName]);

  if ($quantity > 0) {
    $optionPrice = getPriceForOption($i); // Replace this with your own function to retrieve the price for a given option
    $totalPrice = $optionPrice * $quantity;

    $diamondRechargeOptions[] = array(
      'option' => $optionName,
      'quantity' => $quantity,
      'price' => $totalPrice
    );
  }
}

// Store the data in the database
// Perform the necessary database insertions using prepared statements or your preferred database library
// Replace 'your_table_name' with the actual table name in your database
$insert_query = "INSERT INTO `top-up` (name, email, password, total_price)
VALUES ('$name', '$email', '$password', '" . json_encode($diamondRechargeOptions) . "');";

$result_query= mysqli_query($con,$insert_query); 

if($result_query){
 echo"<script> window.alert('Data entered successfully'); </script> ";
}
else{
  echo"<script> window.alert('Something went wrong. Please try again.'); </script> ";
}
// Redirect the user to a success page or display a success message




}


?>
