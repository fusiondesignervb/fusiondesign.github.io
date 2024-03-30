<html>        
<head>                
<title>Event Planner</title>        
<link href="css/bootstrap.min.css" rel="stylesheet">      
<link href="style.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>        
<script src="js/bootstrap.min.js"></script>  
<link href="css/style" rel="stylesheet">   
</head>  
<body style="background:#f1f1f1;">
<?php @include 'header.php'; ?>
<div>
<div  style="background-image: url('img/contact.jpeg');"class="banner2">
  <div class="text">Contact Fusion Event Management</div>
  <div class="text p"><p>Life is an event.Make it memorable.</p></div>
</div>
 <section class="contact">
   <div class="content">
   <h2>Contact us</h2>
   <p class="p1">We're here for you and can schedule an appointment to discuss your upcoming event. please use the  information below to connect with us!</p>
   </div>
   <div class="cont">
    <div class="contectinfo">
      <div class="disp">
        <div class="icon">
          <img src="img/location.png" alt="" height="60%">
         </div>
          <div class="text1">
          <h3>Address</h3>
          <p>4671 Suger Camp Road, <br>ZaraComlex,Opp.Park Printers,<br>55060</p>
        </div>
      </div>
      <div class="disp">
        <div class="icon">
          <i><img src="img/phone-call.png" alt="" height="40%"></i>
      </div>
        <div class="text1">
          <h3>Phone</h3>
          <p>456-234-6029</p>
          <p>89472 47289</p>
        </div>
      </div>
      <div class="disp">
        <div class="icon"><i class="glyphicon glyphicon-envelope"></i>
    </div>
        <div class="text1">
          <h3>Email</h3>
          <p>fusionevent@gamil.com</p>
        </div>
      </div>
      <div class="disp">
        <div class="icon1">
        <a href="https://instagram.com/state_library?igshid=NTdlMDg3MTY="><img src="img/ic2.png" aling="center" width="50px" height="50px"></a>
       <a href="https://youtu.be/huljpbVjQx0"><img src="img/ic4.png" aling="center" width="50px" height="50px"></a>
       <a href="#"><img src="img/ic1.png" aling="center" width="50px" height="50px"></a>
       <a href="#"><img src="img/ic3.png" aling="center" width="50px" height="50px"></a>
         </div>
      </div>
    </div>
    <div class="contactform">
    <form  action="contect_ins.php" method="post"enctype="multipart/form-data">
       <h4 align="center">SEND US A MESSAGE</h4>
        <h2 align="center">LET'S GET STARTED</h2>
        <div class="inputbox">
        <span>NAME</span>
          <input type="text" name="uname"placeholder="enter name" required="required">
         </div>
         <div class="inputbox">
        <span>EMAIL:</span>
          <input type="email" name="uemail"placeholder="enter email" required="required">
          </div>
          <div class="inputbox">
        <span>PHONE NUMBER:</span>
          <input type="text" name="mobile"placeholder="enter phone number" required="required">
          </div>
        <div class="inputbox">
        <span></span>GIVE YOUR FEEDBACK
          <textarea name="note"placeholder="feedbacke...." required="required"></textarea>
        </div>
        <div class="inputbox">
          <input type="submit" name="b1" value="send">
        </div> 
      </form>
    </div>
   </div>
 </section>
  <br> <br>
<?php @include 'footer.php'; ?>
</body>
</html>