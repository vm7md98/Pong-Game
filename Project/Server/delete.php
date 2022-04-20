<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "CIM4103";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM userinfo WHERE firstName='Simon'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!--html form
<!DOCTYPE html>
<html>
    <head>
    <title>Signup Form</title>
</head>

<body>
<h1> Create a New Account </h1>
   
<b>Enter your new details belows:</b>
<table> <!--creating form for sign up
<form method="G" action="insertdata.php" style="border:1px solid #ccc">

    <br>First Name<input type="text" name="fname" required>
    <br>Last Name<input type="text" name="lname">
	<br>Age<input type="text" name="age">
	<br>Gender<input type="text" name="gender">
    <br><input type="checkbox"> Remember me.<br>
    <button type="submit" name="insertdata" value="Add User">Sign Up</button>
   
</form>
</table>
</body>
</html>
-->