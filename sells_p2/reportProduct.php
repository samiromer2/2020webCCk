 <?php
$servername = "localhost";
$username = "root";
$password = "oracle";//rootroot
$dbname = "sales";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `tableid`, `productname`, `expirdate` FROM `producttable` ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
<table>
<tr>
<td>#</td>
<td>Name</td>
<td>Date</td>
</tr>
<?php
  // output data of each row
  $count = 1;
  while($row = $result->fetch_assoc()) {
  echo "<tr>";
  //print_r($row);
  echo "<td>".$count."</td>";
  $count++;
  echo "<td>".$row['productname']."</td>";
  echo "<td>".$row['expirdate']."</td>";
  echo "</tr>";
  }
} else {
  echo "0 results";
}
?>
</table>
<?php
$conn->close();
?> 