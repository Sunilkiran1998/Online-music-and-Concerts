<html>
<body>
<?php  

 require('db_connect.php');

if (isset($_POST['user_name']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_name'];
$Password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user_login` WHERE username='$username' and Password='$Password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')
location='project.html';
</script>";

}

else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')
location='signin.php';
</script>";

//echo "Invalid Login Credentials";
}
}

?>

</body>
</html>

