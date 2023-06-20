<html>
<body>

<?php
 
// Create connection
$conn = new mysqli('localhost','root','');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "DB Connected successfully";

// this will select the Database sample_db
mysqli_select_db($conn,"sunil");
 
echo "\n DB is seleted as Test  successfully";

// create INSERT query
 
 
$sql="INSERT INTO book (firstname,lastname,email,phonenumber,date) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[phonenumber]','$_POST[date]')";

 
if ($conn->query($sql) === TRUE) {
   echo "<script type='text/javascript'>alert('Reservation Successful')
location='bookings.html';
</script>";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>
</body>
</html>