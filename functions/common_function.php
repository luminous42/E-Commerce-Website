<?php
//include connect file
// include('includes\connect.php');


//getting accounts
function getaccounts(){
global $con;
 $select_query= "select * from `accounts` order by rand() limit 0,6";
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
        
        echo "  <div class='pro'>
                        <img src='./Admin/account_images/$imgfile1' alt=''>
                        <div class='des'>
                            <span>$ac_name</span>
                            <h5>$description</h5>
                            <h4>$price €</h4>
                        </div>
                       <i class='fa-solid fa-cart-shopping cart'></i>
            <a href='saccount.php?ac_id=$ac_id'>
                <span class='link'></span>
            </a>
                    </div>
                ";
        }        

}


//getting all accounts
function getallaccounts(){
global $con;
 $select_query= "select * from `accounts`";
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
            $color = ($status == 'Available') ? '#25c900' : 'red'; ?>
         <div class='pro' onclick="window.location.href='saccount.php?ac_id=<?php echo $ac_id ?>';">
                        <img src='./Admin/account_images/<?php echo"$imgfile1"?>' alt=''>
                        <div class='des'>
                            <span><?php echo "$ac_name"?></span>
                            <h6><span style='color:$color !important'><?php echo "$status"?></span></h6>
                            <h5><?php echo "$description"?></h5>
                            <h4><?php echo "$price €"?></h4>
                        </div>
              "?>         
            <!-- <a href='saccount.php?ac_id=$ac_id'> 
                <span class='link'></span>
            </a> -->
            <?php
             echo "<a href='saccount.php?add-to-cart=$ac_id'><button class='btn-add'> Add to cart <i class='fa-solid fa-cart-shopping cart'></i></button></a>
             
                    </div>
                ";
        }        

}


//Searching account function 

function search_accounts(){
    global $con;
    if(isset($_GET['Search_data_ac'])){
    $search_data_value=$_GET['search_data'];
    $search_query = "select * from `accounts` where b_skins like '%$search_data_value%'";
    $result_query= mysqli_query($con,$search_query);
    $num_of_rows= mysqli_num_rows($result_query);   
    
    if($num_of_rows==0){
        echo "<div class='no_result' ><h2>No result Found.<h2></div>";
    }
        
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
        $color = ($status == 'Available') ? '#25c900' : 'red';
 
        echo "  <div class='pro'>
                        <img src='./Admin/account_images/$imgfile1' alt=''>
                        <div class='des'>
                            <span>$ac_name</span>
                             <h6><span style='color:$color !important'>$status</span></h6>
                            <h5>$description</h5>
                            <h4>$price €</h4>
                        </div>
                        <a href='saccount.php?ac_id=$ac_id'><i class='fa-solid fa-cart-shopping cart'></i></a>
         <a href='saccount.php?ac_id=$ac_id'>
                <span class='link'></span>
            </a>
                    </div>
                ";
        }        
    }
}


//to view single account details
function view_account_details(){
    global $con;
    if(isset($_GET['ac_id'])){
$ac_id=$_GET['ac_id'];


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
        
        $color = ($status == 'Available') ? '#25c900' : 'red';

        echo " <div class='single-ac-image'>
            <img src='./Admin/account_images/$imgfile1' width='100%' id='MainImg' alt=''>
            <div class='small-img-group'>
                
                  <div class='small-img-col'>
                    <img src='./Admin/account_images/$imgfile1' width='100%' class='small-img' alt=''>
                </div>
                <div class='small-img-col'>
                    <img src='./Admin/account_images/$imgfile2' width='100%' class='small-img' alt=''>
                </div>
                <div class='small-img-col'>
                    <img src='./Admin/account_images/$imgfile3' width='100%' class='small-img' alt=''>
                </div>             
                <div class='small-img-col'>
                    <img src='./Admin/account_images/$imgfile4' width='100%' class='small-img' alt=''>
                </div>
            </div>
        </div>

        <div class='single-ac-details'>

            <h4>Account Name: $ac_name</h4>
            <h4>$b_skins</h4>
            <h2>$price €</h2>

            <h4>Status: <span style='color:$color !important'>$status</span>
            </h4>

           
            <h4>Account Details</h4>
            <p>$description</p>

            <h4>Win Rate: <span style='color:#999999'>$win_rate %</span></h4>
             <div class='order'>
                
                <span>**order and pay and message us </span><br>
                <a href='checkout.php?ac_id=$ac_id'><button class='btn' type='button' >Buy Now</button></a>
</div>

            <br>
            <p>After completing payment, message below to receive the account:</p>
                <a href='https://chat.whatsapp.com/HjrRXAC91750WPe3ihtjfA'><button id='tawk-maximize'  class='btn'><i class='fa fa-comment'></i> Message</button></a>
        </div>
                ";
        }        

}
}



//getting ip address function for user cart

function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
//      $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  
}  


//cart function
function cart(){
if(isset($_GET['add-to-cart'])){
    global $con;
    $ip = getIPAddress();
    $get_product_id=$_GET['add-to-cart'];
    $select_query="select * from `cart_details` where ip_address=$ip and 
    product_id=$get_product_id";
    $result_query= mysqli_query($con,$select_query);      
    $num_of_rows= mysqli_num_rows($result_query);   
    if($num_of_rows>0){
        echo "<script>alert('This item is already present inside  cart.')</script>";
        echo "<script>window.open('index.php')</script>";
    } 
}
}



//checkout  account
function checkoutaccount(){
global $con;
 if(isset($_GET['ac_id'])){
$ac_id=$_GET['ac_id'];

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
                            <h4>$price €</h4>
                        </div>

        
                    </div>
                ";
        }        

}
}
?>
