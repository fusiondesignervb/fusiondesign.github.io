<?php
$sname="localhost";
$uname="root";
$password="";
$dbname="eventplanner";
$conn=mysqli_connect($sname,$uname,$password,$dbname);
if(!$conn){
    echo("conntion failed".mysqli_connect_error());
}


function redirect($url,$time){
  echo '<script type="text/javascript">';
   echo 'function leave() {';
   echo 'window.location.href="' . $url . '";';
   echo '}';
   echo 'setTimeout("leave()", ' . $time . ');';
   echo '</script>';
   exit();
}
?>