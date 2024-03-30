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
.contactform1{
 background: rgba(255, 255, 255, 0.7);
  width: 50%;
  padding: 50px;
  margin-right:1%;
  border-radius:4%;

}
.contactform1 h2{
  font-size: 30px;
  font-weight: 500;
  color:#330066;
  margin-top:2%;
  margin-bottom:6%;

}
.contactform1 .inputbox{
  display: flex;
  width: 100%;
  margin-top: 10px;
}
.contactform1 .inputbox ::placeholder{
  font-size: 19px;
  color:rgb(103, 103, 103);
  font-weight: 500;

}
.contactform1 .inputbox input,
.contactform1 .inputbox select,
.contactform1 .inputbox textarea
{
  width: 100%;
  background: transparent;
  color:black;
  padding: 2px ;
  font-size: 18px;
  margin-bottom:2%;
  margin-left:2%;
  border-style:groove;
  border-radius: 5px;
  outline: none;
  resize: none;
}
.span{
  padding: 5px 0;
  font-size:135%;
  margin:5px 0;
  pointer-events: none;
  transition: 0.5%;
  color:#330066;
}
.contactform1 .inputbox input[type="submit"]{
  width: 100px;
  background:#330066;
  color: #fff;
  border: none;
  cursor: pointer;
  padding: 10px;
  font-size: 18px;
}
</style>

</head>   
<body style="background-image: url('img/lg4.jpg');"class="banner2">
<?php @include 'header.php'; ?>
<?php
include_once "conn.php";
 $user_id=$_SESSION['id'];
 $que = mysqli_query($conn,"select * from user where id = '$user_id' ");
 $row = mysqli_fetch_array($que); 

 $oque = mysqli_query($conn,"select * from orders where uid = '$user_id' ");
 $orow = mysqli_fetch_array($oque); 

 if(isset($_GET['book'])){
$book_id = $_GET['book'];
$que1 = mysqli_query($conn,"select * from cart where  id = '$book_id' ");
$trow = mysqli_fetch_array($que1);
 }
 ?>

 
<section class="contact" style="display: flex;">
<div class="contactform1">
      <form action="tbooking.php" method="post" enctype="multipart/form-data">
       <h3 align="center">Place Your Order</h3>
        <h2 align="center">LET'S GET STARTED</h2><br>
        <span class="span">YOUR NAME:</span>
        <span class="span" style="margin-left:32%">YOUR EMAIL:</span>
        <div class="inputbox">
         <input type="hidden" name="id" value="<?php echo $row['id'];?>"><br>
          <input type="text" name="fname"  value=" <?php  echo $row['uname']; ?>" readonly>
          <input type="email" name="email" value="<?php  echo $row['email']; ?>" readonly>
         </div>
         <span class="span">EVENT/THEME NAME:</span>
         <span class="span" style="margin-left:20%">TOTAL AMOUNT:</span>
          <div class="inputbox">
          <input type="text"  name="theme" value="<?php  echo $trow['name']; ?>" readonly>
          <input type="text" name="price" value="RS <?php   echo  $trow['price']; ?>/-" readonly>
          </div>
        <span class="span">REQUESTED DATE:</span>
         <div class="inputbox">
          <input type="date" id="date1"  name="start" placeholder="enter Date" required="required"><span class="span" style="padding-left:2%">TO</span>
          <input type="date" id="date2"  name="end" placeholder="enter Date" required="required">
          </div>
        <span class="span">ESTIMATED GUEST COUNT</span>
        <span  class="span" style="margin-left:15%">PAYMENT METHOD:</span>
         <div class="inputbox">
        <select name="guest">
							<option>0-49</option>
							<option>50-74</option>
							<option>75-99</option>
              <option>100-124</option>
              <option>125-149</option>
              <option>150-174</option>
              <option>175-199</option>
              <option>200-250</option>
              <option>250+</option>
						</select>
          <input type="text" name="pay" placeholder="enter phone number" value="cash on delivery" required="required" readonly>
         </div>
         
          <?php   if(mysqli_num_rows($oque) > 0){ ?>
        <span class="span">PHONE NUMBER:</span>
         <div class="inputbox">
          <input type="text" name="mobile" placeholder="enter phone number" value ="<?php echo $orow['mobile']; ?>" required="required" readonly>
          </div>
          <?php   }  else{ ?>
        <span class="span">PHONE NUMBER:</span>
            <div class="inputbox">
          <input type="text" name="mobile" placeholder="enter phone number"  required="required">
          </div>
            <?php }
          if(mysqli_num_rows($oque) > 0){ ?>
            <span class="span">ADDRESS:</span>
            <div class="inputbox">
              <textarea name="address" value ="<?php echo $orow['address']; ?>" readonly ><?php echo $orow['address']; ?></textarea>
            </div>
       <?php   }  else{
          ?>
        <span class="span">ADDRESS:</span>
         <div class="inputbox">
          <textarea name="address" placeholder="e.g.flate No,Strrt Near By....." ></textarea>
        </div>
        <?php }?>
        <span class="span">CITY:</span>
        <span class="span" style="margin-left:44%">STATE:</span>
        <div class="inputbox">
            <input type="text" name="city" placeholder="e.g. jamnagar" required>
            <input type="text" name="state" placeholder="e.g. gujarat" required>
            </div>
        <div class="inputbox">
          <input type="submit" name="th" value="Book">
       </div>
          <div style="height:1px;width:100%;background:grey;"> <br></div>
      </form>
    </div>
   </div>
  </section>
<?php @include 'footer.php'; ?>

<script>
   var date = new Date();
var tdate = date.getDate() + 1;
var mounth = date.getMonth() + 1;

if(tdate < 10){
  tdate = '0' + tdate;
}
if(mounth < 10){
  mounth = '0' + mounth ;
}
var year = date.getUTCFullYear();
var mindate = year + "-" + mounth + "-" + tdate;
document.getElementById("date1").setAttribute('min',mindate);
document.getElementById("date2").setAttribute('min',mindate);

</script>

</body>
</html>