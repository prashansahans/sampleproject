 <!DOCTYPE html>
<html>
<head></head>
        <title>Containerized App</title>

<body>
        <h1 align="center"> CBPS Team </h1>
</body>
 <form action="/action_page.php" method="POST">
  <label for="tm_name">Team Member name: </label><input type="text" id="tm_name" name="tm_name"/><br><br>
  <input type="submit" value="Submit"/>
</form> 
</html>
<?php
$servername = "172.17.0.2";
$username = "root";
$password = "12345";
$dbname = "tm_record";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 

<?php
//Step2
$query = "SELECT * FROM tm_record where employee_name="$_POST['tm_name']"";
mysqli_query($db, $query) or die('Error querying database.');

//Step3
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo $row['employee_type'] . ' ' . $row['employee_name'] . ': ' . $row['mentor_name'] . ' ' . $row['expertise'] .$row['currently_working'] . ' ' . $row['seat_no'];
}
mysqli_close($db);
?>
 
