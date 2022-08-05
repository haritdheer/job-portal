<?php
include ('connection/db.php');

$company=$_POST['company'];
$description=$_POST['description'];





$query=mysqli_query($conn,"insert into company(company,des)values('$company','$description')");

// var_dump($query);
if($query){
   echo "<script>alert('Added Successfully!!')</script>";
}
else{
    echo "<script>alert('error occured')</script>";
}
?>