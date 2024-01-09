<?php
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
</head>

<body>
    <!-- nav bar -->

    <section id="header">
        <div class="logo-sec"><a href="index.php"><img src="img/logo.png" class="logo"> KIcKeR ML Shop </a></div> 
        <div>
            <ul id="navbar">

                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>


              <li class="nav-item dropdown">

                    <a class="nav-link " href="#"  data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Services</a>
                       <div class="dropdown-menu dropdown-menu-dark">
                        <a class="dropdown-item" href="shop.php">Account Market</a>
                        <a class="dropdown-item " href="top-up.php">Diamond Top Up</a>
                        <a class="dropdown-item " href="rank-boost.php">Boost Rank</a>
                        <a class="dropdown-item " href="buy-squad.php">Buy Verified Squads</a>
                    </div>
                </li>
                
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <!-- <li><a><i class="fa-solid fa-magnifying-glass"></i></a></li> -->
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>

        </div>
        <div id="mobile">
            <i id="bar" class="fa-solid fa-bars"></i>

        </div>
    </section>
    <section id='page-header'>


        <h2>#GamerMarket </h2>
        <p>The most affordable account buying platform!</p>

    </section>

    <section id="product1" class="section-p1">
        <div class="shop-search">
<form action="search_accounts.php" method="get">
            <div class="input-group lg">
                <input type="search" name="search_data" placeholder="Enter Keyword" 
                    class="form-control search_input" >
                <button type="submit" value="Search" class="search" id="" name="Search_data_ac">
                    <i class="fas fa-search" id="search"></i>
                </button>
</div> 
        </form>
        
            
</div>
        <div class="pro-container">


<!-- Fetching Accounts -->
<?php
//getting all accounts
   getallaccounts();

?>

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


   <a  class="whats-app" href="https://chat.whatsapp.com/HjrRXAC91750WPe3ihtjfA" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
</body>

</html>