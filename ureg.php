<?php 
 include_once "conn.php";	
 include_once "function.php";	
session_start();
$errors = array();

if (!onlyname($_POST['uname'])) {
	$errors['onlychar'] = "Please enter only  Character";
    }
 if (!password($_POST['upass'])) {
$errors['chkpass'] = "Please enter Valid password like A@s10";
            }
if (!mobile_number($_POST['umob'])) {
$errors['chkmobile'] = "Please enter  10 digit Number";
                }               
if(count($errors) > 0){
		$_SESSION['error'] = $errors;
		echo "<script>window.location = 'register.php'</script>"; 
		exit;
}
else { 
		unset($_SESSION['error']);
}

                $nm = $_POST['uname'];
                $email = $_POST['uemail'];
                $password = $_POST['upass'];
                $mobile = $_POST['umob'];
                $gender = $_POST['g'];
                $address = $_POST['address'];
                $target_path = "uimage/";
                $target_path = $target_path.time().basename($_FILES['uimg']['name']);
                $tmp_file = $_FILES['uimg']['tmp_name'];
                move_uploaded_file($tmp_file,$target_path);
                $otp= rand(0000,9999);

     $select = mysqli_query($conn,"select * from user where email='$email'");
     if(mysqli_num_rows($select) > 0)
     {
        echo "<script>alert('User already Exits')</script>";
        echo "<script>window.location='register.php'</script>";
     }
      else{


          $query= "insert into user (uname,email,password,mobile,gender,address,uimage,otp) values('$nm','$email','$password','$mobile','$gender','$address','$target_path','$otp')";
           $result= mysqli_query($conn,$query);
      if($result)
		{
		echo "<script>alert('successfully inserted')</script>";
        echo "<script>window.location='login.php'</script>";
        }
    }

	?>