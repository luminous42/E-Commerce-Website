<?php
include('connect.php');
if(isset($_POST['insert_ac'])){
  $s_name = $_POST['s_name'];
  $ac_name = $_POST['ac_name'];
  $price = $_POST['price'];
  $win_rate = $_POST['win_rate'];
  $description = $_POST['description'];
  $b_skins = $_POST['b_skins'];
  $status = $_POST['status'];

  //accessing images
  $imgfile1 = $_FILES['imgfile1']['name'];
  $imgfile2 = $_FILES['imgfile2']['name'];
  $imgfile3 = $_FILES['imgfile3']['name'];
  $imgfile4 = $_FILES['imgfile4']['name'];

//accessing image tmp name
  $tmp_imgfile1 = $_FILES['imgfile1']['tmp_name'];
  $tmp_imgfile2 = $_FILES['imgfile2']['tmp_name']; 
  $tmp_imgfile3 = $_FILES['imgfile3']['tmp_name'];
  $tmp_imgfile4 = $_FILES['imgfile4']['tmp_name'];


  //checking empty condition
  if( $price=='' or $description=='' or $imgfile1=='' or $status==''){
    echo "<script>('Please fill all required fields')</script>";
    exit();
   }
   else {
   move_uploaded_file($tmp_imgfile1, "./account_images/$imgfile1");
   move_uploaded_file($tmp_imgfile2, "./account_images/$imgfile2");
   move_uploaded_file($tmp_imgfile3, "./account_images/$imgfile3");
   move_uploaded_file($tmp_imgfile4, "./account_images/$imgfile4");
   }


   //checking if data is already present
   $select= "Select *from `accounts` where ac_name='$ac_name'";
   $result_select=mysqli_query($con,$select);
   $number=mysqli_num_rows($result_select);
   if($number>0){
    echo "<script>alert('This account is already present inside the database.')</script>";
   }
else{
   //insert query 
   $insert_accounts="insert into `accounts` (s_name,ac_name,price,win_rate,description,
   imgfile1,imgfile2,imgfile3,imgfile4,b_skins,status) values('$s_name','$ac_name',
   ' $price','$win_rate','$description','$imgfile1','$imgfile2','$imgfile3','$imgfile4','$b_skins','$status')";

   $result=mysqli_query($con,$insert_accounts);
   if($result){
    echo "<script>alert('Account inserted successfully.')</script>";
   }
}

}
?>


<main id="main" class="main">

  <div class="pagetitle">
    <h1>Insert Accounts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Insert</li>
        <li class="breadcrumb-item active">Account</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->


  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Add New Account</h5>

      <!-- Floating Labels Form -->
      <form class="row g-3" action="" method="post" enctype="multipart/form-data">
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" class="form-control" name="s_name" placeholder="Seller Name">
            <label for="floatingName">Seller Name</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" class="form-control" name="ac_name" placeholder="Account Name">
            <label for="AccountName">Account Name</label>
          </div>
        </div>
       

        
        <div class="col-md-6">
          <div class="form-floating">
            <input type="number" class="form-control" name="price" placeholder="Price" required>
            <label for="Price">Price</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating">
            <input type="number" step="any" class="form-control" name="win_rate" placeholder="Winrate">
            <label for="Winrate">Win Rate</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating mb-3">
            <select class="form-select" name="status" aria-label="Status" required>
              <option selected>Available</option>
              <option value="Sold">Sold</option>
              <option value="Ordered">Ordered</option>

            </select>
            <label for="floatingSelect">Status</label>
          </div>
        </div>
        <div class="col-12">
          <div class="form-floating">
            <textarea class="form-control" placeholder="description" name="description" style="height: 100px;"
              required></textarea>
            <label for="floatingTextarea">Description</label>
          </div>
        </div>
        <!-- image 1 -->
        <div class="col-md-6">
          <label for="inputfile" class="col-sm-2 col-form-label">Image File 1</label>
          <div class="col-sm-10">
            <input class="form-control" type="file" name="imgfile1" required>
          </div>
        </div>
        <!-- image 2 -->
        <div class="col-md-6">
          <label for="inputfile" class="col-sm-2 col-form-label">Image File 2</label>
          <div class="col-sm-10">
            <input class="form-control" type="file" name="imgfile2">
          </div>
        </div>
        <!-- image 3 -->
        <div class="col-md-6">
          <label for="inputfile" class="col-sm-2 col-form-label">Image File 3</label>
          <div class="col-sm-10">
            <input class="form-control" type="file" name="imgfile3">
          </div>
        </div>
        <!-- image 4 -->
        <div class="col-md-6">
          <label for="inputfile" class="col-sm-2 col-form-label">Image File 4</label>
          <div class="col-sm-10">
            <input class="form-control" type="file" name="imgfile4">
          </div>
        </div>




         <div class="col-12">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Bestskins" name="b_skins" style="height: 100px;" 
              required></textarea>
            <label for="floatingTextarea">Best Skins</label>
          </div>
        </div>
        
        <div class="text-center">
          <button type="submit" name="insert_ac" class="btn btn-primary">Create</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- End floating Labels Form -->

    </div>
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