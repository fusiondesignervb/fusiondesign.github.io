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
  transform: scale(1.1);
transition: 1s ease;

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
  <u><h1 align="center"  class="bh" style="letter-spacing:5px;"> Birthday Events </h1></u>
</div>
<div>
    <table align="center">
        <tr><td>
                <img src="img/gbirth.jpg" alt="" class="img1">
            </td>
            <td>
                <img src="img/gbirth2.jpg" alt="" class="img1">
            </td>
            <td>
                <img src="img/gbirth3.jpg" alt="" class="img1">
            </td>
        </tr>
        <tr><td>
                <img src="img/gbirth4.jpg" alt="" class="img1">
            </td>
            <td>
                <img src="img/gbirth5.jpg" alt="" class="img1">
            </td>
            <td>
                <img src="img/gbirth6.jpg" alt="" class="img1">
            </td>
</tr>
<tr><td>
                <img src="img/gbirth7.jpg" alt="" class="img1">
            </td>
            <td>
                <img src="img/gbirth10.jpg" alt="" class="img1">
            </td>
            <td>
                <img src="img/gbirth9.jpg" alt="" class="img1">
            </td>
</tr>

    </table>
    <?php @include 'footer.php'; ?>
    </body>
</html>