<?php
include('connect.php');
if(isset($_GET['edit_account'])){
$edit_id=$_GET['edit_account'];
echo $edit_id;
$get_data= "select * from `accounts` where ac_id=$edit_id";
$result=mysqli_query($con, $get_data);
$row=mysqli_fetch_assoc($result);
$ac_id=$row['ac_id'];
$s_name= $row['s_name'];
$ac_name = $row['ac_name'];
$price = $row['price'];
$win_rate = $row['win_rate'];
$description = $row['description'];
$b_skins = $row['b_skins'];
$status = $row['status'];
$imgfile1 = $row['imgfile1'];
$imgfile2 = $row['imgfile2'];
$imgfile3 = $row['imgfile3'];
$imgfile4 = $row['imgfile4'];
}
?>


<main id="main" class="main">

  <div class="pagetitle">
    <h1>Edit Account</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Edit</li>
        <li class="breadcrumb-item active">Account</li>
      </ol>
    </nav>
  </div>


  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Edit Account</h5>

     
      <form class="row g-3" action="" method="POST" enctype="multipart/form-data"> 
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" class="form-control" name="s_name" value="<?php echo $s_name ?>" placeholder="Seller Name">
            <label for="floatingName">Seller Name</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" class="form-control" name="ac_name" value="<?php echo $ac_name ?>" placeholder="Account Name">
            <label for="AccountName">Account Name</label>
          </div>
        </div>
      
        <div class="col-md-6">
          <div class="form-floating">
            <input type="number" class="form-control" name="price" value="<?php echo $price ?>" placeholder="Price" required>
            <label for="Price">Price</label>
          </div>
        </div>
        
        
        <div class="col-md-3">
          <div class="form-floating">
            <input type="number" step="any" class="form-control" name="win_rate" value="<?php echo $win_rate ?>" placeholder="Winrate">
            <label for="Winrate">Win Rate</label>
          </div>
        </div>
        
                <div class="col-md-3">
          <div class="form-floating mb-3">
            <select class="form-select" name="status" aria-label="Status"  required>
            <option value="<?php echo $status ?>"><?php echo $status ?></option>
              <option value="Available">Available</option>
              <option value="Sold">Sold</option>
              <option value="Ordered">Ordered</option>

            </select>
            <label for="floatingSelect">Status</label>
          </div>
        </div>
        
        <div class="col-12">
          <div class="form-floating">
            <textarea class="form-control" placeholder="description" name="description"  style="height: 100px;"
              required><?php echo $description ?></textarea>
            <label for="floatingTextarea">Description</label>
          </div>
        </div>
        
        <div class="col-md-6">
          <label for="inputfile" class="col-sm-2 col-form-label">Image File 1</label>
          <div class="col-sm-10">
            <input class="form-control" type="file" name="imgfile1" > 
            <br><img src="./account_images/<?php echo $imgfile1 ?>" alt="" width=100px;>
          </div>
        </div>
    
        <div class="col-md-6">
          <label for="inputfile" class="col-sm-2 col-form-label">Image File 2</label>
          <div class="col-sm-10">
            <input class="form-control" type="file" name="imgfile2" >
            <br><img src="./account_images/<?php echo $imgfile2 ?>" alt="" width=100px;>
          </div>
        </div>

        <div class="col-md-6">
          <label for="inputfile" class="col-sm-2 col-form-label">Image File 3</label>
          <div class="col-sm-10">
            <input class="form-control" type="file" name="imgfile3" >
            <br><img src="./account_images/<?php echo $imgfile3 ?>" alt="" width=100px;>
          </div>
        </div>

        <div class="col-md-6">
          <label for="inputfile" class="col-sm-2 col-form-label">Image File 4</label>
          <div class="col-sm-10">
            <input class="form-control" type="file" name="imgfile4" >
            <br><img src="./account_images/<?php echo $imgfile4 ?>" alt="" width=100px;>
          </div>
        </div>




        <div class="col-md-12">
          <div class="col-md-12">
            <div class="form-floating">
              <input type="text" class="form-control" name="b_skins" placeholder="Bestskins" value="<?php echo $b_skins ?>">
              <label for="Bestskins">Best Skins</label>
            </div>
          </div>
        </div>


        <div class="text-center">
          <button type="submit" name="edit_ac" class="btn btn-primary">Update</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form>

    </div>
  </div>


  </section>

</main>


<footer id="footer" class="footer">
  <div class="copyright">
    &copy; Copyright <strong><span>KIcKeR ML Shop</span></strong>. All Rights Reserved
  </div>
  <div class="credits">

  </div>
</footer>

<!-- editing process -->

<?php 
if(isset($_POST['edit_ac'])){
   $s_name = $_POST['s_name'];
  $ac_name = $_POST['ac_name'];

  $price = $_POST['price'];
  $win_rate = $_POST['win_rate'];
  $description = $_POST['description'];
  $b_skins = $_POST['b_skins'];
  $status = $_POST['status'];



if( $price=='' or $description=='' or $status==''){
    echo "<script>('Please fill all required fields')</script>";
    exit();
   }
   else {
    

    $imgfile1 = $_FILES['imgfile1']['name'];
    $imgfile2 = $_FILES['imgfile2']['name'];
    $imgfile3 = $_FILES['imgfile3']['name'];
    $imgfile4 = $_FILES['imgfile4']['name'];

    if ($imgfile1 !== '') {
        // A new image has been uploaded for imgfile1
        $tmp_imgfile1 = $_FILES['imgfile1']['tmp_name'];
        move_uploaded_file($tmp_imgfile1, "./account_images/$imgfile1");
    }

    if ($imgfile2 !== '') {
        // A new image has been uploaded for imgfile2
        $tmp_imgfile2 = $_FILES['imgfile2']['tmp_name']; 
        move_uploaded_file($tmp_imgfile2, "./account_images/$imgfile2");
    }

    if ($imgfile3 !== '') {
        // A new image has been uploaded for imgfile3
        $tmp_imgfile3 = $_FILES['imgfile3']['tmp_name'];
        move_uploaded_file($tmp_imgfile3, "./account_images/$imgfile3");
    }

    if ($imgfile4 !== '') {
        // A new image has been uploaded for imgfile4
        $tmp_imgfile4 = $_FILES['imgfile4']['tmp_name'];
        move_uploaded_file($tmp_imgfile4, "./account_images/$imgfile4");
    }

    // Update query with the image fields only if new images are uploaded
    $update_account = "UPDATE `accounts` SET s_name='$s_name', ac_name='$ac_name',
        price='$price', win_rate='$win_rate', description='$description', 
        b_skins='$b_skins', status='$status' ";

    if ($imgfile1 !== '') {
        $update_account .= ", imgfile1='$imgfile1'";
    }
    if ($imgfile2 !== '') {
        $update_account .= ", imgfile2='$imgfile2'";
    }
    if ($imgfile3 !== '') {
        $update_account .= ", imgfile3='$imgfile3'";
    }
    if ($imgfile4 !== '') {
        $update_account .= ", imgfile4='$imgfile4'";
    }

    $update_account .= " WHERE ac_id=$edit_id";


   $result=mysqli_query($con,$update_account);
   if($result){
    echo "<script>alert('Account updated successfully.')</script>";
    echo "<script>window.open('index.php?view_account','_self')</script>";
   }
}

}

?>