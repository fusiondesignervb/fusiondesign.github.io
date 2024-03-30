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
    div .img1:hover {
  border: 5px solid #777;
  border-color:#8B123B;
  
}
    div .img1 {
        top:15px;
border-radius:1px;
  width: 100%;
height:auto;
}
th,td{
    padding:15px;
    text-align:center;
}
@media only screen and (max-width: 700px) {
 .img1{
    width: 80%;
    margin: 6px 10;
  }
}
@media only screen and (max-width: 500px) {
  .img1{
    width: 100%;
  }
}
</style>
</head>
<body style="background:#F8E5DF">
    <?php @include 'header.php'; ?>
    <div>
  <u><h1 align="center"  class="bh" style="letter-spacing:5px;"> Wedding Events </h1></u>
</div>
<div>
    <table align="center">
        <tr><td>
                <img src="img/gwed2.jpg" alt="" class="img1">
            </td>
            <td>
                <img src="img/gwed4.jpg" alt="" class="img1">
            </td>
            <td>
                <img src="img/gwed6.jpg" alt="" class="img1">
            </td>
        </tr>
        <tr><td>
                <img src="img/gwed8.jpeg" alt="" class="img1">
            </td>
            <td align="center"colspan="2" >
                <img src="img/gwed7.jpg" alt="" class="img1">
            </td>
</tr>
<tr><td colspan="2" >
                <img src="img/gwed3.jpg" alt="" class="img1">
            </td>
            <td align="center">
                <img src="img/gwed9.jpeg" alt="" class="img1">
            </td>
</tr>
        <tr><td>
                <img src="img/gwed.jpg" alt="" class="img1">
            </td>
            <td>
                <img src="img/gwed5.jpg" alt="" class="img1">
            </td>
            <td>
                <img src="img/wed10.jpeg" alt="" class="img1">
            </td>
</tr>
    </table>
<table>
    <tr>
        <td>
    <video width="700" controls style="margin-left:6%; border: solid pink 5px">
  <source src=" vedio/wedding3.mp4"
  type="video/mp4">
  your browser does not support the video element.
</video>
</td>
<td>
<video width="700" controls style="margin-left:6%;border: solid pink 5px">
  <source src=" vedio/wedding4.mp4"
  type="video/mp4">
  your browser does not support the video element.
</video>
</td>
</tr>
</table>
<br><br><br><br>
    <?php @include 'footer.php'; ?>
    </body>
</html>