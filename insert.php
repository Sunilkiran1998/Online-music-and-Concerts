<html>
<body>
<style>
body{
	background-image:url(lol.jpg);
	background-repeat:no-repeat;
	background-attachment: fixed;
	background-position: center; 
	 background-size: cover;
}
</style>
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
 
 
$sql="INSERT INTO user_signup (username,Password,email) VALUES ('$_POST[username]','$_POST[Password]','$_POST[email]')";
mysqli_multi_query($conn,$sql);
$sql="INSERT INTO user_login (username,Password) VALUES ('$_POST[username]','$_POST[Password]')";
mysqli_multi_query($conn,$sql);
 
if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>
<h3>
 <font color="black"> Redirecting to Home after <span id="countdown">2</span> seconds</font>
</h3>
<script type="text/javascript">
    
    // Total seconds to wait
    var seconds = 2;
    
    function countdown() {
        seconds = seconds - 1;
        if (seconds < 0) {
            // Chnage your redirection link here
            window.location = "http://localhost/6th%20sem%20project/signin.php#";
        } else {
            // Update remaining seconds
            document.getElementById("countdown").innerHTML = seconds;
            // Count down using javascript
            window.setTimeout("countdown()", 1000);
        }
    }
    
    // Run countdown function
    countdown();
</script>
</body>
</html>