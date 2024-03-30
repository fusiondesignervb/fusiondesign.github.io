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
include_once "conn.php"; $id=$_GET['id'];
$equery="select * from orders where id = $id";
$eres=mysqli_query($conn,$equery);
$row=mysqli_fetch_array($eres);
?>
<section class="contact">
<div class="contactform1" >
      <form action="booking_update.php" method="post" enctype="multipart/form-data">
      <h2 align="center">EDIT YOUR BOOKING</h2>
        <span class="span">YOUR NAME:</span>
        <span class="span" style="margin-left:32%">YOUR EMAIL:</span>
        <div class="inputbox">
         <input type="hidden" name="id" value="<?php echo $row['id'];?>"><br>
          <input type="text" name="fname"  value=" <?php  echo $row['fname']; ?>" readonly>
          <input type="email" name="email" value="<?php  echo $row['email']; ?>"readonly>
         </div>
        <div class="inputbox">
          </div>
        <span class="span">THEME NAME:</span>
        <span class="span" style="margin-left:31%">TOTAL AMOUNT:</span>
          <div class="inputbox">
          <input type="text"  name="theme" value="<?php  echo $row['tname']; ?>" readonly>
          <input type="text" name="price" value="<?php echo $row['total_price'] ?>" readonly>
          </div>
        <span class="span">REQUESTED DATE:</span>
         <div class="inputbox">
          <input type="date" id="date1"  name="start" value="<?php   echo $row['start_date'] ?>" ><span class="span" style="padding-left:2%">TO</span>
          <input type="date" id="date2"  name="end" value="<?php   echo $row['end_date'] ?>" >
          </div>
        <span class="span" >ESTIMATED GUEST COUNT:</span>
        <span class="span"  style="margin-left:15%;">PAYMENT METHOD:</span>
         <div class="inputbox">
        <select name="guest">
        <option disable><?php echo $row['guest'];  ?></option>
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
          <input type="text" name="pay" value="<?php echo $row['payment_method']?>" readonly>
         </div>
        <span class="span">PHONE NUMBER:</span>
         <div class="inputbox">
          <input type="text" name="mobile" value ="<?php echo $row['mobile']; ?>">
          </div>
          <span class="span">ADDRESS:</span>
            <div class="inputbox">
              <textarea name="address" ><?php echo $row['address']; ?></textarea>
</div>
                <span class="span">CITY:</span>
                <span class="span" style="margin-left:46%">STATE:</span>
               <div class="inputbox">
                <input type="text" name="city" value ="<?php echo $row['city']; ?>">
                <input type="text" name="state"  value ="<?php echo $row['state']; ?>">
            </div>
            <div class="inputbox">
                
            </div>
        <div class="inputbox">
          <input type="submit" name="th" value="edit">
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