<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Order Online</title>
<!-- Bootstrap --><link rel="icon" type="image/x-icon"
     href="../img/Capture.png" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link href="../css/style3.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include('config.php');
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>
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
        <li> <a href="menu2.php">Menu</a></li>
        <li><a   class="active" href="OnlineOrder.php">Order Online</a></li>
       <li><a href="gallery.html">Gallery</a></li>  
        <li><a href="about_us.html">About us</a></li>
        <li><a href="contact_us.html">Visit us</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class=" col-md-12 col-sm-12 col-xs-12 ">
  <div class="navigationitems">
    <table class="table">
      <tr>
        <td style="border-top:none;" class="wh"><a href="#Entree" class="smoothScroll">Entree</a></td>
        <td style="border-top:none;" class="wh"><a href="#MainCourse" class="smoothScroll">MainCourse</a></td>
        <td style="border-top:none;" class="wh"><a href="#Drinks" class="smoothScroll">Drinks</a></td>
        <td style="border-top:none;" class="wh"><a href="#Desserts" class="smoothScroll">Desserts</a></td>
        </tr>
    </table>
  </div>
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
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Quanitiy</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$value="textarea_chicken_".$i;
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td><div class='qty-wrapper'>
<button class='btn btn-qty qty-subtract' type='button' onClick='minus(".$row["Full_price"].",".$row["Full_price"].",".$row["id"].")' onClick='minus(".$row["Full_price"].",".$row["Full_price"].",".$row["id"].")'>-</button><span class='qty' id='$id_val'>0</span><button class='btn btn-qty qty-add' type='button' onclick='add(".$row["Full_price"].",".$row["Full_price"].",".$row["id"].")' id='buttonplus' >+</button>
                                                </div>
</td></tr>";
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


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table  table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Quanitiy</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$value="textarea_chicken_".$i;
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td><div class='qty-wrapper'>
<button class='btn btn-qty qty-subtract' type='button' onClick='minus(".$row["Full_price"].",".$row["Full_price"].",".$row["id"].")' >-</button><span class='qty' id='$id_val'>0</span><button class='btn btn-qty qty-add' type='button' onclick='add(".$row["Full_price"].",".$row["Full_price"].",".$row["id"]."),add2(".$value.",".$row["id"].")' id='buttonplus' >+</button>
                                                </div>
</td></tr>";
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
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Quanitiy</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$value="textarea_chicken_".$i;
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td><div class='qty-wrapper'>
<button class='btn btn-qty qty-subtract' type='button' onClick='minus(".$row["Full_price"].",".$row["Full_price"].",".$row["id"].")' >-</button><span class='qty' id='$id_val'>0</span><button class='btn btn-qty qty-add' type='button' onclick='add(".$row["Full_price"].",".$row["Full_price"].",".$row["id"]."),add2(".$value.",".$row["id"].")' id='buttonplus' >+</button>
                                                </div>
</td></tr>";
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
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Quanitiy</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$value="textarea_chicken_".$i;
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td><div class='qty-wrapper'>
<button class='btn btn-qty qty-subtract' type='button' onClick='minus(".$row["Full_price"].",".$row["Full_price"].",".$row["id"].")' >-</button><span class='qty' id='$id_val'>0</span><button class='btn btn-qty qty-add' type='button' onclick='add(".$row["Full_price"].",".$row["Full_price"].",".$row["id"]."),add2(".$value.",".$row["id"].")' id='buttonplus' >+</button>
                                                </div>
</td></tr>";
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
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Quanitiy</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$value="textarea_chicken_".$i;
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td><div class='qty-wrapper'>
<button class='btn btn-qty qty-subtract' type='button' onClick='minus(".$row["Full_price"].",".$row["Full_price"].",".$row["id"].")' >-</button><span class='qty' id='$id_val'>0</span><button class='btn btn-qty qty-add' type='button' onclick='add(".$row["Full_price"].",".$row["Full_price"].",".$row["id"]."),add2(".$value.",".$row["id"].")' id='buttonplus' >+</button>
                                                </div>
</td></tr>";
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
 FROM menu where Type='special' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table  table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Quanitiy</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$value="textarea_chicken_".$i;
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td><div class='qty-wrapper'>
<button class='btn btn-qty qty-subtract' type='button' onClick='minus(".$row["Full_price"].",".$row["Full_price"].",".$row["id"].")' >-</button><span class='qty' id='$id_val'>0</span><button class='btn btn-qty qty-add' type='button' onclick='add(".$row["Full_price"].",".$row["Full_price"].",".$row["id"]."),add2(".$value.",".$row["id"].")' id='buttonplus' >+</button>
                                                </div>
</td></tr>";
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
 FROM menu where Type='special' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table  table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Quanitiy</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$value="textarea_chicken_".$i;
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td><div class='qty-wrapper'>
<button class='btn btn-qty qty-subtract' type='button' onClick='minus(".$row["Full_price"].",".$row["Full_price"].",".$row["id"].")' >-</button><span class='qty' id='$id_val'>0</span><button class='btn btn-qty qty-add' type='button' onclick='add(".$row["Full_price"].",".$row["Full_price"].",".$row["id"]."),add2(".$value.",".$row["id"].")' id='buttonplus' >+</button>
                                                </div>
</td></tr>";
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
 FROM menu where Type='special' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table  table-hover'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Quanitiy</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$value="textarea_chicken_".$i;
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td><div class='qty-wrapper'>
<button class='btn btn-qty qty-subtract' type='button' onClick='minus(".$row["Full_price"].",".$row["Full_price"].",".$row["id"].")' >-</button><span class='qty' id='$id_val'>0</span><button class='btn btn-qty qty-add' type='button' onclick='add(".$row["Full_price"].",".$row["Full_price"].",".$row["id"]."),add2(".$value.",".$row["id"].")' id='buttonplus' >+</button>
                                                </div>
</td></tr>";
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
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Quanitiy</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$value="textarea_chicken_".$i;
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td><div class='qty-wrapper'>
<button class='btn btn-qty qty-subtract' type='button' onClick='minus(".$row["Full_price"].",".$row["Full_price"].",".$row["id"].")' >-</button><span class='qty' id='$id_val'>0</span><button class='btn btn-qty qty-add' type='button' onclick='add(".$row["Full_price"].",".$row["Full_price"].",".$row["id"]."),add2(".$value.",".$row["id"].")' id='buttonplus' >+</button>
                                                </div>
</td></tr>";
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
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Quanitiy</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$value="textarea_chicken_".$i;
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td><div class='qty-wrapper'>
<button class='btn btn-qty qty-subtract' type='button' onClick='minus(".$row["Full_price"].",".$row["Full_price"].",".$row["id"].")' >-</button><span class='qty' id='$id_val'>0</span><button class='btn btn-qty qty-add' type='button' onclick='add(".$row["Full_price"].",".$row["Full_price"].",".$row["id"]."),add2(".$value.",".$row["id"].")' id='buttonplus' >+</button>
                                                </div>
</td></tr>";
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
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Quanitiy</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$value="textarea_chicken_".$i;
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td><div class='qty-wrapper'>
<button class='btn btn-qty qty-subtract' type='button' onClick='minus(".$row["Full_price"].",".$row["Full_price"].",".$row["id"].")' >-</button><span class='qty' id='$id_val'>0</span><button class='btn btn-qty qty-add' type='button' onclick='add(".$row["Full_price"].",".$row["Full_price"].",".$row["id"]."),add2(".$value.",".$row["id"].")' id='buttonplus' >+</button>
                                                </div>
</td></tr>";
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
 FROM menu where Type='dessert' ORDER BY Product ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table  table-hover table_last'>
<tr><td>Item No</td><td>Product </td><td>Full Price</td><td>Quanitiy</td></tr>";
$i=1;

    while($row = $result->fetch_assoc()) {
$value="textarea_chicken_".$i;
$id_val=$row["id"];

echo "
<tr><td>$i</td><td>".$row["Product"]."</td><td>$  ".$row["Full_price"]."</td><td><div class='qty-wrapper'>
<button class='btn btn-qty qty-subtract' type='button' onClick='minus(".$row["Full_price"].",".$row["Full_price"].",".$row["id"].")' >-</button><span class='qty' id='$id_val'>0</span><button class='btn btn-qty qty-add' type='button' onclick='add(".$row["Full_price"].",".$row["Full_price"].",".$row["id"]."),add2(".$value.",".$row["id"].")' id='buttonplus' >+</button>
                                                </div>
</td></tr>";
$i=$i+1;	
}
echo "</table></center>";
} else {
    echo "<center>Menu Not Found</center>";
}
?>
  </div>
</div>
<div class="col-lg-12 a3">
  <div class="bill_info">
    <center>
    
      <table class="table" style="text-align:center;">
        <tr>
          <td style="border-top:none;"><samp class="glyphicon glyphicon-shopping-cart"></samp></td>
          <td style="border-top:none;">$ <samp id="money">0</samp>/-</td>
          <td style="border-top:none;">Total items <samp id="quantity">0</samp></td>
          <td style="border-top:none;">
          <form action="orders.php" method="post">
           <textarea name="data" id="submit_data" style="display:none;"></textarea>
          <button  class="checkout" value="CheckOut" onClick="get()" id="continue" disabled>Checkout</button>
          </form>
          
          </td>
        </tr>
      </table>
    </center>
  </div>
</div>
</body>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/smoothscroll.js"></script> 
<script type="text/javascript">

var array=[]

    function add(id,p,pid) {		


	     var n=document.getElementById(pid).innerHTML;
	     var q=document.getElementById('quantity').innerHTML;
	     var price=document.getElementById('money').innerHTML;

array.push(pid);


      document.getElementById('submit_data').innerHTML=array;

     price=Number(price);
     p=Number(p);
	 price=price+p;
     n=Number(n);
	 n=n+1;	 	 
	 q=Number(q);
	 q=q+1;
	 
document.getElementById(pid).innerHTML=n;

document.getElementById("quantity").innerHTML=q;

document.getElementById("money").innerHTML=price;

if(document.getElementById('continue').disabled){
	document.getElementById('continue').disabled=false;
	}

}

    function minus(id,p,pid) {		
	     var n=document.getElementById(pid).innerHTML;
	     var q=document.getElementById('quantity').innerHTML;
	     var price=document.getElementById('money').innerHTML;



     if(n>=1){
     price=Number(price);
     p=Number(p);
	 price=price-p;
     n=Number(n);
	 n=n-1;
	 q=Number(q);
	 q=q-1;


var index=array.indexOf(pid);
if(index>-1){
	array.splice(index,1);
	}
	
//     	 var data=document.getElementById('submit_data').innerHTML;



//         var array=data.split(",");

document.getElementById('submit_data').innerHTML=array;



document.getElementById(pid).innerHTML=n;
document.getElementById("quantity").innerHTML=q;
document.getElementById("money").innerHTML=price;





if(q<=0){
	document.getElementById('continue').disabled=true;

	
	}

}


}

function get(){
	var a=document.getElementById('submit_data').innerHTML;
	document.getElementById('text_final').innerHTML=a;

	}

</script>

</html>
