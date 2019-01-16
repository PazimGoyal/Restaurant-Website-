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
        <li> <a href="index.php"  class="active">ADD-Menu</a> </li>
        <li><a href="Edit_del.php">Edit-Menu</a></li>
        <li><a href="Offers.php">Add-Offers</a></li>
        <li><a href="Offer_edit.php">Edit-Offers</a></li>

      </ul>
    </div>
  </div>
</nav>


<?php
include('config.php'); ?>
        <form id="booking-form" class="booking-form" name="form1" method="post" action=""                          
<?php 
$id=$_POST['edit'];
$id_value=$id;

if($id>0){
$sql1 = "SELECT Title,Offer
FROM offers where id='$id'";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

	
	$name=$row["Title"];
	$money=$row["Offer"];
	
	   echo '

            <div class="h1">
              <p style="color:#952D06; font-size:large;text-align:center;">Edit Offers</p>
            </div>  
            <div id="form-content">
             
                      
                <div class="group">
                    <label for="name">Title</label>
                    <div><input id="name" name="name" class="form-control" type="text" value="'.$name.'">               </div>
                </div>
                
                <div class="group">
                    <label for="phone">Description</label>
                    <div><textarea id="price" name="price" class="form-control" type="text" value="'.$money.'"></textarea></div>
                </div>
                <div class="group submit">
                    <div><input name="submit" type="submit" value="Submit"/></div>
                </div>
            </div>
            </form>';

	}
	
	
	}else{
   echo "<center><div style='font-size:x-large; color:rgba(135,27,28,1.00);padding-top:10px;'>Error</div></center>";		
		
		}
}

?>
<?php

if(isset($_POST['submit'])){

$name=$_POST['name'];
$price=$_POST['price'];


if($name===""||$type==="#"||$price==="")
{
	echo"<center><div style='font-size:x-large; color:rgba(135,27,28,1.00);padding-top:10px;'>Fields Cant Be Empty</div></center>";
	}else{
$sql = "UPDATE offers SET Title='$name',Offer='$price' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<center><div style='font-size:x-large; color:rgba(135,27,28,1.00);padding-top:10px;'>Record Updated successfully</div></center>";
} else {
    echo "<center><div style='font-size:x-large; color:rgba(135,27,28,1.00);padding-top:10px;'>Error in updation</div></center>";
}
}
$conn->close();
header('Location: Offer_edit.php');
exit();
}
?>


    </body>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</html>
