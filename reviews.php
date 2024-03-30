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
 #im1 img:hover{
transform: scale(1.1);
transition: 1s ease;
}
</style>  
</head>  
<body   style="background-image: url('img/test.jpg'); height:95%;"class="banner2">
<?php @include 'header.php'; 
?> 

<?php
$tquery="select * from  contect";
$tres=mysqli_query($conn,$tquery);
?>
<section>
  <div class="container">
  <div><center><h3 style="color:#330066;padding-top:2%">TESTMONIALS FROM OUR </h3></div>
  <div><center><h1 style="color:black;font-size:525%">HAPPY CLIENTS</h1></div>
  <div class="testimonials2">
    <div class="row" style="padding-left:1%">
    <?php while($row=mysqli_fetch_array($tres)){
  ?>
      <div class="col-md-4 col-lg-12">
        <div class="card2">
          <div class="card-body2">
          <h2 style="margin-left:-2%;color:#330066">-<?php echo $row['name']; ?>.....</h2>
            <p><?php echo $row['feedback']; ?></p>
          </div>
        </div>
      </div>
      <?php  } ?>
</div> 
</section>
<?php @include 'footer.php'; ?> 
   
</body>    
</html>  