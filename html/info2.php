<?php
include('config.php');
$data='';
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


   $regestration=$_POST["reg_no"];
  $order_quant=$_POST["quants"];

$sql = "SELECT Product,Full_price
 FROM menu where id=$regestration";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "    
		 <center><table class='table'>
<tr><td>Item No</td><td>Product </td><td>Price</td><td>Quantity</td><td>Total Price</td><td></td>";
$i=1;
$ord=0;
$money=0;
    while($row = $result->fetch_assoc()) {
echo "<tr><td>$i</td><td>". $row["Product"]."</td><td>".$row["Full_price"]."</td><td>".$order_quant[$i-1]."</td><td>".$row["Full_price"]*$order_quant[$i-1]."</td><td class='cross'><button type='button' class='cross_btn'>X</button>
</td></tr>";
$money=($row["Full_price"]*$order_quant[$i-1])+$money;
$ord=$order_quant[$i-1]+$ord;
$i=$i+1;	

}
echo "</table></center><br>
		 <center><table class='table'><tr><td>Total Quantity :- ".$ord."</td><td> Total Money :- ".$money."</td></tr>


"



;
    

} else {
    echo "<center>Menu Not Found</center>";
}
$conn->close();

?>