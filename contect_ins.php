<?php
require_once "conn.php";
$name=$_POST['uname'];
$email=$_POST['uemail'];
$mobile=$_POST['mobile'];
$note=$_POST['note'];
$query="insert into contect(`name`,`email`,`phone`,`feedback`) value('$name','$email','$mobile','$note')";
$result= mysqli_query($conn,$query);
if($result){
    echo "<script>window.location='thankyou.php'</script>";
}
?>