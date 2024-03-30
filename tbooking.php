<?php
  include "conn.php";
  session_start();
  $user_id=$_SESSION['id'];
if(isset($_POST['th']))
{
   $fname = $_POST['fname'];
   $email = $_POST['email'];
   $tname = $_POST['theme'];
   $price = $_POST['price'];
   $sdate = $_POST['start'];
   $edate = $_POST['end'];
   $guest = $_POST['guest'];
   $pay = $_POST['pay'];
   $mobile = $_POST['mobile'];
   $address = $_POST['address'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $st= 0;

  $date = "select * from orders where start_date = '$sdate'";
    $res= mysqli_query($conn,$date);
     $row = mysqli_fetch_array($res);
    if(mysqli_num_rows($res) > 3){
    echo "<script>alert('soory! We are booked that day.Please Change The Date')</script>";
    echo "<script>window.location='cart.php'</script>" ;
    }
else{
  $query= "insert into orders(uid,fname,email,tname,total_price,start_date,end_date,guest,payment_method,mobile,address,city,state,book_on,status) values('$user_id','$fname','$email','$tname','$price','$sdate','$edate','$guest','$pay','$mobile','$address','$city','$state',now(),'$st')";
          mysqli_query($conn, "DELETE FROM `cart` WHERE name = '$tname'");
    $result= mysqli_query($conn,$query);
     if($result){
    echo "<script>window.location='thankyou2.php'</script>";
   }
  }
}
  ?>