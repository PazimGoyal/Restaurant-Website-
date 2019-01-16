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
  


$sql = "SELECT NAME,Address,mobile,area,id
 FROM User WHERE mobile='$regestration'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

         echo "<center><table class='table'>";

    while($row = $result->fetch_assoc()) {
		
echo "<tr><td> Name:- ". $row["NAME"]."</td></tr><tr><td> Address :- ".$row["Address"]."</td></tr><tr><td> Mobile Number:- ".$row["mobile"]."</td></tr>";
}
echo "</table></center>";
    

} else {
    echo "<center>No Address Registred....Kindly add new Address</center>";
}

$conn->close();

?>