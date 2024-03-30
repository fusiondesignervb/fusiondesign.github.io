<?php
include_once "conn.php";
 $id=$_GET['id'];
 $equery="select * from  catpackages where  cid = $id";
$eres=mysqli_query($conn,$equery);

$tquery="select * from  theme where  cid = $id";
$tres=mysqli_query($conn,$tquery);

$query="select * from  category where  id = $id";
$res=mysqli_query($conn,$query);
$rows = mysqli_fetch_array($res);

session_start();
if(isset($_POST['add_to_cart'])){
     $product_id = $_POST['product_id'];
     $product_name = $_POST['product_name'];
     $product_detail = $_POST['product_detail'];
     $product_price = $_POST['product_price'];
     $product_image = $_POST['product_image'];
     $user_id = $_SESSION['id'] ;
    $check = "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'";
    $cres= mysqli_query($conn,$check);
      if(mysqli_num_rows($cres) > 0){
		echo "<script>alert('already added to cart')</script>";
          
    }else{
     $cquery =  "INSERT INTO `cart`(user_id, pid, name, detail, price, image) VALUES('$user_id', '$product_id', '$product_name', '$product_detail', '$product_price', '$product_image')";
     $cqres=mysqli_query($conn,$cquery);
     if($cqres){
		echo "<script>alert('product added to cart')</script>";
     }
          
    }
}

if(isset($_POST['book'])){
       $pr_id = $_POST['pr_id'];
     $pr_name = $_POST['pr_name'];
     $pr_detail = $_POST['pr_detail'];
     $pr_price = $_POST['pr_price'];
     $pr_image = $_POST['pr_image'];
     $user_id = $_SESSION['id'] ;
    $check = "SELECT * FROM `cart` WHERE name = '$pr_name' AND user_id = '$user_id'";
    $cres= mysqli_query($conn,$check);
      if(mysqli_num_rows($cres) > 0){
		echo "<script>alert('already added to cart')</script>";
          
    }else{
          $cquery =  "INSERT INTO `cart`(user_id, pid, name, detail, price, image) VALUES('$user_id', '$pr_id', '$pr_name', '$pr_detail', '$pr_price', '$pr_image')";
     $cqres=mysqli_query($conn,$cquery);
     if($cqres){
		echo "<script>alert('product added to cart')</script>";
     }
          
    }

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
<style>
 #im1 img:hover{
transform: scale(1.1);
transition: 1s ease;
}
</style>  
</head>  
<body style="background:#f1f1f1">
<div>
<?php @include 'header.php'; ?> 
</div>
<center>
<div  style="background-image: url('admin/<?= $rows['cimage']; ?>');"class="banner2">
  <div class="text">Complete <?php echo $rows['cname'] ?> Planner</div>
  <div class="text p"><p>Life is an event.Make it memorable.</p></div>
</div>
<div style="background-color:#0E2433;color:white;height:700px; padding-top:99px">
    <h1  class="bh">Best  <?php echo $rows['cname'] ?> Planner</h1>
    <h3>Your Reliable   <?php echo $rows['cname'] ?>  Management partner</h3>
    <p style="color:white;top: 500px;font-size:17px;margin:1.5%;left: 120px;" >In our  journey in event planning and management, we consistently put our craft to test on  many events catering to corporate events, weddings, concerts, birthday parties, and more. The journey to become one of the best event management companies could
     only happen due to our sheer passion, and creativity to take the extra mile in every event.</p>
    <p  style="color:white;top: 500px;font-size:17px;margin:1.5%;left: 120px;">We at FUSION Event specialize in  <?php echo $rows['cname'] ?>  management and  <?php echo $rows['cname'] ?> planning services and make the necessary arrangements for  <?php echo $rows['cname'] ?>  <br> functions and parties. Being a full-fledged  <?php echo $rows['cname'] ?>  planner, we help you in arranging destination and events like Small Ceremony,<br> Functions, and more.</p>
    <p  style="color:white;top: 500px;font-size:17px;margin:1.5%;left: 120px;">While doing  <?php echo $rows['cname'] ?>  we suggest a location, understand the weather, local culture of clients and come up with a design and creative <br> thoughts that make  <?php echo $rows['cname'] ?>  a memorable moment.</p>
    <a href="contect.php"><button style="width:30%;height:7%;font-size:17px;margin:0%;background:#8c2645;color:#D1EAF0"><span>Get Free Consultation for Your  <?php echo $rows['cname'] ?></span></button></a>
  </div>
</center>
  <div class="row" style="padding-top:5%">
    <center>
    <?php 
    $i=1;?>
    <?php while($row = mysqli_fetch_array($eres)){
     if($i % 2 == 1){
  ?>
<form action="" method="POST">
  <div class="col-sm-6 col-md-5" style="height:500px;margin-left:11%">

     <img src="admin/<?php echo $row['pimg']; ?>" height="400px" width="510px">
     </div>
</center>
     <div class="col-sm-6 col-md-5" style="height:500px">
     <h1 style="font-size:55px;font-weight:bold;color:#330066"><?php echo $row['pname']; ?></h1>
     <p  style="color:#696880;font-size:23px;margin:1.5%;left: 120px; padding-top:3%"><?php echo $row['cdetails']; ?></p>
     <p  style="color:#330066;font-size:23px;margin:1.5%;left: 120px;">RS:<?php echo $row['cprice']; ?>/-</p>
          <input type="hidden" name="pr_id" value="<?php echo $row['id']; ?>">
          <input type="hidden" name="pr_name" value="<?php  echo $row['pname'];?>">
         <input type="hidden" name="pr_detail" value="<?php  echo $row['cdetails']; ?>">
         <input type="hidden" name="pr_price" value="<?php  echo $row['cprice']; ?>">
         <input type="hidden" name="pr_image" value="<?php  echo $row['pimg']; ?>">
          <?php 
          if(!isset($_SESSION['uname'])){ ?>
          <button style="width:35%;height:12%;font-size:17px;background:#8c2645;width:60%;height:15%;font-size:17px;color:#fff"><a href="login.php" style="text-decoration:none;color:#D1EAF0;">Select Your favorite</a></button>
          <?php  } else {?>
         <input type="submit" value="Select Your Favrite " name="book"  style="width:60%;height:15%;font-size:17px;background:#8c2645;color:white">
          <?php  } ?>
     </div>
 <?php  } else{ ?>
     <div class="col-sm-6 col-md-5" style="height:500px;margin-left:12%">
     <h1 style="font-size:55px;font-weight:bold;color:#330066"><?php echo $row['pname']; ?><?php echo $row['id']; ?></h1>
     <p  style="color:#696880;font-size:21px;margin:1.5%;left: 120px; padding-top:3%"><?php echo $row['cdetails']; ?></p>
     <p  style="color:#330066;font-size:23px;margin:1.5%;left: 120px;">RS:<?php echo $row['cprice']; ?>/-</p>
     <input type="hidden" name="pa_id" value="<?php echo $row['id']; ?>">
          <input type="hidden" name="pa_name" value="<?php  echo $row['pname'];?>">
         <input type="hidden" name="pa_detail" value="<?php  echo $row['cdetails']; ?>">
         <input type="hidden" name="pa_price" value="<?php  echo $row['cprice']; ?>">
         <input type="hidden" name="pa_image" value="<?php  echo $row['pimg']; ?>">
          <?php 
          if(!isset($_SESSION['uname'])){ ?>
          <button style="background:#8c2645;width:30%;height:7%;font-size:17px;color:white"><a href="login.php" style="text-decoration:none;color:#D1EAF0;">Select Your favorite</a></button>
          <?php  } else {?>
         <input type="submit" value="Select Your Favrite " name="book"  style="width:30%;height:7%;font-size:17px;background:#8c2645;color:white">
          <?php  } ?>
     </div>
     <center >
  <div class="col-sm-6 col-md-5" style="height:500px;" >
  <img src="admin/<?php echo $row['pimg']; ?>" height="400px" width="510px">
     </div>
     <?php  } $i++; }?>
    </div>
    <center> 
<div class="price">
<h1 style="color:black"> Pricing</h1>
      <div style="height:1px;width:100%;background:grey;"><br></div>
      <div class="col-md-6"><p style="font-size:170%;color:#1a0052;padding-top:5% ">PAYMENT POLICY</p>
      <p style="font-size:120%">  25% - after suceesfull booking &Consultation <br> 50% - On Event Date <br> 25% - After End Of The Event</p>
     </div>
      <div class="col-md-6"><p style="font-size:170%;color:#1a0052;padding-top:5% ">CANCELLATION POLICY</p>
      <p style="font-size:120%">Depands Upon The Setuation</p>
      </div>
     </div>

<br><br><br><br>
<center>
     <div style="background-color:#8c2645;color:#696880;">
     <h1 class="bh" style="font-size:75px;color:pink">Theme Based <?php echo $rows['cname'] ?></h1>
     <div class="row">
     <div class="scontainer">
     <?php while($trow=mysqli_fetch_array($tres)){
  ?>
<form action="" method="POST">
 <div class="col-sm-2 col-md-2  card" id="im1" style="margin-left:0%;">
       <img src="admin/<?php echo $trow['timg']; ?>" class="imgbox" height="270px" width="270px">
          <div class="content" style="font-size:23px;padding-top:0;">
          <h3 style="color:#311465"><?php echo $trow['themename']; ?></h3>
          <p style="color:#696880;font-size:50%;"><?php echo $trow['tdetails']; ?></p>
          <p style="color:#696880;font-size:70%;">RS:<?php echo $trow['tprice']; ?>/-</p>
         <input type="hidden" name="product_id" value="<?php echo $trow['id']; ?>">
          <input type="hidden" name="product_name" value="<?php  echo $trow['themename'];?>">
         <input type="hidden" name="product_detail" value="<?php  echo $trow['tdetails']; ?>">
         <input type="hidden" name="product_price" value="<?php  echo $trow['tprice']; ?>">
         <input type="hidden" name="product_image" value="<?php  echo $trow['timg']; ?>">
          <?php 
          if(!isset($_SESSION['uname'])){ ?>
          <button style="width:35%;height:12%;font-size:17px;background:#8c2645;width:60%;height:15%;font-size:17px;color:#fff"><a href="login.php" style="text-decoration:none;color:#D1EAF0;">Select Your favorite</a></button>
          <?php  } else {?>
         <input type="submit" value="Select Your Favrite " name="add_to_cart"  style="width:60%;height:15%;font-size:17px;background:#8c2645;color:white">
          <?php  } ?>
     </div>
     </div>
     </form>
     <?php } ?>
     </div> 
     </div>
     </div>
</div>
</center>
</div>
     <h1 class="bh"style="color:#330066" align="center">EVENT <span style="color:black">PRODUCTION</span></h1>
     <p  style="color:#330066;font-size:30px;" align="center"> Enjoy Event Related All services & Production Under One Roof </p>
     <center>
     <div class="row" style="padding-top:5%">
  <div class="col-sm-3 col-md-3." id="im1" style="height:350px;margin-left:10%;">
 <a href="AVEquipment.php"><img src="img/light.jpg" height="270px" width="270px" style="box-shadow:10px 10px 5px lightgray"></a> 
     <div style="color:#8c2645;font-size:23px;padding-top:0;">
          <h3>Sound & Lights</h3>
     </div>
     </div> 
     <div class="col-sm-3 col-md-3." id="im1" style="height:350px;margin-left:3%;">
     <img src="img/vanue.jpg" height="270px" width="270px" style="box-shadow:10px 10px 5px lightgray">
     <div style="color:#8c2645;font-size:23px;padding-top:0;">
          <h3>Vanue Booking</h3>
     </div>
     </div>
     <div class="col-sm-3 col-md-3." id="im1" style="height:350px;margin-left:3%">
    <a href="specialef.php"> <img src="img/specialeffect.jpg" height="270px" width="270px" style="box-shadow:10px 10px 5px lightgray"></a>
     <div style="color:#8c2645;font-size:23px;padding-top:0;">
          <h3>Special Effects</h3>
     </div>
     </div>
     <div class="col-sm-3 col-md-3" id="im1" style="height:350px;margin-left:10%;">
    <img src="img/ent.jpg" height="270px" width="270px" style="box-shadow:10px 10px 5px lightgray">
     <div style="color:#8c2645;font-size:23px;padding-top:0;">
          <h3>Entertainment</h3>
     </div>
     </div> 
     <div class="col-sm-3 col-md-3" id="im1" style="height:350px;margin-left:3%">
     <a href="artists.php"> <img src="img/artistmanagement.jpg" height="270px" width="270px" style="box-shadow:10px 10px 5px lightgray"></a>
     <div style="color:#8c2645;font-size:23px;padding-top:0;">
          <h3>Artist Management</h3>
     </div>
     </div>
     <div class="col-sm-3 col-md-3" id="im1"style="height:350px;margin-left:3%">
    <a href="specialentry.php"><img src="img/spe.jpg" height="270px" width="270px" style="box-shadow:10px 10px 5px lightgray"></a> 
     <div style="color:#8c2645;font-size:23px;padding-top:0;">
          <h3>Couple Entry</h3>
     </div>
     </div>
     </div></center>
<?php @include 'footer.php'; ?> 
</body>
</html>