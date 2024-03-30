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
div .gallery:hover {
  border: 1px solid #777;
  opacity: 0.7;
}
div .ov:hover{
    border-radius:15px;
  opacity:1;
}

div.gallery img {
border-radius:15px;
  width: 100%;
height:auto
}
.ov{
  transition: .2s ease;
  opacity: 0;
  position: absolute;
  top:0;
  left:0;
  bottom:0;
  right:0;
  height:100%;
  width:100%;
}
div.te{
    color: #ffffff;;
    font-size:80px;
    font-family: 'fantasy';
    position: absolute;
  padding: 16px 32px; 
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  text-align: center;
}
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
@media only screen and (max-width: 700px) {
 .row .col-md-6 {
    width: 80%;
    margin: 6px 10;
  }
}
@media only screen and (max-width: 500px) {
  .row .col-md-6{
    width: 100%;
  }
}
</style>

   
</head>
<body style="background:#EBE8FC">
    <?php @include 'header.php'; ?>
    <div>
    <div  style="background-image: url('img/backge.jpg');"class="banner2">
  <div class="text">Fusion  Events Photo Gallery</div>
  <div class="text p"><p>Life is an event.Make it memorable.</p></div>
</div>
<div> &nbsp;</div>
<section><center>
<div style="margin-top:5%">
    <div class="row">
    <div class="col-md-4 col-sm-6">
  <div class="gallery">
  <a href="gwedding.php"><img src="img/1111.jpeg" alt="wedding" width="600" height="400">
  <div class="ov">
        <div class="te">
             Wedding Events
        </div>
  </div></a>
</div>

</div>


<div class="col-md-4 col-sm-6">
  <div class="gallery">
    <a href="gcorporate.php">
      <img src="img/ge2.jpg" alt="corporate" width="600" height="400">
      <div class="ov">
        <div class="te"> 
            Corporate Events
        </div>
  </div>
    </a>
  </div>
</div>

<div class="col-md-4 col-sm-6">
  <div class="gallery">
    <a href="gbirthday.php">
      <img src="img/birth2.jpeg" alt="birthday" width="600" height="400">
      <div class="ov">
        <div class="te">
            Birthday Events
        </div>
  </div>
    </a>
  </div>
</div>

<div class="col-md-4 col-sm-6"style="margin-top:50px;margin-left: 250px;">
  <div class="gallery">
    <a href="gmusic.php">
      <img src="img/gea4.jpg" alt="music" width="600" height="400">
      <div class="ov">
        <div class="te">
                Music Events
        </div>
  </div>
    </a>
  </div>
</div>

<div class="col-md-4 col-sm-6"style="margin-top:50px;margin-bottom:5%">
  <div class="gallery">
    <a href="gspecial.php">
      <img src="img/bwed.jpeg" alt="special" width="600" height="400">
      <div class="ov">
        <div class="te">
                 Special Events
        </div>
  </div>
    </a>
    </div>
</div>
    
</div>
</section>
<div>&nbsp;</div>
<?php @include 'footer.php'; ?>
</body>  
</html>