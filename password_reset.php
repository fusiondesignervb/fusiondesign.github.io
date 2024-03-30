<html>        
<head>                
<title>Event Planner</title>        
<link href="css/bootstrap.min.css" rel="stylesheet">      
<link href="style.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>        
<script src="js/bootstrap.min.js"></script>  
<link href="css/style" rel="stylesheet">   
</head>  
<?php @include 'header.php'; ?>
<body style="background-image: url('img/lg9.jpg');"class="banner2">
 <section class="contact">
    <div class="loginform">
      <form action="password.php" method="post">
        <input type="hidden" name="id">
        <h2 align="center" style="color:#330066;margin-top:0.9%" >Change Password</h2>
        <div class="inputbox">
        <span>EMAIL:</span>
          <input type="email" name="uemail"placeholder="enter your  email" required="required">
</div>
<div class="inputbox">
<span>Old Password:</span>
          <input type="password" name="opass"placeholder="enter your old password" required="required">
</div>
<div class="inputbox">
        <span>PASSWORD:</span>
          <input type="password" name="pass"placeholder="enter password" required="required">
</div>
<div class="inputbox">
        <span>CONFIRM PASSWORD:</span>
          <input type="password" name="cpass"placeholder="confirm password" required="required">
</div>
        <div class="inputbox">
          <input type="submit" name="passwordreset" value="Reset">
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