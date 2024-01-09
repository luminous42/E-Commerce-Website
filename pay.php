<?php include('./includes/config.php');
include('./includes/connect.php');
include('functions/common_function.php');

      if(!isset($_SESSION['mobile'])) 
      {
      	 header('location:index.php');
      	 exit();
      }
      else 
      {
        $ac_id=$_SESSION['ac_id'];

      }
      include("gateway-config.php");

      ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> KIcKeR ML Shop</title>
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
        <a href="#"><img src="img/logo.png" class="logo"> KIcKeR ML Shop </a>
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
$firstname=$_SESSION['fname']; 
$lastname=$_SESSION['lname'];
 $email=$_SESSION['email'];
$mobile=$_SESSION['mobile'];
$address=$_SESSION['address'];



 ?>

 
    <section id="product1" class="section-p1">
<h2>Payment</h2>   <br>     
 <div class="pro-container">
<div class="col1" > 
    
<h4 style="padding-top:30px">(Payer Details)</h4>
  
   <p> First Name :- 
     <?php echo $firstname; ?></p>
 
  
   <p> Last Name:- 
      <?php echo $lastname; ?></p>
  

  
   <p> Email:- 
      <?php echo $email; ?></p>
  
  
    <p>Mobile:- 
      <?php echo $mobile; ?></p>
    
  
    <p>Address:- 
    <?php echo $address; ?></p>
   <div class="row"> 
					
	<div class="col-4">
    <?php
//getting account
   global $con;



 $select_query= "select * from `accounts` where ac_id=$ac_id";
        $result_query= mysqli_query($con,$select_query);       
        while($row=mysqli_fetch_assoc($result_query)) {
        $ac_id=$row['ac_id'];
        $ac_name=$row['ac_name'];
        $price=$row['price'];
        $win_rate=$row['win_rate'];
        $description=$row['description'];
        $imgfile1=$row['imgfile1'];
        $imgfile2=$row['imgfile2'];
        $imgfile3=$row['imgfile3'];
        $imgfile4=$row['imgfile4'];
        $b_skins=$row['b_skins'];
        $status=$row['status'];?>
        
				 
        <form action="<?php echo PAYPAL_URL; ?>" method="post" class="form-container price">
          <!-- Identify your business so that you can collect the payments. -->
          <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
          <!-- Specify a Buy Now button. -->
          <input type="hidden" name="cmd" value="_xclick">
          <!-- Specify details about the item that buyers will purchase. -->
          <input type="hidden" name="item_name" value="<?php echo $ac_name;?> ">
          <input type="hidden" name="item_number" value="<?php echo $ac_id;?> ">
          <input type="hidden" name="amount" value="<?php echo $price; ?>">
          <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">
          <!-- Specify URLs -->
          <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
          <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">
          <input type="hidden" name="notify_url" value="<?php echo PAYPAL_NOTIFY_URL; ?>">
          <td><input type="hidden" class="form-control" value="<?php echo $firstname;?>" readonly/></td>
            <td><input type="hidden" class="form-control" value="<?php echo $lastname;?>" readonly/></td>
            <td><input type="hidden" class="form-control" value="<?php echo $email;?>" readonly/></td>
             <input type="hidden" name="custom" value="mob=<?php echo $mobile;?>&add=<?php echo $address;?>"/>
            <input type="submit" name="submit" class="btn-po" value="Pay Now" >
      </form>
	</div>
        
</div>

</div>
<!-- Fetching Accounts -->
<div class="col d-flex justify-content-center" >
<?php
        
        echo '  <div class="pro" style="width:30vw";>
                        <img src="./Admin/account_images/'.$imgfile1.'" alt="">
                        <div class="des">
                            <span>'.$ac_name.'</span>
                            <h5>'.$description.'</h5>
                            <h4>' .$row['price'].' '.PAYPAL_CURRENCY.'</h4>
                        </div>

        
                    </div>
                ';
        }        

?>
 

      </div>
    </section>





</body>
</html>