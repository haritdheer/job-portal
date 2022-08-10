<?php
session_start();
session_unset();
header('location:index.php');


include('connection/db.php');

$query=mysqli_query($conn,"select * from jobseeker where email='{$_SESSION['email']}'  ");
if($query){
    header('location:http://localhost/job_portal/');
}else{
    header('location:index.php');
}
?>