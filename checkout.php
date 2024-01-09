<?php
include('./includes/config.php');
include('./includes/connect.php');
include('functions/common_function.php');
$ac_id=$_GET['ac_id'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> KIcKeR ML Shop </title>
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





			

<?php 
if(isset($_POST['submit_form']))
{
$_SESSION['fname']=$_POST['fname']; 
$_SESSION['lname']=$_POST['lname']; 
$_SESSION['email']=$_POST['email']; 
$_SESSION['mobile']=$_POST['mobile']; 
$_SESSION['address']=$_POST['address']; 
$_SESSION['ac_id']=$ac_id;
if($_POST['mobile']!='')
{
header("location:pay.php");
}
}
?>		
				
	





    <section id="product1" class="section-p1">
<h2 style="font-family:'Poppins', sans-serif ;">Check Out</h2>   <br>     
 <div class="pro-container">
<div class=""> 
<form action="" method="POST" class="checkout-form">
  <div class="mb-5 mt-5">
    
    <input type="text" class="form-control" name="fname" placeholder="First Name" required>
  </div>
  <div class="mb-5">
    <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
  </div>

  <div class="mb-5">
    <input type="email" class="form-control" name="email" placeholder="Email" required>
  </div>
  <div class="mb-5">
    <input type="text" class="form-control" name="mobile" placeholder="Mobile" required>
  </div>
  <div class="mb-5">
   <textarea name="address" class="form-control" name="address" placeholder="Address" required></textarea>
  </div>
   <button type="submit" class="btn-po" name="submit_form" >Place Order</button>
</div>
<!-- Fetching Accounts -->
<div class="col d-flex justify-content-center" >
<?php
//getting account
   checkoutaccount();

?>
</div>
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
</body>

</html>