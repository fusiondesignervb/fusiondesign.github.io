<div class="navi">
  <div class="contai">
    <div class="navbar-new">
      <div class="logo-toggle-container">
      <a href="index.php"><img src="img/ff.png" alt="">
    </a>
     <span class="toggle-box">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </div>
    <ul class="menu">
    <li><a href="index.php">Home</a></li>
      <li><a href="about.php">AboutUs</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <?php   
        include_once "conn.php";
  session_start();
	$id = $_GET['id'];
	$editqry = "select *from category";
  $i=1;
	$res = mysqli_query($conn,$editqry);
	while( $row = mysqli_fetch_array($res)){
?>
      <li><a href="service_detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['cname']; ?></a></li><?php }?>
        </ul>
      </li>
      <li><a href="reviews.php">Reviews</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="contect.php">ContactUs</a></li> 
      <?php
        $user_id = $_SESSION['id'];
        if(!isset($_SESSION['id'])){ ?>
      <li><a href="cart.php"><img src="img/favret.png" alt="" style="height:4%"></a></li>
          <?php } else {
         $select = mysqli_query($conn, "select count(*) from  cart WHERE user_id = '$user_id'");
          $select_row = mysqli_fetch_array($select);  
          $all = $select_row[0]; 
            ?>
      <li><a href="cart.php"><img src="img/favret.png" alt="" style="height:4%"><span>(<?php echo $all ?>)</span></a></li>
      <?php } ?>
       <?php  
       $imgid = $_SESSION['id'];
       $get_img = mysqli_query($conn,"select * from user where id = '$imgid' ");
       $res_img = mysqli_fetch_array($get_img);

       if(!isset($_SESSION['uname'])){ ?>
    <li><a href="login.php"><img src="admin/img/logout.png" style="height:3%;width:28px">LogIn</a></li>
    <?php  } else {?>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="<?= $res_img['uimage']; ?>"style="height:35px;width:40px;border solid;border-radius:100%">
        </a>
        <ul class="dropdown-menu">
          <li><a href="#"><?php if(isset($_SESSION['uname'])) echo$_SESSION['uname'] ?></a></li>
          <li><a href="uprofile.php">EditProfile</a></li>
          <li><a href="order.php">YourBooking</a></li>
          <li><a href="password_reset.php">Change <br>Password</a></li>
          <li><a href="logout.php"><img src="admin/img/login.png" style="height:3%;width:28%">LogOut</a> </p></li>
        </ul>
      </li>
    <?php  } ?>
    </ul>
    </div>
  </div>
</div> 

<script type="text/javascript">
  $(documnet).ready(function() {
   $(".navigation .navbar .logo-toggle-container .toggle-box").click(function(){
    $(".navigation .menu").stop().slideToggle();
   });
  });
</script>
