<?php
include('connection/db.php');

$del=$_GET['del'];

$query=mysqli_query($conn,"delete from admin_login where id='$del' ");

if($query){
    echo "<script>alert('Deleted Successfully!!')</script>";
    header('location:customers.php');
}
else{
    "<script>alert('error!!')</script>";
}
?>