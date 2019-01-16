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
        <li><a href="Offer_edit.php">Edit-Offers</a></li>

      
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
$type=$_POST['type'];
$price=$_POST['price'];
if($name===""||$type==="#"||$price==="")
{
	echo"<center><div style='font-size:x-large; color:rgba(135,27,28,1.00);padding-top:10px;'>Fields Cant Be Empty</div></center>";
	
	}else{
$sql = "INSERT INTO menu (Product,Full_price,Type)
VALUES ('$name', '$price','$type')";

if ($conn->query($sql) === TRUE) {
    echo "<center><div style='font-size:x-large; color:rgba(135,27,28,1.00);padding-top:10px;'>New record created successfully</div></center>";
} else {
    echo "<center><div style='font-size:x-large; color:rgba(135,27,28,1.00);padding-top:10px;'>Error: " . $sql . "<br>" . $conn->error."</div></center>";
}
}
$conn->close();}
?>


            <div class="h1">
              <p style="color:#952D06;">Add Menu Item</p>
            </div>  
            <div id="form-content">
             
                      
                <div class="group">
                    <label for="name">Item Name</label>
                    <div><input id="name" name="name" class="form-control" type="text" placeholder="Product Name">               </div>
                </div>
                
                <div class="group">
                    <label for="adults">Type</label>
                    <div>
                        <select id="adults" name="type" class="form-control">
<option value="#">TYPE OF FOOD</option>
                        <option value="chicken">Chicken</option>
                            <option value="seafood">Sea Food</option>
                            <option value="tandoori">Tandoori</option>
                            <option value="special">Moonlight Special</option>
                            <option value="vegitable">Vegitarian</option>
                            <option value="bread">Bread</option>
                            <option value="rice">Rice</option>
                            <option value="accompaniments">Accompaniments</option>
                           <option value="desert">Desert</option>
                           <option value="drinks">Drinks</option>
                           <option value="entree_special">Entree Fried</option>
                           <option value="entree_tandoori">Entree Tandoori</option>
                          </select>
                    </div>
                </div>
                <div class="group">
                    <label for="phone">Price</label>
                    <div><input id="price" name="price" class="form-control" type="text" placeholder="Price"></div>
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
