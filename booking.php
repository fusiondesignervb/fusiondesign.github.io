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
  
</style>

</head>  
<body style="  background:#f1f1f1;">
<?php @include 'header.php'; ?>
<div>
  <img src="img/contect.jpeg" class="banner">
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
          <li class="glyphicon glyphicon-map-marker"></i>
         </div>
          <div class="text1">
          <h3>Address</h3>
          <p>4671 Suger Camp Road, <br>ZaraComlex,Opp.Park Printers,<br>55060</p>
        </div>
      </div>
      <div class="disp">
        <div class="icon"><i  class="glyphicon glyphicon-earphone"></i>
      </div>
        <div class="text1">
          <h3>Phone</h3>
          <p>456-234-6029</p>
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
      <form action="">
       <h4 align="center">SEND US A MESSAGE</h4>
        <h2 align="center">LET'S GET STARTED</h2>
        <div class="inputbox">
        <span>FIRST NAME</span>
          <input type="text" name=""placeholder="enter first name" required="required">
         </div>
         <div class="inputbox">
        <span>LAST NAME:</span>
          <input type="text" name=""placeholder="enter last name" required="required">
         </div>
        <div class="inputbox">
        <span>EMAIL:</span>
          <input type="email" name=""placeholder="enter email" required="required">
          </div>
          <div class="inputbox">
        <span>PHONE NUMBER:</span>
          <input type="text" name=""placeholder="enter phone number" required="required">
          </div>
          <div class="inputbox">
        <span>HOW DID YOU HEAR ABOUT US?</span>
        <select name="">
							<option>Please Select</option>
							<option value="Phone Call">Phone Call</option>
							<option value="Google">Google</option>
							<option value="Social Media">Social Media</option>
              <option value="Eventective">Eventective</option>
              <option value="Other(post in comments" style>Other(post in comments)</option>
						</select>
         </div>
         <div class="inputbox">
        <span>TYPE OF EVENT</span>
        <select name="">
							<option>Please Select</option>
							<option value="Phone Call">Wedding</option>
							<option value="Google">Corporate</option>
							<option value="Social Media">BirthdayParty</option>
              <option value="Eventective">Music</option>
              <option value="Other(post in comments">Special</option>
						</select>
         </div>
         <div class="inputbox">
        <span>REQUESTED DATE:</span>
          <input type="text" name=""placeholder="enter Date" required="required">
          </div>
         <div class="inputbox">
        <span>ESTIMATED GUEST COUNT</span>
        <select name="">
							<option value="Phone Call">0-49</option>
							<option value="Google">50-74</option>
							<option value="Social Media">75-99</option>
              <option value="Eventective">100-124</option>
              <option value="">125-149</option>
              <option value="">150-174</option>
              <option value="">175-199</option>
              <option value="">200-250</option>
              <option value="">250+</option>
						</select>
         </div>
        <div class="inputbox">
        <span>ADDITIONAL NOTES</span>
          <textarea name=""placeholder="special requests...." required="required"></textarea>
         
        </div>

        <div class="inputbox">
          <input type="submit" name="" value="send">
        </div>
      </form>
    </div>
   </div>
 </section>
  
<?php @include 'footer.php'; ?>
</body>
</html>