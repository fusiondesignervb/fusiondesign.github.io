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
.line{
background:black;
height:1px;
}
.div{
   margin-top:3%;
}
.lable{
   font-weight: bolder;
   font-size:180%;
   color:#330066;
   margin-left:3%;
   
}
.print{
   font-size:180%;
   margin-left:1%;
}
</style>
</head>  
<body style="background-image: url('img/lg4.jpg');"class="banner2">
<?php @include 'header.php'; ?>
<?php
include_once "conn.php";
 $user_id = $_SESSION['id'];
 $que = "select * from orders where uid = '$user_id' ";
 $res= mysqli_query($conn,$que);
 $row = mysqli_fetch_array($res);
 if(mysqli_num_rows($res) > 0){
?>
<section class="container">
<div style="background:rgba(255, 255, 255, 0.715);">
 <center> <h1> Your Bookings </h1>
   <div class="line"></div>
     <div class="div">
     <span class="lable">Name:</span><span class="print"><?php echo $row['fname']; ?></span>
     <span class="lable">email:</span><span class="print"><?php echo $row['email']; ?></span> 
     <span class="lable">Mobile:</span><span class="print"><?php echo $row['mobile']; ?></span>
     </div>
     <br><br>
     <div class="table-responsive">
     <table class="table table-striped">
    <thead>
      <tr>
         <th>No</th>
        <th>ProductName</th>
        <th>Requseted Date</th>
        <th>Guest</th>
        <th>BookOn</th>
        <th>ProductPrice</th>
        <th>City</th>
        <th>State</th>
        <th>Status</th>
        <th>Edit Booking</th>
        <th>Cancle Booking</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1;
      $st="pending";
      $que1 ="select * from orders where  uid = '$user_id' ";
      $res1=mysqli_query($conn,$que1);
      while($orow = mysqli_fetch_array($res1)){ 
            ?>
         <tr>
            <td> <?php echo $i ?></td>
         <td> <?php echo $orow['tname'] ?></td>
         <td> <?php echo $orow['start_date'] ?> <span style="color:#330066">TO</span> <?php echo $orow['end_date'] ?> </td>
         <td> <?php echo $orow['guest'] ?></td>
         <td> <?php echo $orow['book_on'] ?></td>
         <td> <?php echo $orow['total_price'] ?></td>
         <td> <?php echo $orow['city'] ?></td>
         <td> <?php echo $orow['state'] ?></td>
         <?php if($orow['status'] ==  0){?>
        <td style="color:<?php if($st == 'pending'){echo 'tomato'; }?>"><?php echo "panding" ?></td>
      <?php } else {?>
        <td style="color:<?php if($orow['status'] == 1){echo 'green';} ?>"><?php echo "complete" ; ?></td>
        <?php } ?>
        <td> <a href="booking_edit.php?id=<?php echo $orow['id']; ?>"><button type="button" class="btn btn-info" style="width:75%">Edit </button></a></td> 
        <td> <a href="booking_cancle.php?id=<?php echo $orow['id']; ?>"><button type="button" class="btn btn-danger" style="width:75%"  onclick="return confirm('delete this order?');">Cancle</button></a></td> 
      </tr>
     <?php $i ++; } ?>
     </tbody>
  </table>
      </div>
</div>
</section>
<?php } else{?>
   <div class="container"> 
  <h1 class="empty"> Not order yet!</h1>
  </div>
 <?php } ?>
<br><br><br><br><br>
<?php @include 'footer.php'; ?>
</body>
</html>