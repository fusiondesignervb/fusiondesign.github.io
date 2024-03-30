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
  .fimg{
  max-width:90%;
  height:65%;
  border-radius:100%;
  
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
  margin-top:10%;
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
  font-size: 18px;
  margin: 2% 0;
  border:1px solid #333;
  border: none;
  border-bottom: solid 1px #333;
}
.contactform1 .inputbox span{
  left: 0;
  padding: 5px 0;
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
<?php @include 'header.php'; ?>
<br>
<body style="background-image: url('img/lg4.jpg');"class="banner2">
 <section class="wrapper">
    <div class="contactform1">
    <div class="image-holder">
         <center> <img src="img/user.png" id="image" alt="" class="fimg"></center>
         </div>
      <form  action="ureg.php" method="post" enctype="multipart/form-data">
        <h2 align="center" style="color:#330066;margin-top:0.9%">REGISTERATION  FORM</h2>
        <div class="inputbox">
          <input type="text" name="uname"placeholder="Enter Full Name"required="required" >
          
       
          <input type="email" name="uemail"placeholder="Enter Email" required="required">
         </div>
         <?php if(isset($_SESSION['error']['onlychar'])) { ?>
        <p style="color:red"><b>*<?php echo $_SESSION['error']['onlychar'] ?></b></p>
       <?php } ?>
       
          <div class="inputbox">
          <input type="password" name="upass"placeholder="Enter Password"required="required" >
        
</div>
<?php if(isset($_SESSION['error']['chkpass'])) { ?>
        <p style="color:red"><b><?php echo $_SESSION['error']['chkpass'] ?></b></p>
       <?php } ?>
<div class="inputbox">
          <input type="text" name="umob"placeholder="Enter Mobile no."required="required" >
         
          </div>
          <?php if(isset($_SESSION['error']['chkmobile'])) { ?>
        <p style="color:red"><b><?php echo $_SESSION['error']['chkmobile'] ?></b></p>
       <?php } ?>
        <div style="margin-top:5%">
					<input  type="radio"  name="g" value="male"><b style="font-size:160%;">Male</b>
						<input type="radio" name="g" value="female"><b style="font-size:160%;">Female</b>
            </div>
            <div class="inputbox">
          <textarea name="address" placeholder="Enter Address.."></textarea>
        </div>
          <div class="inputbox">
          <input  type="file" id="inimg" name="uimg" required="required" >
          </div>
        <div class="inputbox">
          <input type="submit" name="b1" value="Register">
        </div>
        <div style="height:1px;width:100%;background:grey;"> <br></div>
      </form>
    </div>
   </div>
  </section>
  <br><br>
<?php @include 'footer.php'; ?>

<script>
  var file = document.getElementById("inimg");
var img = document.getElementById("image");
file.addEventListener("change",(e)=>{
  img.src = URL.createObjectURL(e.target.files[0])
})

</script>
</body>
</html>