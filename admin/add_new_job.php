<?php
session_start();
include ('connection/db.php');

$login=$_SESSION['email'];
$job_title=$_POST['job_title'];
$description=$_POST['description'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$category=$_POST['category'];
$keyword=$_POST['keyword'];





$query=mysqli_query($conn,"insert into all_jobs(customer_email,job_title,des,country,state,city,category,keyword)values('$login','$job_title','$description','$country','$state','$city','$category','$keyword')");

// var_dump($query);
if($query){
   echo "<script>alert('Added Successfully!!')</script>";
}
else{
    echo "<script>alert('error occured')</script>";
}
?>