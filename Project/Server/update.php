<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "CIM4103";

// Create connection
$sql = "INSERT INTO userinfo (firstName, lastName, age, gender)
VALUES ('Mira', 'Brown', '28', 'Female')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "SELECT user_id, firstName, lastName FROM userinfo WHERE age> 23";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["user_id"]. " - Name: " . $row["firstName"]. " " . $row["lastName"]. "<br>";
    }
} else {
    echo "0 results";
}
*/
/*
// sql to delete a record
$sql = "DELETE FROM userinfo WHERE firstName='Simon'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

*/

//sql to update record
$sql = "UPDATE userinfo SET lastname='Charles' WHERE user_id=32";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
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