<?php require_once("./includes/config.php"); 
include('./includes/connect.php');
    include("gateway-config.php");
sleep(2);
if(!empty($_GET['tx']) && !empty($_GET['amt']) && !empty($_GET['cc']) && !empty($_GET['st'])){
    // Get transaction information from URL
    $item_number = $_GET['item_number']; 
    $txn_id = $_GET['tx'];
    $payment_gross = $_GET['amt'];
    $currency_code = $_GET['cc'];
    $payment_status = $_GET['st'];
   $sql="SELECT count(*) from payments WHERE txnid=:txnid"; 
       $stmt = $db->prepare($sql);
           $stmt->bindParam(':txnid', $txn_id, PDO::PARAM_STR);
           $stmt->execute();
         $pay_count=$stmt->fetchcolumn();
    if($pay_count > 0){
    $rows= $sql="SELECT * from payments WHERE txnid=:txnid"; 
         $stmt = $db->prepare($sql);
           $stmt->bindParam(':txnid',$txn_id,PDO::PARAM_STR);
            $stmt->execute();
           $rows=$stmt->fetchAll();
    foreach($rows as $paymentRow){
        $payid= $paymentRow['payid'];
        $amount = $paymentRow['amount'];
        $status = $paymentRow['status'];
            $email = $paymentRow['payer_email'];
            $firstname = $paymentRow['firstname'];
            $lastname = $paymentRow['lastname'];
            //$payer_id = $paymentRow['payer_id'];
          $currency = $paymentRow['currency'];
          $dbdate = $paymentRow['payment_date'];
          $ac_id= $paymentRow['ac_id'];
           $mobile = $paymentRow['mobile'];
            $address = $paymentRow['address'];

    }
    }/*else{
        // You can insert transaction data here without IPN
    }*/
}

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
    <!-- tawk.to api start -->
<script type="text/javascript" src="https://tawk.to/public/scripts/jquery.js"></script>
<script type="text/javascript" src="https://tawk.to/public/scripts/page.js"></script>
    <script type="text/javascript">

			var Tawk_API = {
				onLoad: function(){
					var dataObj = parseQueryString();

					if (dataObj.tags !== undefined) {
						Tawk_API.addTags(dataObj.tags);
					}

					if (dataObj.event !== undefined) {
						if (dataObj.attrLength !== 0) {
							Tawk_API.addEvent(dataObj.event, dataObj.attributes);
						} else {
							Tawk_API.addEvent(dataObj.event);
						}
					};

					$('#tawk-maximize').click(function(){
						Tawk_API.maximize();
					});

					$('#status').parent().prepend('<i class="fa fa-circle"></i>');
				},
				onStatusChange: function(status){
					$('#status').text(status)
					.parent()
					.removeClass('online offline away')
					.addClass(status);

					if (status === 'online') {
						$('.status').show();
					} else {
						$('.status').hide();
					}
				}
			};
			var Tawk_LoadStart = new Date();
			(function(){
				var s1 = document.createElement("script"),
					s0 = document.getElementsByTagName("script")[0];

				s1.async = true;
				s1.src = 'https://embed.tawk.to/6475ffadad80445890effa0b/1h1metfpa';
				s1.charset = 'UTF-8';
				s1.setAttribute('crossorigin','*');
				s0.parentNode.insertBefore(s1, s0);
			})();

			function faviconError(el) {
				$(el).hide();
				$(el).next().show();
			}
		</script>

<!-- tawk.to api end -->
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
                        <a class="dropdown-item" href="shop.php">Buy Account</a>
                        <a class="dropdown-item " href="top-up.html">Top Up</a>
                        <a class="dropdown-item " href="rank-boost.html">Rank Boost</a>
                        <a class="dropdown-item " href="buy-skins.html">Buy Skins</a>
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




<section id="product1" class="section-p1">

 <h2>Payment Status</h2>   <br>     
 <div class="payment_box" style="display:flex; flex-wrap:wrap;">
    <div class="col1" > 
    
    <?php

if(!empty($payid))
{
$subject='Payment Successful. ';
  if($txn_id!=''){
        echo ' <h3 style="color:#33FF00";>'.$subject.'</h3>
        <h3> <a href="https://chat.whatsapp.com/HjrRXAC91750WPe3ihtjfA" target="_blank"><u>Message us</u></a> to claim the account</h3>   <hr>';

        echo '<div class="table-responsive"><table class="table" style="color:white;">'; 
        echo '<tr> '; 
echo '<tr>  
          <th>Transaction ID:</th>
        <td>'.$txn_id.'</td> 
    </tr>
     <tr> 
        <th>Paid Amount:</th>
        <td>'.$amount.' '. $currency.'</td> 
    </tr>
    <tr>
       <th>Payment Status:</th>
        <td>'.$status.'</td> 
   </tr>
   <tr> 
       <th>Payer Email:</th>
       <td>'.$email.'</td> 
   </tr>
    <tr> 
       <th>Name:</th>
       <td>'.$firstname.' '.$lastname.'</td>
   </tr>
   <tr> 
       <th>Mobile No:</th>
       <td>'.$mobile.'</td> 
   </tr>

   <tr> 
       <th>Address:</th>
       <td>'.$address.'</td>
   </tr>
   

   <tr>
       <th>Date :</th>
       <td>'.$dbdate.'</td> 
  </tr>
  </table> </div>';
}

}
else
{
    $html = "<p><div class='errmsg'>Invalid Transaction. Please Try Again</div></p>
             ";
             $error_found=1;
}
if(isset($html)){
echo $html;
}
?>
</div>


<!-- Fetching Accounts -->
<div class="col2 d-flex justify-content-center" >
 <?php 
          if(!isset($error_found)){
                    

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

        $status=$row['status'];
        
        echo "  <div class='pro' style='width:30vw';>
                        <img src='./Admin/account_images/$imgfile1' alt=''>
                        <div class='des'>
                            <span>$ac_name</span>
                            <h5>$description</h5>
                            <h4>$ $price</h4>
                        </div>

        
                    </div>
                ";
        }        



 
}
                ?> 
 

      </div>
      </div>
    </section>
    
    
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

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/4558e187e4.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
