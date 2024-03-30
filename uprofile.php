<html>        
<head>                
<title>Event Planner</title>        
<link href="css/bootstrap.min.css" rel="stylesheet">      
<link href="style.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>        
<script src="js/bootstrap.min.js"></script>  
<link href="css/style" rel="stylesheet">   
<style>
  .fimg{
  max-width:100%;
}
.wrapper{
  min-height:10vh;
  background-size:cover;
  background-repeat: no-repeat;
  display: flex;
  align-items: center;
  justify-content: center;
}
    .contactform1{
  background: rgba(255, 255, 255, 0.80);
  width:500%;
  padding:4%;
  display: flex;
  
}
.contactform1 .image-holder{
  width: 50%;
  margin-top:6%;
}
.contactform1 form{
  width: 70%;
  padding-left: 5%;
  padding-right: 4%;
}
.contactform1 h2{
  font-size: 30px;
  color:#fff;
  font-weight: 500;
  margin-bottom:10%;
}
.contactform1 .inputbox{
  width: 100%;
  margin-top: 10px;
  display: flex;
}
.contactform1 .inputbox ::placeholder{
  font-size: 19px;
  color: rgba(7, 7, 7, 0.80);
  font-weight: 500;
}
.contactform1 .inputbox input,
.contactform1 .inputbox select,
.contactform1 .inputbox textarea
{
  width: 100%;
  background: transparent;
  color:black;
  padding:2% 0;
  font-size:150%;
  margin: 2% 0;
  border:1px solid #333;
  border: none;
  border-bottom: solid 1px #333;
}
.contactform1 .inputbox span{
  left: 0;
  padding-top:2%;
  padding-right:2%;
  font-size: 20px;
  margin: 10px 0;
  pointer-events: none;
  transition: 0.5%;
  color:#330066;
}
.inputbox input:first-child{
  margin-right:25px;
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
<?php 
include_once "header.php"; 
 ?>
 <?php
 $id=$_SESSION['id'];
 $que = mysqli_query($conn,"select * from user where id = '$id' ");
 $row = mysqli_fetch_array($que); ?>
<body style="background-image: url('img/lg4.jpg');"class="banner2">
 <section class="wrapper">
    <div class="contactform1">
    <div class="image-holder">
         <center> <img src="<?php  echo $row['uimage']; ?>" alt="" class="fimg"></center>
         </div>
      <form  action="usview.php" method="post" enctype="multipart/form-data">
        <h2 align="center" style="color:#330066;margin-top:0.9%"> EDIT YOUR  PROFILE</h2>
         <input type="hidden" name="id" value="<?php echo $row['id'];?>"><br>
        <div class="inputbox">
          <input type="text" name="uname" value=" <?php  echo $row['uname']; ?>">
          <input type="email" name="uemail"  value=" <?php  echo $row['email']; ?>" required="required">
         </div>
          <div class="inputbox">
           <input type="text" name="umob"placeholder="enter email" value=" <?php  echo $row['mobile']; ?>" required="required">
          </div>
          <div>
           <?php if($row['gender'] == 'male') { ?>
		<input type="radio" name="g" value="male" checked> <b style="font-size:160%;">Male</b>
	<?php } else { ?>
	 	<input type="radio" name="g" value="male"><b  style="font-size:160%;">Male</b>
	<?php } ?>
	<?php if($row['gender'] == 'female') { ?>
		<input type="radio" name="g" value="female" checked><b  style="font-size:160%;">Female</b>
	<?php } else { ?>
	 	<input type="radio" name="g" value="female"><b  style="font-size:160%;">Female </b>
	<?php } ?>
            </div>
            <div class="inputbox">
          <input type="text" name="address"  value=" <?php  echo $row['address']; ?>" required="required">
          </div>
          <div class="inputbox">
          <input type="file" name="uimg">
		      <input type="hidden" name="old_image" value="<?php echo $row['uimage']; ?>"> 
  </div>
        <div class="inputbox">
          <input type="submit" name="b1" value="Submit">
</div>
        <div style="height:1px;width:100%;background:grey;"> <br></div>
      </form>
    </div>
   </div>
  </section>
  <br><br>

<?php @include 'footer.php'; ?> 
</body>
</html>