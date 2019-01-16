<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Moonlight</title>

<!-- Bootstrap -->
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/style4.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/smoothscroll.js"></script> 
<script type="text/javascript" src="../js/javareq.js"></script>
</head>
<body>
<nav class="navbar  navbar-fixed-top navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle navbar-collapse toggle_button" data-toggle="collapse" data-target="#myNavbar">
      <div class="icon-bar"></div>
      <div class="icon-bar"></div>
      <div class="icon-bar"></div>
      </button>
      <a class="navbar-brand" href="index.html"><img src="../img/Capture.png" height="30px"></a> </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar" >
      <ul class="nav navbar-nav">
        <li><a href="../index.html">Home</a></li>
        <li> <ahref="menu2.php">Menu</a></li>
        <li><a   class="active" href="OnlineOrder.php">Order Online</a></li>
       <li><a href="gallery.html">Gallery</a></li>  
        <li><a href="about_us.html">About us</a></li>
        <li><a href="contact_us.html">Visit us</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
include('config.php');
$data='';
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>
<div class="all">
<?php echo" <textarea id='text_got' style='color:#000; display:none; '>".$_POST["data"]."</textarea>"?>



  <div class="mobile_number">
    <div class="head"><center><h3>1. Enter Mobile Number</center></div>
    <div class="text_area1" id="text_area1">
<center><br>Please Enter Mobile Number :<br><br>
  <form  onSubmit="return false;" action="" method="post">
<input type="tel" id="mobile" name="getdata"  value="" class="text"><br><br><input type="submit" value="continue"  class="button" name="submitbutton" onClick="info()">


 </center>
</div>
  </div>
  <div class="address">
    <div class="head"><center><h3>2. Select Address</h3></center></div>
    
    <div class="text_area2" id="text_area2">
    <center>
    <div class="address_box" id="address_box" style="font-size:x-large; font-style:oblique; overflow:scroll;">
            <center><img src='../img/loading3.gif'></center>

    </div>
    
    <input type="button" value="Add New Address" class="button" onClick="hide('text_area2','text_area3')">
        <input type="button" value="continue" class="button" onClick="data(),data2()">
      </center>
    </div>
  </div>
  <div class="order">
    <div class="head"><center><h3>3. Confirm Order</h3></center></div>
    <div class="text_area3" id="text_area3">
    
    <div id="order_area">
    <center><img src='../img/loading3.gif'></center></div>
    <center>
<br><br><input type="button" value="continue" class="button" onClick="hide('text_area3','text_area4'),putdata()"></center></div>
  </div>
  <div class="thanku">
    <div class="head"><center><h3>4. Thank you</h3></center></div>
    <div class="text_area4" id="text_area4">
    <div id="txt_area4"><center><img src='../img/loading3.gif'></center>
    </div>
    <center>
    </<br><br>
   <a href="../index.html"> 
    <input type="button" value="continue" class="button"></a></center>
    </div>
  </div>
</div>

</center>
</div>
</body>
</html>
