<?php
include('../includes/connect.php');


?>



<main id="main" class="main">

  <div class="pagetitle">
    <h1>View Payments</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">View</li>
        <li class="breadcrumb-item active">Payments</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->


  <div class="card">
    <div class="card-body">
      <h5 class="card-title">List of All Payments</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">payid</th>

                    <th scope="col">Paid By</th>

                    <th scope="col">Amount (€)</th>
                    <th scope="col">Txn ID</th>
                    <th scope="col">Ac_id</th> 
                    <th scope="col">Ac_name</th>                            
                    <th scope="col">Payer Email</th>         
                    <th scope="col">Mobile</th>
                    <th scope="col">Address</th>
                    <th scope="col">Payment Date and Time</th>
                    <th scope="col">Status</th>
                    
                  </tr>
                </thead>
                <tbody>

                <?php

   $select= "Select * from `accounts`,`payments` WHERE accounts.ac_id=payments.ac_id";
   $result_select=mysqli_query($con,$select);
   
   while($row = mysqli_fetch_assoc($result_select)){
    $payid=$row['payid'];
$firstname = $row['firstname'];
  $lastname = $row['lastname'];
  $amount = $row['amount'];
  $txnid = $row['txnid'];
  $ac_id = $row['ac_id'];
  $ac_name = $row['ac_name'];
  $payer_email = $row['payer_email'];
  $mobile = $row['mobile'];
  $address = $row['address'];  
  $status = $row['status'];
$payment_date = $row['payment_date'];
 ?>

<tr>
                    <th scope='row'><?php echo $payid ?></th>


                    <td><?php echo "$firstname  $lastname";  ?></td>

                    <td><?php echo $amount ?></td>

                    <td> <?php echo $txnid ?></td>
                    
                    <td> <?php echo $ac_id ?></td>
                    <td> <?php echo $ac_name ?></td>                    
                    <td> <?php echo $payer_email ?></td>
                    <td> <?php echo $mobile ?></td>
                    <td> <?php echo $address?></td>
                    <td> <?php echo $payment_date?></td>
                    <td> <?php echo $status ?></td>
                    
                  </tr>
           
<?php
}
       ?>         
                             
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>


    </div>
  </div>


  </section>

</main><!-- End #main -->


<footer id="footer" class="footer">
  <div class="copyright">
    &copy; Copyright <strong><span>KIcKeR ML Shop</span></strong>. All Rights Reserved
  </div>
  <div class="credits">

  </div>
</footer>


