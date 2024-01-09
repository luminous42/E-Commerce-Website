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
        <div class="nav-sec">
            <ul id="navbar">

                <li><a class="active" href="index.php"> Home</a></li>
                <li><a href="shop.php">  Shop</a></li>
               

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


   
    <section id='hero'>
        <form action="search_accounts.php" method="get">
            <div class="input-group me-lg-3">
                <input type="search" name="search_data" placeholder="Enter Keyword" id="searchProds"
                    class="form-control search_input" >
                <button type="submit" value="Search" class="search" id="" name="Search_data_ac">
                    <i class="fas fa-search" id="search"></i>
                </button>

            </div> 
        </form>

        <h2>KIcKeR Mobile Legends</h2>
        <h1>Shop</h1>
        <p style="color:#fff;">Get best price for diamonds, best accounts 
         <br>and even easy & safe boosting services!</p>
        <a href="shop.php"> <button class="button">Shop now </button></a>
    </section>

 <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f3.png" alt="" class="fe-img">
                <h6>Accounts Market</h6>          
            <a href="shop.php">
                <span class="link"></span>
            </a>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="" class="fe-img">
            <h6> Boost Rank</h6>
             <a href="rank-boost.php">
                <span class="link"></span>
            </a>
        </div>
        <!-- <div class="fe-box">
            <img src="img/features/f3.png" alt="" class="fe-img">
            <h6> Buy Skin</h6>
        </div> -->
        <div class="fe-box">
            <img src="img/features/f22.png" alt="" class="fe-img">
            <h6> Diamond Top Up </h6>
             <a href="top-up.php">
                <span class="link"></span>
            </a>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="" class="fe-img">
            <h6> Buy Verified Squads</h6>
             <a href="buy-squad.php">
                <span class="link"></span>
            </a>
        </div>
        <!-- <div class="fe-box">
            <img src="img/features/f6.png" alt="" class="fe-img">
            <h6> Buy Accounts</h6>
        </div> -->
    </section>

   <section id="product1" class="section-p1">
        <h2>Featured Accounts</h2>
        <p>New Accounts with 400+ Skins</p>
        <div class="pro-container">
           <?php
                getaccounts();
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
   
    <!-- <a  class="whats-app" href="https://chat.whatsapp.com/HjrRXAC91750WPe3ihtjfA" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a> -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6475ffadad80445890effa0b/1h1metfpa';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>