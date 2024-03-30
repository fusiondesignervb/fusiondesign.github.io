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
  <p class="container" style="color:#696880;">The Fusion experience is unlike any other. Our full-service event planning and design team will guide you every step of the way, ensuring a stress-free experience from start to finish.
</p><p class="container" style="color:#696880;">
With us, customization is guaranteed. From the very beginning, we will create a custom proposal tailored to your specific wants and needs. You'll be paired with an Fusion Event Team who will collaborate with you to bring your vision to life.
 We will team up with some of the best vendors in Nashville and take care of all the details like meeting scheduling, delivery dates, payments, day-of setup, and more.
</p><p class="container" style="color:#696880;">
 When it’s showtime, our staff will work tirelessly to guarantee your event is effortless and unforgettable.
 <br><a href="about.php"><h4 align="center">ReadMore...</h4></a></p>
</div>
 <div class="mdiv">
  <div class="ldiv"style=" background-color:#D1EAF0;height:127%" >
    <h1 class="bh" style="color:black;">Effortless Elegance</h1>
  <p class="p1" style="color:black;line-height:160%">We create bespoke weddings and events that are inspired by our clients. We work collaboratively to ensure your event is cohesive and thoughtful. At Fusion Event Planning, we believe that even the smallest details can have a huge impact.
 <br>
 <?php
   include_once "conn.php";
   $qu = "select * from category where id='1'";
   $re = mysqli_query($conn,$qu);
   $ro = mysqli_fetch_array($re);
 ?>
  <a href="service_detail.php?id=<?php echo $ro['id']; ?>"><button class="p1"style="width:60%;margin:0%;background:#8c2645;color:#D1EAF0">WEDDING PORTFOLIO</button></a>
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
  <p class="p1"style="color:white;line-height:160%;">We are type-A creatives backed by experienced event planning teams in both our Boston and NYC locations. We take on a limited number of events per year to ensure each client receives the highest level of service and attention. At Fusion Event Planning, we’re dedicated to producing not only a spectacular event, but the foundation for memories that will last a lifetime.
  <br> <a href="about.php #team"><button class="p1"style="width:55%;margin:0%;background:#8c2645;color:#D1EAF0">MEET BHOOMIKA & URVASHI</button></a>
</p>
  </div>
</div>
<br><br><br><br><br><br><br><br>
<div class="mdiv">
  <div class="ldiv2" >
  <img src="img/box5.jpg" alt="cloud sky" class="img">
  </div>
  <div class="rdiv2 box"style="height:128%; background-color:#D1EAF0;">
    <h1 class="bh"style="color:black;">Personal touches</h1>
  <p class="p1"style="color:black;line-height:160%;">You don't only want a beautiful event, you want it to be YOUR beautiful event. We believe that behind every event is a story. So, whether it’s a bespoke escort card display or creative ways to make each guest feel included, we’re here to help you tell your story.
  <br> <a href="#ser"><button class="p1"style="width:55%;margin:0%;background:#8c2645;color:#D1EAF0">OUR SERVICES</button></a> 
</p>
  </div>
</div>
<br>
<div class="mdiv">
  <div class="ldiv" style=" background-color:#0E2433;position:absolute;margin-top:7%;margin-right:50%;height:95%;width:45%">
    <h1 class="bh" style="color:white;">Flawless Execution</h1>
  <p class="p1"style="color:white;line-height:190%;">We specialize in planning and designing weddings and events in private homes and raw spaces. We pride ourselves on flawless execution with high level touches. Weekend affairs, multiple days of tent installation, ferries and travel logistics are a typical day at the office.
  <br> <a href="reviews.php"><button class="p1"style="width:55%;margin:0%;background:#8c2645;color:#D1EAF0">WHAT CLIENTS ARE SAYING</button></a>
</p>
  </div>
  <div class="rdiv box"style="margin-left:30%">
    <img src="img/box6.jpeg" alt="cloud sky" class="img" style="width:1010px">
  </div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<div  style="background-image:url('img/background7.jpg');"class="banner2">
<div><center><h1 class="lh1">Our Latest Events</h1></center></div>
  <?php
  
   $query="select * from  category  ORDER BY id desc  limit 3";
$res=mysqli_query($conn,$query);
 ?>
 <div class="row" style="padding-left:1%">
 <?php while($rows = mysqli_fetch_array($res)){ ?>
  <div class="col-md-4 ">
    <a href="service_detail.php?id=<?php echo $rows['id']; ?>"><img src="admin/<?= $rows['cimage']; ?>" alt=""  style="border:solid black 2px;border-radius:5%" height="50%" width="105%"></a>
      <center><h2 style="color:#1a0132"><?php echo $rows['cname']?></h2></center>
    </div>
    <?php } ?>
  </div>
</div> 
<br><br><br><br><br><br><br><br><br><br><br>
<h1 id="ser" class="bh"style="color:#330066" align="center">EVENT <span style="color:black">PRODUCTION</span></h1>
     <p  style="color:#330066;font-size:30px;" align="center" > Enjoy Event Related All services & Production Under One Roof </p>
     <center>
     <div class="row" style="padding-top:5%">
  <div class="col-sm-3 col-md-3." id="im1" style="height:350px;margin-left:10%;">
 <a href="AVEquipment.php"><img src="img/light.jpg" height="270px" width="270px" style="box-shadow:10px 10px 5px lightgray"></a> 
     <div style="color:#8c2645;font-size:23px;padding-top:0;">
          <h3>Sound & Lights</h3>
     </div>
     </div> 
     <div class="col-sm-3 col-md-3." id="im1" style="height:350px;margin-left:3%;">
     <a href="vanue_booking.php"><img src="img/vanue.jpg" height="270px" width="270px" style="box-shadow:10px 10px 5px lightgray"></a>
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
     <div class="col-sm-3 col-md-3" id="im1"style="height:350px;margin-left:10%">
    <a href="specialentry.php"><img src="img/spe.jpg" height="270px" width="270px" style="box-shadow:10px 10px 5px lightgray"></a> 
     <div style="color:#8c2645;font-size:23px;padding-top:0;">
          <h3>Couple Entry</h3>
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
     </div>
     </div>
    </center>
   <section>
   <div style="background-image: url('img/test3.png');"class="banner2">
   <div><center><h3 style="color:#330066;padding-top:2%">TESTMONIALS FROM OUR </h3></div>
  <div><center><h1 style="color:black;font-size:525%">HAPPY CLIENTS</h1></div>
  <div class="testimonials text-center">
    <div class="row" style="padding-left:1%">
    <?php
$tquery="select * from  contect limit 3";
$tres=mysqli_query($conn,$tquery);
?>
    <?php while($row=mysqli_fetch_array($tres)){
  ?>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <p style="font-size:150%;color:black;padding:5%"><?php echo $row['feedback']; ?></p>
            <h2 style="padding-top:1%;color:#330066">-<?php echo $row['name']; ?></h2>
          </div>
        </div>
      </div>
      <?php  } ?>
      <a href="reviews.php" style="text-decoration:none;"><button align="center" class="fbutton">See More..</button></a>
</div> 
   </section>
<br><br><br><br><br><br>
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
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}

</script>
</body>    
</html>  