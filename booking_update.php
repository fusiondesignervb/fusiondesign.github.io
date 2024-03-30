<?php
require_once "conn.php";
if(isset($_POST['th']))
{
$id=$_POST['id'];
$fname = $_POST['fname'];
$email = $_POST['email'];
$sdate = $_POST['start'];
$edate = $_POST['end'];
$guest = $_POST['guest'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];

$query= "update orders set `fname`='$fname',`email`='$email',`start_date`='$sdate',`end_date`='$edate',`guest`='$guest',`mobile`='$mobile',`address`='$address',`city`='$city',`state`='$state' WHERE id=$id" ; 
$res = mysqli_query($conn,$query);
if($res){
    echo "<script>window.location='order.php'</script>";	
}
}