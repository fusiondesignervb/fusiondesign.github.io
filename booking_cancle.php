<?php
	include_once "conn.php";

	 $id = $_GET['id'];

	$del = "delete from orders where id = $id";
	$res = mysqli_query($conn,$del);
	if($res)
	{
		echo "<script>window.location='order.php'</script>";

	}
?>