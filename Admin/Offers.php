<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Moonlight Indian Cuisine</title>

<link rel="icon" type="image/x-icon"
     href="Capture.png" />

<link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Shojumaru" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="main.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">  
            </head>
    <body>
    <nav class="navbar  navigation" style="text-decoration:none;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle navigation" data-toggle="collapse" data-target="#myNavbar">
      <div class="icon-bar"></div>
      <div class="icon-bar"></div>
      <div class="icon-bar"></div>
      </button>
      <a class="navbar-brand active" href="http://www.moonlightindiancuisine.com.au/"><img src="Capture.png" height="30px>"</a> </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar" >
      <ul class="nav navbar-nav">
        <li><a href="http://www.moonlightindiancuisine.com.au/"> Home</a></li>
        <li> <a href="index.php">ADD-Menu</a> </li>
        <li><a href="Edit_del.php">Edit-Menu</a></li>
        <li><a href="Offers.php">Add-Offers</a></li>
        <li><a href="Offers.php">Edit-Offers</a></li>

       
      </ul>
    </div>
  </div>
</nav>


<?php
include('config.php'); ?>
        <form id="booking-form" class="booking-form" name="form1" method="post" action="">
                          <?php 
session_start();

if(isset($_POST['submit'])){
$name=$_POST['name'];
$price=$_POST['price'];
if($name===""||$price==="")
{	echo"<center><div style='font-size:x-large; color:rgba(135,27,28,1.00);padding-top:10px;'>Fields Cant Be Empty</div></center>";


	}else{

$a=array("../img/o1.png","../img/o2.png","../img/o3.png","../img/o4.png","../img/o5.png","../img/o6.png");
$random_keys=array_rand($a,2);
$img = $a[$random_keys[0]];

$sql = "INSERT INTO offers (Title,Offer,Image)
VALUES ('$name', '$price','$img')";





if ($conn->query($sql) === TRUE) {
    echo "<center><div style='font-size:x-large; color:rgba(135,27,28,1.00);padding-top:10px;'>New record created successfully</div></center>";
} else {
    echo "<center><div style='font-size:x-large; color:rgba(135,27,28,1.00);padding-top:10px;'>Error: " . $sql . "<br>" . $conn->error."</div></center>";
}
}
$conn->close();}
?>


            <div class="h1">
              <p style="color:#952D06;">Add Offer</p>
            </div>  
            <div id="form-content">
             
                      
                <div class="group">
                    <label for="title">Offer Title</label>
                    <div><input id="name" name="name" class="form-control" type="text" placeholder="Title">               </div>
                </div>
                   <div class="group">
                    <label for="offer">Offer Description</label>
                    <div><textarea id="price" name="price" class="form-control" type="" placeholder="Description"></textarea></div>
                </div>
                <div class="group submit">
                    <div><input name="submit" type="submit" value="Submit"/></div>
                </div>
            </div>
            </form>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</html>
