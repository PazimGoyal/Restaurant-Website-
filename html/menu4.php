<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Moonlight Menu</title>

<!-- Bootstrap -->
<link rel="icon" type="image/x-icon"
     href="../img/Capture.png" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link href="../css/style2.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include('config.php');
?>



<nav class="navbar  navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle navigation" data-toggle="collapse" data-target="#myNavbar">
      <div class="icon-bar"></div>
      <div class="icon-bar"></div>
      <div class="icon-bar"></div>
      </button>
      <a class="navbar-brand active" href="../index.html"><img src="../img/Capture.PNG" height="30>"</a> </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar" >
      <ul class="nav navbar-nav">
        <li class="menu"><a href="../index.html"> Home</a></li>
        <li class="active"> <a href="menu.php"> Menu</a> </li>
        <li class="menu"><a href="OnlineOrder.php">Order Online</a></li>
        <li class="menu"><a href="contactUs.html">Visit us</a></li>
      </ul>
    </div>
  </div>
</nav>

<nav class="navbar  navbar-fixed-top navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle navbar-collapse toggle_button" data-toggle="collapse" data-target="#myNavbar">
      <div class="icon-bar"></div>
      <div class="icon-bar"></div>
      <div class="icon-bar"></div>
      </button>
      <a class="navbar-brand" href="../index.html"><img src="../img/Capture.png" height="30px"></a> </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar" >
      <ul class="nav navbar-nav">
        <li><a href="../index.html">Home</a></li>
        <li> <a  class="active" href="menu2.php">Menu</a></li>
        <li><a href="OnlineOrder.php">Order Online</a></li>
        <li><a href="gallery.html">Gallery</a></li>  
        <li><a href="about_us.html">About us</a></li>
        <li><a href="contact_us.html">Visit us</a></li>
      </ul>
    </div>
  </div>
</nav>


  <table class="menus">
    <tr>
    <td><a href="menu.php">ENTREE</a></td>
      <td><a class="active" href="menu2.php">MAIN COURSES</a></td>
      <td><a href="menu3.php">DRINKS & DESSERTS</a></td>
    </tr>
  </table>
<div class="offers row white">
<div class="col-lg-6 col1">
<center><h3 class="red">Lunch Special<br>HALF CURRY / HALF RICE + CAN SOFT DRINK ONLY <br>TAKE AWAY $11.90  DINE-IN $13.90
</h3><br></center>
</div>
<div class="col-lg-6 col2"></div>
</div>
</div>

<div class="row row1">
  <div class="col-lg-6 c1">
<div class="head_2" style="background:url(../img/menu/chicken.jpg) no-repeat center; background-size:cover; height:80px; margin:0px; padding-top:10px; width:100%;">
<h2 style="padding-left:100px;"> <img src="../img/nveg.png" width="35px">
Chicken</h2>
  </div>    <?php
$sql = "SELECT Product,Half_price,Full_price
 FROM menu where Type ='chicken' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table table-striped table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td>";
$i=1;

    while($row = $result->fetch_assoc()) {
echo "<tr><td>$i</td><td>". $row["Product"]."</td><td>".$row["Full_price"]."</td></tr>";
$i=$i+1;	
}
echo "</table></center>";
    

} else {
    echo "<center>Menu Not Found</center>";
}
?>
  </div>
  <div class="col-lg-6 c2">
<div class="head_2" style="background:url(../img/menu/seafood.jpg) no-repeat center; background-size:cover; height:80px; margin:0px; padding-top:10px; width:100%;">
<h2 style="padding-left:100px;">
 <img src="../img/nveg.png" width="35px"> Seafood</h2>
  </div>      <?php
$sql = "SELECT Product,Half_price,Full_price
 FROM menu where Type ='seafood' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table table-striped table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td>";
$i=1;

    while($row = $result->fetch_assoc()) {
echo "<tr><td>$i</td><td>". $row["Product"]."</td><td>".$row["Full_price"]."</td></tr>";
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
    <div class="col-lg-6 c1">
<div class="head_2" style="background:url(../img/menu/banner-1.jpg) no-repeat center; background-size:cover; height:80px; margin:0px; padding-top:10px; width:100%;">
<h2 style="padding-left:100px;">
 <img src="../img/veg.png" width="35px"> Vegitable</h2>
  </div>          <?php
$sql = "SELECT Product,Half_price,Full_price
 FROM menu where Type ='vegitable' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table table-striped table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td>";
$i=1;

    while($row = $result->fetch_assoc()) {
echo "<tr><td>$i</td><td>". $row["Product"]."</td><td>".$row["Full_price"]."</td></tr>";
$i=$i+1;	
}
echo "</table></center>";
    

} else {
    echo "<center>Menu Not Found</center>";
}
?>

    </div>
    <div class="col-lg-6 c2">
<div class="head_2" style="background:url(../img/menu/ribs&chops.jpg) no-repeat center; background-size:cover; height:80px; margin:0px; padding-top:10px; width:100%;">
<h2 style="padding-left:100px;">
 <img src="../img/nveg.png" width="35px"> <img src="../img/veg.png" width="35px"> Moonlight Special</h2>
  </div>          <?php
$sql = "SELECT Product,Half_price,Full_price
 FROM menu where Type ='special' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table table-striped table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td>";
$i=1;

    while($row = $result->fetch_assoc()) {
echo "<tr><td>$i</td><td>". $row["Product"]."</td><td>".$row["Full_price"]."</td></tr>";
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
    <div class="col-lg-6 c1">
<div class="head_2" style="background:url(../img/menu/tandoori.jpg);	border: 2px ridge #fff;
 no-repeat center; background-size:cover; height:80px; margin:0px; padding-top:10px; width:100%;">
<h2 style="padding-left:100px;"> <img src="../img/nveg.png" width="35px">
 Tandoori</h2>
  </div>          <?php
$sql = "SELECT Product,Half_price,Full_price
 FROM menu where Type ='tandoori' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table table-striped table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td>";
$i=1;

    while($row = $result->fetch_assoc()) {
echo "<tr><td>$i</td><td>". $row["Product"]."</td><td>".$row["Full_price"]."</td></tr>";
$i=$i+1;	
}
echo "</table></center>";
    

} else {
    echo "<center>Menu Not Found</center>";
}
?>

    </div>
    <div class="col-lg-6 c2">
<div class="head_2" style="background:url(../img/menu/roti.jpg) no-repeat center; background-size:cover; height:80px; margin:0px; padding-top:10px; width:100%;">
<h2 style="padding-left:100px;"> <img src="../img/veg.png" width="35px">
 Breads</h2>
  </div>          <?php
$sql = "SELECT Product,Half_price,Full_price
 FROM menu where Type ='bread' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table table-striped table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td>";
$i=1;

    while($row = $result->fetch_assoc()) {
echo "<tr><td>$i</td><td>". $row["Product"]."</td><td>".$row["Full_price"]."</td></tr>";
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
    <div class="col-lg-6 c1">
<div class="head_2" style="background:url(../img/menu/accompaniments.jpg);	border: 2px ridge #fff;
 no-repeat center; background-size:cover; height:80px; margin:0px; padding-top:10px; width:100%;">
<h2 style="padding-left:100px;"> <img src="../img/veg.png" width="35px">
 Accompaniments </h2>
  </div>          <?php
$sql = "SELECT Product,Half_price,Full_price
 FROM menu where Type ='accompaniments' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table table-striped table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td>";
$i=1;

    while($row = $result->fetch_assoc()) {
echo "<tr><td>$i</td><td>". $row["Product"]."</td><td>".$row["Full_price"]."</td></tr>";
$i=$i+1;	
}
echo "</table></center>";
    

} else {
    echo "<center>Menu Not Found</center>";
}
?>

    </div>
    <div class="col-lg-6 c2">
<div class="head_2" style="background:url(../img/menu/rice.jpg) no-repeat center; background-size:cover; height:80px; margin:0px; padding-top:10px; width:100%;">
<h2 style="padding-left:100px;"> <img src="../img/veg.png" width="35px">
 Rice</h2>
  </div>          <?php
$sql = "SELECT Product,Half_price,Full_price
 FROM menu where Type ='rice' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table table-striped table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td>";
$i=1;

    while($row = $result->fetch_assoc()) {
echo "<tr><td>$i</td><td>". $row["Product"]."</td><td>".$row["Full_price"]."</td></tr>";
$i=$i+1;	
}
echo "</table></center>";
    

} else {
    echo "<center>Menu Not Found</center>";
}
?>

  </div>
  <footer> </footer>
<?php 
$conn->close();
?>
</body>
</html>
