<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Moonlight Indian Cuisine , 138 SLAYTER AVENUE BRONBERG PLAZA ASHMORE QLD 4214, Australia ">
<meta name="description" content="Restaurant Slayter avenue, Moonlight Slayter Avenue">

<meta name="google-site-verification" content="neR_tBt0frLu46fcXbM8F0U0viFftfh9dzpOcAIWjuU" />



<title>Special Offers-  Moonlight Indian Cuisine, Ashmore</title>

<!-- Bootstrap -->
<link rel="icon" type="image/x-icon"
     href="../img/Capture.png" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link href="../css/style8.css" rel="stylesheet" type="text/css">

<link href='https://fonts.googleapis.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Shojumaru" rel="stylesheet" type="text/css">
</head><body>
<nav class="navbar navigation">
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
        <li><a href="../" class="active">Home</a></li>
               <li> <a href="menu2.php">Menu</a></li>
        <li> <a href="specialOffers.php">Special Offers</a></li>
        <li><a href="menulog.html">Order Online</a></li>
       <li><a href="gallery.html">Gallery</a></li>  
        <li><a href="about_us.html">About us</a></li>
        <li><a href="contact_us.html">Visit us</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
include('config.php');
 ?>
 

<div class="offer"><center>Special Offers</center></div>
<div class="page">
<?php
echo"dvdsnvosdi"; 
$sql = "SELECT Title,Offer,Image
 FROM offers";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
$i=1;

    while($row = $result->fetch_assoc()) {
    echo'<div class="card row">
<div class="col-md-3 col-lg-3"><center>
<img src="'.$row['Image'].'"class="imageoffer"></center>
</div>
<div class="col-md-9 col-lg-9">
<center><div class="title">'.$row['Title'].'</div>
<div class="discription">'.$row['Offer'].'</div>
</center>
</div>
</div>';
	}
}
?>
<div style="height:50px"></div>
</div>

</body>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</html>
