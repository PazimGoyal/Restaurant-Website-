<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Delete and Edit</title>
<!-- Bootstrap --><link rel="icon" type="image/x-icon"
     href="Capture.png" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link href="style3a.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include('config.php');?>

<nav class="navbar  navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle navbar-collapse toggle_button" data-toggle="collapse" data-target="#myNavbar">
      <div class="icon-bar"></div>
      <div class="icon-bar"></div>
      <div class="icon-bar"></div>
      </button>
      <a class="navbar-brand" href="http://www.moonlightindiancuisine.com.au/"><img src="Capture.png" height="30px"></a> </div>
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

<div class=" col-md-12 col-sm-12 col-xs-12 ">

<?php
//if(isset($_POST['edit'])){
//session_start();
//$id=$_POST['edit'];	
//$_SESSION['id'] = $id;
//exit();
//}
if(isset($_POST['delete'])){
session_start();
$id=$_POST['delete'];	
$sql = "DELETE FROM menu WHERE id=$id";
if ($conn->query($sql) === TRUE) {
echo "<div style='font-size:xx-large; color:rgba(135,27,28,1.00);'>Record deleted successfully</div>";
} else {
echo "<div style='font-size:xx-large; color:rgba(135,27,28,1.00);'>Error deleting record</div>";
}
session_destroy();
}
?>














  <div class="a2">
    <div  id="MainCourse">
      <div class="menu_heads">MainCourse</div>
    </div>
    <div class="item_title">Chicken</div>




    <?php
$sql = "SELECT Product,Full_price,id
 FROM menu where Type='chicken' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table  table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Edit</td><td>Delete</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td>
<form action='edit.php' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='edit' > -</button>
</form>
</td><td>
<form action='' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='delete'>X</button></form> </td></tr>";
$i=$i+1;	
}
echo "</table></center>";
} else {
    echo "<center>Menu Not Found</center>";
}
?>

    <div class="item_title">
      <center>
        Seafood
      </center>
    </div>  <?php
$sql = "SELECT Product,Full_price,id
 FROM menu where Type='seafood' ORDER BY Product ASC";
echo "<form action='' method='post'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table  table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Edit</td><td>Delete</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td>
<form action='edit.php' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='edit' > -</button>
</form>
</td><td>
<form action='' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='delete'>X</button></form> </td></tr>";
$i=$i+1;	
}
echo "</table></center>";
} else {
    echo "<center>Menu Not Found</center>";
}
?>
    <div class="item_title">Tandoori</div>  <?php
$sql = "SELECT Product,Full_price,id
 FROM menu where Type='tandoori' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table  table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Edit</td><td>Delete</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td>
<form action='edit.php' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='edit' > -</button>
</form>
</td><td>
<form action='' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='delete'>X</button></form> </td></tr>";
$i=$i+1;	
}
echo "</table></center>";
} else {
    echo "<center>Menu Not Found</center>";
}
?>
    <div class="item_title">Vegitable</div>  <?php
$sql = "SELECT Product,Full_price,id
 FROM menu where Type='vegitable' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table  table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Edit</td><td>Delete</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td>
<form action='edit.php' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='edit' > -</button>
</form>
</td><td>
<form action='' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='delete'>X</button></form> </td></tr>";
$i=$i+1;	
}
echo "</table></center>";
} else {
    echo "<center>Menu Not Found</center>";
}
?>
    <div class="item_title">Moonlight Special</div>  
	
	<?php
$sql = "SELECT Product,Full_price,id
 FROM menu where Type='special' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table  table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Edit</td><td>Delete</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td>
<form action='edit.php' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='edit' > -</button>
</form>
</td><td>
<form action='' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='delete'>X</button></form> </td></tr>";
$i=$i+1;	
}
echo "</table></center>";
} else {
    echo "<center>Menu Not Found</center>";
}
?>
    <div class="item_title">Rice</div>  
	
	<?php
$sql = "SELECT Product,Full_price,id
 FROM menu where Type='rice' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table  table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Edit</td><td>Delete</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td>
<form action='edit.php' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='edit' > -</button>
</form>
</td><td>
<form action='' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='delete'>X</button></form> </td></tr>";
$i=$i+1;	
}
echo "</table></center>";
} else {
    echo "<center>Menu Not Found</center>";
}
?>
    <div class="item_title">Breads</div>  
	
	<?php
$sql = "SELECT Product,Full_price,id
 FROM menu where Type='bread' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table  table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Edit</td><td>Delete</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td>
<form action='edit.php' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='edit' > -</button>
</form>
</td><td>
<form action='' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='delete'>X</button></form> </td></tr>";
$i=$i+1;	
}
echo "</table></center>";
} else {
    echo "<center>Menu Not Found</center>";
}
?>

    <div class="item_title">Accompaniments</div>  
	
	<?php
$sql = "SELECT Product,Full_price,id
 FROM menu where Type='accompaniments' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table  table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Edit</td><td>Delete</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td>
<form action='edit.php' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='edit' > -</button>
</form>
</td><td>
<form action='' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='delete'>X</button></form> </td></tr>";
$i=$i+1;	
}
echo "</table></center>";
} else {
    echo "<center>Menu Not Found</center>";
}
?>

    <div id="Drinks">
      <div class="menu_heads">Drinks</div>
    </div>
    <div class="item_title">SoftDrinks</div>  <?php
$sql = "SELECT Product,Full_price,id
 FROM menu where Type='drinks' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table  table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Edit</td><td>Delete</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td>
<form action='edit.php' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='edit' > -</button>
</form>
</td><td>
<form action='' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='delete'>X</button></form> </td></tr>";
$i=$i+1;	
}
echo "</table></center>";
} else {
    echo "<center>Menu Not Found</center>";
}
?>
    <div id="Entree">
      <div class="menu_heads">Entree</div>
    </div>
    <div class="item_title">Fried</div>  
	
	<?php
$sql = "SELECT Product,Full_price,id
 FROM menu where Type='entree_special' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table  table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Edit</td><td>Delete</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td>
<form action='edit.php' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='edit' > -</button>
</form>
</td><td>
<form action='' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='delete'>X</button></form> </td></tr>";
$i=$i+1;	
}
echo "</table></center>";
} else {
    echo "<center>Menu Not Found</center>";
}
?>
    <div class="item_title">Tandoori</div>  <?php
$sql = "SELECT Product,Full_price,id
 FROM menu where Type='entree_tandoori' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table  table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Edit</td><td>Delete</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td>
<form action='edit.php' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='edit' > -</button>
</form>
</td><td>
<form action='' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='delete'>X</button></form> </td></tr>";
$i=$i+1;	
}
echo "</table></center>";
} else {
    echo "<center>Menu Not Found</center>";
}
?>

    <div id="Desserts">
      <div class="menu_heads">Desserts</div>
    </div>
    <div class="item_title">Desserts</div>
      <?php
$sql = "SELECT Product,Full_price,id
 FROM menu where Type='desert' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table  table-hover table_last'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Edit</td><td>Delete</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td>
<form action='edit.php' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='edit' > -</button>
</form>
</td><td>
<form action='' method='post'>
<button type='submit' value='$id_val' id='$id_val' class='' name='delete'>X</button></form> </td></tr>";
$i=$i+1;	
}
echo "</table></center>";
} else {
    echo "<center>Menu Not Found</center>";
}
?>
 
 
 
  </div>
</div>


</body>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</html>
