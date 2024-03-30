<?php
include_once "conn.php";
$email = $_POST['uemail'];
$opass=$_POST['opass'];
$pass = $_POST['pass'];
$password2 = $_POST['cpass'];
$que ="select * from user where `email` = '$email' and `password` = '$opass' ";
$res=mysqli_query($conn,$que);
if(mysqli_num_rows($res) > 0){
    if($pass == $password2){
    $updqry = "update user set password = '$pass' where email = '$email'";
	$res1 = mysqli_query($conn,$updqry);
	if($res1)
	{
		echo "<script>alert('successfully updated');</script>";
		echo "<script>window.location='login.php'</script>";
	}
	
	else{
		echo "<script>alert('password not change');</script>";
		echo "<script>window.location='password_reset.php'</script>";
	}
}
else{
	echo "<script>alert('password miss-match');</script>";
	echo "<script>window.location='password_reset.php'</script>";
}
}

else
	{
		echo "<script>alert('uset not found! enter correct email');</script>";
		echo "<script>window.location='password_reset.php'</script>";
	}


?> 