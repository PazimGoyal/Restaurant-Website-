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
$sql = "DELETE FROM offers WHERE id=$id";
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
      <div class="menu_heads">Offers</div>
    </div>




    <?php
$sql = "SELECT Title,Offer,id
 FROM offers";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table  table-hover'>
<tr><td>Item No</td><td>Title</td><td>Description</td><td>Edit</td><td>Delete</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Title"]."</td><td>".$row["Offer"]."</td><td>
<form action='offer_modify.php' method='post'>
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


</body>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</html>
