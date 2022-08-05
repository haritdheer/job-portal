<?php
include ('connection/db.php');

$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$admin_type=$_POST['admin_type'];




$query=mysqli_query($conn,"insert into admin_login(admin_email,admin_username,admin_pass,first_name,last_name,admin_type)values('$email','$username','$password','$first_name','$last_name','$admin_type')");

// var_dump($query);
if($query){
    echo "Inserted";
}
else{
    echo "Error";
}
?>