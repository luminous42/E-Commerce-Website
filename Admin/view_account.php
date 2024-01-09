<?php
include('connect.php');


?>


<main id="main" class="main">

  <div class="pagetitle">
    <h1>View Accounts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">View</li>
        <li class="breadcrumb-item active">Account</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->


  <div class="card">
    <div class="card-body">
      <h5 class="card-title">List of All Accounts</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Ac_id</th>
   <th scope="col">Seller Name</th>
                    <th scope="col">Account Name</th>
                    
                    <th scope="col">Price</th>

                    <th scope="col">Description</th>
                             
                    <th scope="col">Best Skins</th>

                    <th scope="col">Status</th>
                    <th >Edit</th>
                    <th >Delete</th>
                  </tr>
                </thead>
                <tbody>

                <?php

   $select= "Select * from `accounts`";
   $result_select=mysqli_query($con,$select);
   
   while($row = mysqli_fetch_assoc($result_select)){
    $ac_id=$row['ac_id'];
$s_name = $row['s_name'];
  $ac_name = $row['ac_name'];

  $price = $row['price'];
  $win_rate = $row['win_rate'];
  $description = $row['description'];
  $b_skins = $row['b_skins'];
  
  $status = $row['status'];
$imgfile1 = $row['imgfile1'];
 ?>

<tr>
                    <th scope='row'><?php echo $ac_id ?></th>
      <td><?php echo $s_name ?></td>
                    <td><?php echo $ac_name ?></td>

                    <td><?php echo $price ?></td>

                    <td> <?php echo $description ?></td>
                    
                    <td> <?php echo $b_skins ?></td>

                    <td> <?php echo $status ?></td>
                    <td > <a href="index.php?edit_account=<?php echo  $ac_id?>" style=color:black;> <i class='bi bi-pencil-square'></i> </a></td>
                    <td ><a href="index.php?delete_account=<?php echo  $ac_id?>" style=color:black;
                     onclick="return confirm('Are you sure you want to delete?');"> <i class='bi bi-trash3-fill'></i></a>
                    
                    </td>
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

