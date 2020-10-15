<?php 
print_r($_POST);

$day         = $_POST['day'];
$month       = $_POST['month'];  
$year        = $_POST['year'];
$productname = $_POST['name']; 

//2020-10-01
$fulldate    = $year."-".$month."-".$day;
//2019-11-11 
?>
i am wring html code 

<?php 


echo "i am php";



?>

 <?php
$servername = "localhost";
$username = "root";
$password = "oracle";
$dbname = "sales";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//  
echo "<br>"; //new line
echo $sql = "INSERT INTO producttable ( productname, expirdate)
VALUES ( '$productname', '$fulldate')";

echo "<br>";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 