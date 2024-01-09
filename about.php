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
                <li><a href="shop.php"> Shop</a></li>


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


<section id=#about class="section-p1" >
    <div class="about-us" >
        <div class="about-1">
        <h4> <center> Who We Are</center></h4>
        <p>Hello everybody, this is one of the few European shops that can provide best price for diamonds, best accounts and even easy & safe boosting services!
        </p>
        <p>
I started doing this for my friends, then for an entire Facebook group and then I just realised I can provide work for pilots and help people sell or buy accounts at reasonable prices.</p>

<div class="fe-about">

<div class="fe-box">

              <h6> We act as Midman Store</h6>
        </div>
 <div class="fe-box">

                <h6>100% Secured</h6>          
            
        </div>
        <div class="fe-box">
 
            <h6>300+ Customers</h6>
           
        </div>
       
        
        
</div>
</div>

<div class="about-1">
<h4> <center> What We Do </i>
             </center></h4>
<p><ol>
    <li>We find buyers and sellers for the accounts based on requirements.</li><br>

    <li>We secure the access to make sure there are no issue and if any issues occur we solve them to our best.</li><br>

    <li>We do not own any accounts personally. Each and every account on the website is posted from you guys and for you guys.</li><br>

    <li>We take necessary steps during and after the deal to make sure both parties stay safe.</li><br>
    <li>We take serious action against scammers and those who try to cheat and scam customers.</li> <br>
    <li>We help to get refund from sellers in worst case scenarios and help to cover any unfortunate loss as much as possible, but we do not refund ourselves.</li><br>
    <li>We are not liable if a customer loses his own account due to his own fault or greed.</li>



</ol> 
</p>
</div>
    </div>
</section>
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