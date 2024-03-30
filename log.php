<html>
	<head>
<link href="sweetalert.min.css" rel="stylesheet">
<script src="js/sweetalert2.all.min.js"></script>        
	</head>
<body>
<?php
session_start();
include_once "conn.php";
$email = $_POST['email'];
$pass = $_POST['pass'];
$qry = "select*from user where email='$email'or uname='$email' and password='$pass' ";
$res = mysqli_query($conn,$qry);
$row = mysqli_fetch_array($res);
$id=$row['id'];
$username=$row['uname'];
if($row)
{
	$_SESSION['id']=$id;
	$_SESSION['uname']=$username;
	echo "<script>Swal.fire(
		'Successfully Login',
		'Good job!',
		'success'
		)</script>";
	redirect('index.php',900);
}
else
{
	echo "<script>Swal.fire(
		'Invalid Id Or Password',
		'Opps!',
		'error'
		)</script>";
	redirect('login.php',900);
	
}

?>	

</body>
</html>