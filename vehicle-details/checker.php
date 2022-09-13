
<?php
//var_dump($_REQUEST);
/*
if($_REQUEST['code']=='ba114138'){
    
    echo "<div style='font-size:50px; color:white; padding:20px; background:green;width:90%;'>This vehicle is verified.</div>";
    echo "<br><div style='font-size:50px; line-height:auto; width:90%;'>";
    echo "<span style='color:#000080;'>Vehicle Number:</span><br> DHAKA - METRO - BA-11-4138 <br>
<span style='color:#000080;'>Route:</span><br> NARAYANGONJ VIA LINK ROAD - DHAKA - (SAYDABAD)<br>
<span style='color:#000080;'>Route Permit Expiry Date:</span><br> 05-01-2022";
echo"</div>";
}
else{

     echo "<div style='font-size:50px; color:white; padding:20px; background:red;width:90%;'>This Vehicle is not verified.</div>";
}
*/
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM reports where v_idetify_code='$_REQUEST[code]'";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    echo "<div style='font-size:50px; color:white; padding:20px; background:green;width:90%;'>This vehicle is verified.</div>";
    echo "<br><div style='font-size:50px; line-height:auto; width:90%;'>";
    echo "<span style='color:#000080;'>Vehicle Number:</span><br>".$row["v_reg_no"]."<br><br>
    <span style='color:#000080;'>Route:</span><br> ".$row["v_route_name_start"]."-".$row["v_route_name_end"]."<br><br>
    <span style='color:#000080;'>Route Permit Expiry Date:</span><br>".date("M j, Y", strtotime($row["v_route_permit_expire_date"]))."<br><br>
    <span style='color:#000080;'>Tax Token Expiry Date:</span><br>".date("M j, Y", strtotime($row["v_tax_expiry_date"]))."<br><br>
    <span style='color:#000080;'>Fitness Expiry Date:</span><br>".date("M j, Y", strtotime($row["v_fitness_expiry_date"]))."<br><br>";
echo"</div>";
  }
} else {
   echo "<div style='font-size:50px; color:white; padding:20px; background:red;width:90%;'>This Vehicle is not verified.</div>";
}
$conn->close();
?>