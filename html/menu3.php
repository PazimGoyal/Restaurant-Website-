<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible"<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Moonlight Indian Cuisine-Menu</title>
<link rel="icon" type="image/x-icon"
     href="../img/Capture.png" />

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link href="../css/style2.css" rel="stylesheet" type="text/css">
</head>
<body class="menubook">
<?php include('config.php');
?>


<nav class="navbar  navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle navbar-collapse toggle_button" data-toggle="collapse" data-target="#myNavbar">
      <div class="icon-bar"></div>
      <div class="icon-bar"></div>
      <div class="icon-bar"></div>
      </button>
      <a class="navbar-brand" href="../"><img src="../img/Capture.png" height="30px"></a> </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar" >
      <ul class="nav navbar-nav">
        <li><a href="../">Home</a></li>
        <li> <a href="menu3.php">Menu</a></li>
                <li> <a href="specialOffers.php">Special Offers</a></li>
<li><a href="menulog.html">Order Online</a></li>
       <li><a href="gallery.html">Gallery</a></li>  
        <li><a href="about_us.html">About us</a></li>
        <li><a href="contact_us.html">Visit us</a></li>
      </ul>
    </div>
  </div>
</nav>

  <table class="menus table">
    <tr>
      <td style="border-top:none;"><a href="menu.php">ENTREE</a></td>
      <td style="border-top:none;"><a  href="menu2.php">MAIN COURSES</a></td>
      <td style="border-top:none;"><a class="active" href="menu3.php">DRINKS & DESSERTS</a></td>
    </tr>
  </table>
<a href="specialOffers.php" style="padding:0px;margin:0px; text-align:center;">
<h3 class="offer_light">Click For More Special Offers</h3>
</a>

<div class="row row1">
<div class="col-lg-12 c1"> <div class="head_2" style="background: url(../img/menu/074d4496-74f5-4b2c-84be-790a4a518255.jpg) no-repeat center;
   background-size:cover; height:80px; margin:0px; padding-top:10px; width:100%;">
<h2 style="padding-left:100px;">
Drinks</h2>
  </div>
    <?php
$sql = "SELECT Product,Full_price
 FROM menu where Type ='drinks' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table table-striped table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td>";
$i=1;

    while($row = $result->fetch_assoc()) {
echo "<tr><td>$i</td><td>". $row["Product"]."</td><td>$ ".$row["Full_price"]."</td></tr>";
$i=$i+1;	
}
echo "</table></center>";
} else {
    echo "<center>Menu Not Found</center>";
}
?>


</div>
</div>
 <div class="row row1">
<div class="col-lg-12 c1"> <div class="head_2" style="background: url(../img/menu/asiagoSteak.jpg) no-repeat center;
   background-size:cover; height:80px; margin:0px; padding-top:10px; width:100%;">
<h2 style="padding-left:100px;">
Desserts</h2>
  </div>
    <?php
$sql = "SELECT Product,Full_price
 FROM menu where Type ='desert' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table table-striped table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td>";
$i=1;

    while($row = $result->fetch_assoc()) {
echo "<tr><td>$i</td><td>". $row["Product"]."</td><td>$ ".$row["Full_price"]."</td></tr>";
$i=$i+1;	
}
echo "</table></center>";
} else {
    echo "<center>Menu Not Found</center>";
}
?>


</div>
</div>
  </div>
  <footer> </footer>
<?php 
$conn->close();


?>
</body>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/smoothscroll.js"></script> 

</html>
