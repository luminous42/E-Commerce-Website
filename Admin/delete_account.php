<?php
if(isset($_GET['delete_account'])){
    $delete_id=$_GET['delete_account'];
    
    $delete_account="delete from `accounts` where ac_id= $delete_id";
    $result=mysqli_query($con, $delete_account);
    if($result){
        echo"<script>alert('Account deleted successfully.')</script>";
        echo "<script>window.open('./index.php?view_account','_self')</script>";
    }
}
?>