<html>        
<head>                
<title>Event Planner</title>                
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">      
<link href="style.css" rel="stylesheet">
 <script src="js/jquery.min.js"></script>        
<script src="js/bootstrap.min.js"></script>  
<link href="css/style" rel="stylesheet">   
</head>  
<body style="background:#f1f1f1">
<div>
<?php @include 'header.php'; ?> 
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="img/home1.jpg" class="banner">
  <div class="text">FUSION Event Management</div>
  <div class="text p"><p>A full-service global event planning and marketing agency</p></div>
</div>
<div class="mySlides fade">
  <img src="img/ho2.jpg" class="banner">
  <div class="text">Weddings & Receptions</div>
</div>
<div class="mySlides fade">
  <img src="img/home3.jpg" class="banner">
  <div class="text">Corporate Events & Tradeshows</div>
 </div>
 <div class="mySlides fade">
  <img src="img/ho4.jpg" class="banner">
  <div class="text">Birthday Celebrations & Parties</div>
</div>
<div class="mySlides fade">
  <img src="img/ho5.jpg" class="banner">
  <div class="text">Music Events & Concerts</div>
</div>
<div class="mySlides fade">
  <img src="img/hom6.jpg" class="banner">
  <div class="text">Special Events & Conferences</div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div class="p1">
  <h1 align="center" style="letter-spacing:10px;"> EVENT PLANNING & DESIGN </h1><br>
  <?php
  require_once "conn.php";
					$sql = "SELECT * FROM `catpackages` where cid = '8'";
					$result = mysqli_query($conn,$sql);
					$i = 1;

					
				    	while($row = mysqli_fetch_array($result))
						{ 
						 
						?>
				<center>	<h4><?php echo $row['cdetails']; ?></h4> </center>
			 </div>
			  <?php
					
					 
					   $i++;
					  }
					
					?>
</div>
 <div class="mdiv">
  <div class="ldiv"style=" background-color:#D1EAF0;height:125%" >
    <h1 class="bh" style="color:black;">Effortless Elegance</h1>
  <p class="p1" style="color:black;line-height:40px;">We create bespoke weddings and events that are inspired by our clients. We work collaboratively to ensure your event is cohesive and thoughtful. At Fusion Event Planning, we believe that even the smallest details can have a huge impact.
 <br> <button class="p1"style="width:55%;margin:0%;background:#8c2645;color:#D1EAF0">WEDDING PORTFOLIO</button>
</p>
  </div>
  <div class="rdiv box">
    <img src="img/box1.jpg" alt="cloud sky" class="img">
  </div>
</div>
<br>
<div class="mdiv">
  <div class="ldiv2" >
  <img src="img/box2.jpg" alt="cloud sky" class="img">
  </div>
  <div class="rdiv2 box"style=" background-color:#0E2433;position:absolute;margin-top:5%;margin-left:50%;width:40%;height:90%">
    <h1 class="bh"style="color:white;">Professional Team</h1>
  <p class="p1"style="color:white;line-height: 35px;">We are type-A creatives backed by experienced event planning teams in both our Boston and NYC locations. We take on a limited number of events per year to ensure each client receives the highest level of service and attention. At Fusion Event Planning, we’re dedicated to producing not only a spectacular event, but the foundation for memories that will last a lifetime.
  <br> <button class="p1"style="width:55%;margin:0%;background:#8c2645;color:#D1EAF0">MEET JANVI & URVASHI</button>
</p>
  </div>
</div>
<br><br><br><br><br><br><br><br>
<div class="mdiv">
  <div class="ldiv2" >
  <img src="img/box5.jpg" alt="cloud sky" class="img">
  </div>
  <div class="rdiv2 box"style="height:127%; background-color:#D1EAF0;">
    <h1 class="bh"style="color:black;">Personal touches</h1>
  <p class="p1"style="color:black;line-height: 40px;">You don't only want a beautiful event, you want it to be YOUR beautiful event. We believe that behind every event is a story. So, whether it’s a bespoke escort card display or creative ways to make each guest feel included, we’re here to help you tell your story.
  <br> <button class="p1"style="width:55%;margin:0%;background:#8c2645;color:#D1EAF0">OUR SERVICES</button>
</p>
  </div>
</div>
<br>
<div class="mdiv">
  <div class="ldiv" style=" background-color:#0E2433;position:absolute;margin-top:5%;margin-right:50%;height:90%;width:45%">
    <h1 class="bh" style="color:white;">Flawless Execution</h1>
  <p class="p1"style="color:white;line-height:45px;">We specialize in planning and designing weddings and events in private homes and raw spaces. We pride ourselves on flawless execution with high level touches. Weekend affairs, multiple days of tent installation, ferries and travel logistics are a typical day at the office.
  <br> <button class="p1"style="width:55%;margin:0%;background:#8c2645;color:#D1EAF0">WHAT CLIENTS ARE SAYING</button>
</p>
  </div>
  <div class="rdiv box"style="margin-left:30%">
    <img src="img/box6.jpeg" alt="cloud sky" class="img" style="width:1010px">
  </div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<h1 id="this" class="bh"style="color:#330066" align="center">EVENT <span style="color:black">PRODUCTION</span></h1>
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
     <a href="catering.php"> <img src="img/cat.jpg" height="270px" width="270px" style="box-shadow:10px 10px 5px lightgray"></a>
     <div style="color:#8c2645;font-size:23px;padding-top:0;">
          <h3>Catering</h3>
     </div>
     </div>
     <div class="col-sm-3 col-md-3" id="im1"style="height:350px;margin-left:10%">
    <a href="specialentry.php"><img src="img/spe.jpg" height="270px" width="270px" style="box-shadow:10px 10px 5px lightgray"></a> 
     <div style="color:#8c2645;font-size:23px;padding-top:0;">
          <h3>Couple Entry</h3>
     </div>
     </div>
     </div></center>
     <center>
<h1 align="center" style="letter-spacing:5px;"> Follow us to see behind the scenes: </h1>
<h3 align="center" style="font-family: sans-serif;"> @FusionEventPlanning </h3><br><br><br>
<video width="200" id="wed" controls>
    <source src="vedio/wading.mp4"
    type="video/mp4">
  your browser does not support the video element.
</video>
<video width="200" controls style="margin-left:6%">
  <source src=" vedio/birthday2.mp4"
  type="video/mp4">
  your browser does not support the video element.
</video>
<video width="200" controls style="margin-left:6%">
  <source src=" vedio/weding2.mp4"
  type="video/mp4">
  your browser does not support the video element.
</video>
<video width="200"controls style="margin-left:6%">
  <source src=" vedio/music2.mp4"
  type="video/mp4">
  your browser does not support the video element.
</video>
</center>
<br><br><br><br><br><br>


<?php @include 'footer.php'; ?> 





<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}

</script>
</body>    
</html>  