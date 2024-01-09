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
<section class="section-p1">
    <div class="top-up">




<h6>Note: All the squads below are binded with ONLY a moonton email & a smurf account.
</h6>
<p>
    <li>Myanmar #41:   750€</li>
    <li>Singapore #21: 850€</li>
    <li>Singapore #23: 800€</li>
    <li>Malaysia #10: 850€</li>
    <li>Turkey #07: 750€</li>
    <li>Turkey #08: 750€</li>
    <li>Indonesia #25: 850€</li>
    <li>Indonesia #31: 750€</li>
    <li>Indonesia #33: 750€</li>
    <li>Indonesia #35: 750€</li>
    <li>Indonesia #36: 750€</li>
    <li>Indonesia #38: 850€</li>
<li>UK #02: 850€ </li>
<li>UK #08: 800€</li>
<li>UK #09: 800€</li>



</p><p>

<h5>Important Notice: Due to the recent update of moonton, the mechanics for buying squads are changed and will be as follows:</h5>

<h6>Surrendering Smurf Account Method:</h6>
<ol>
    <li>Seller will take buyers email [Fresh email OR Email that isn't bind to any moonton account] No login required, only email.</li>
    <li>Seller will change the moonton email within the account center in-game following with a code sent to buyer's new email.</li>
    <li>Buyer will provide the confirmation code from his email and give it to the seller to confirm binding of the buyer's email provided</li>
    <li>Seller will confirm with a screenshot that the buyer's email is binded & will provide the crendentials to buyer to login.</li>
    <li>Buyer will login & confirm the squad.</li>
</ol>


</p>
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