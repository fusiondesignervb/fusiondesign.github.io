<?php 
include_once "conn.php";
//session_start();
$id = $_POST['id'];
$nm = $_POST['uname'];
$sar = $_POST['sarname'];
$email = $_POST['uemail'];
$mobile = $_POST['umob'];
$gender = $_POST['g'];
$old_image = $_POST['old_image'];
if($_FILES['uimg']['name']=='')
	{
		$updqry = "update user set uname = '$nm', sarname = '$sar', 
		email = '$email', mobile = '$mobile',gender = '$gender',uimage='$old_image' where id = '$id' ";
		$res = mysqli_query($conn,$updqry);
		if($res)
		{
			echo "<script>alert('successfully updated');</script>";
			echo "<script>window.location='index.php'</script>";
		}
	}
    else
	{
	$target_path = "uimage/";
	$target_path = $target_path.basename($_FILES['uimg']['name']);
	$tmp_file = $_FILES['uimg']['tmp_name'];
	move_uploaded_file($tmp_file,$target_path);
	$updqry = "update user set uname = '$nm', sarname = '$sar', 
    email = '$email', mobile = '$mobile',gender = '$gender',uimage='$target_path where id = '$id' ";
	$res = mysqli_query($conn,$updqry);
	if($res)
	{
		echo "<script>alert('successfully updated');</script>";
		echo "<script>window.location='index.php'</script>";
	}
	}
?>