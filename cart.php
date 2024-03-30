<?php 
include_once "conn.php";

session_start();

$user_id = $_SESSION['id'];

if(!isset($user_id)){
  echo "<script>window.location='login.php'</script>";
}
if(isset($_GET['delete'])){
  $delete_id = $_GET['delete'];
  mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$delete_id'");
  echo "<script>window.location='cart.php'</script>";
}
?>
<html>        
<head>                
<title>Event Planner</title>        
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">      
<link href="style.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>        
<script src="js/bootstrap.min.js"></script>  
<link href="css/style" rel="stylesheet">   
</head>  
<body style="background-color:#f1f1f1;">
<?php @include 'header.php'; ?> 
<section>
<div class="wrapper">
    <h1>Your Choice</h1>
    <div class="project">
        <div class="shop">
        <?php
 $que = mysqli_query($conn,"select * from cart where user_id = '$user_id' ");
 if(mysqli_num_rows($que) > 0){

  while($row=mysqli_fetch_array($que))
  {
?>
            <div class="tbox">
      <img src="admin/<?php echo $row['image']; ?>">
      <div class="tcontent">
      <h3><?php echo $row['name'];?></h3>
      <h4><?php echo $row['detail'];?></h4>
      <h4> Rs <?php echo $row['price'];?></h4>
      <p class="btn-area2"> <a href="theme_booking.php?book=<?php echo $row['id']; ?>" style="text-decoration:none;color:#fff"> <img src="img/cart1.png" alt="" height="80%" width="15%" style="margin-right:8%">Check Out</a></p>
      <p class="btn-area"><a href="cart.php?delete=<?php echo $row['id']; ?>" style="text-decoration:none;color:#fff" onClick="return confirm('delete this from cart?');"><img src="admin/img/delete.png" style="margin-right:5%;height"alt="">Remove </a></p>
      </div>
      </div>
      <?php } ?> 
        </div>
        
     <div class="right-bar">
            <p><span>sub total:</span> 
            <?php
              $sb_total = 0;
              $grand_total = 0;
              $tax = 0;
  $user_id = $_SESSION['id'];
 $que1 = mysqli_query($conn,"select * from cart where user_id = '$user_id' ");
  while($trow = mysqli_fetch_array($que1))
  {
?> 
   <?php  $sub_total = ( $trow['price']);
    $sb_total += $sub_total;
     } ?>
        <span>RS<?php echo  $sb_total  ?></span></p>
        <hr>
            <p><span> tax(5%):</span> <span><?php $tax= $sb_total * 0.05 ; echo $tax; ?> </span></p>
            <div style="background-color:black;height:1px"></div>
            <p><span>Grand  Total:</span> <span><?php $grand_total = $sb_total+ $tax ;  echo $grand_total ?></span></p>
            <a href="index.php"><button type="button" style="background: linear-gradient(to bottom,#4776e6 0%,#8e54e9 100%);margin-left:15%" class="btn btn-primary"><h5>Countinue Booking </h5></button></a>
        </div>
    </div>  
</div>
<?php } else { ?>
  <div> 
  <h1 class="empty">your cart is empty</h1>
  </div>
 <?php } ?>
 </section>
  <br> <br> <br> <br> <br> <br>
<?php @include 'footer.php'; ?> 
</body>
</html>