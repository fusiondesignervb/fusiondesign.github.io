<html>        
<head>                
<title>Event Planner</title>        
<link href="css/bootstrap.min.css" rel="stylesheet">      
<link href="style.css" rel="stylesheet">
<link href="admin/sweetalert.min.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>        
<script src="js/bootstrap.min.js"></script> 
<script src="admin/js/sweetalert2.all.min.js"></script>        
<link href="css/style" rel="stylesheet">   
</head>  
<?php @include 'header.php'; ?>
<body style="background-image: url('img/lg9.jpg');"class="banner2">
 <section class="contact">
    <div class="loginform">
      <form  action="log.php" method="post">
        <h2 align="center" style="color:#330066;">LOGIN</h2>
        <div class="inputbox">
        <span>Email/Name:</span>
          <input type="text" name="email"placeholder="enter email or name" required="required">
          </div>
        <div class="inputbox">
        <span>Password:</span>
          <input type="password" name="pass"placeholder="enter password" required="required">
        </div>
        <div class="inputbox">
          <input type="submit" name="loginbtn" class="clear" value="Login">
        </div>
        <div style="height:2px;width:100%;background:black;"> <br></div>
       <center><div><h4 style="text-decoration:none;color:#330066;font-size:160%">DON'T HAVE AN ACCOUNT?<a href="register.php" style="color:#330066;text-decoration:none;"> REGISTER NOW!</a></h4></div></center> 
      </form>
    </div>
   </div>
   </section>
<?php @include 'footer.php'; ?>

</body>
</html>