<?php

if (isset($_POST["insert"])) {

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



   $firstN = $_POST["fname"];

   $lastN = $_POST["lname"];

   $age = $_POST["age"];

   $gender = $_POST["gender"];

   $pwd = md5($_POST["pass"]);



   $sql = "INSERT INTO userinfo (firstName, lastName, password, age, gender)

VALUES ('$firstN', '$lastN', '$pwd', '$age', '$gender')";





   if (mysqli_query($conn, $sql)) {

      echo "New record created successfully";
   } else {

      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }



   mysqli_close($conn);
}

?>





<!DOCTYPE html>

<html>

<head>

   <title>Signup Form</title>

</head>



<body>

   <h1> Create a New Account </h1>



   <b>Enter your new details belows:</b>

   <table>

      <form method="POST" action="register.php" style="border:1px solid #ccc">

         <tr>

            <td>First Name</td>

            <td><input type="text" name="fname" required></td>

         </tr>

         <tr>

            <td>Last Name</td>

            <td><input type="text" name="lname"></td>

         </tr>

         <tr>

            <td>Password</td>

            <td><input type="password" name="pass"></td>

         </tr>

         <tr>

            <td>Age</td>

            <td><input type="text" name="age"></td>

         </tr>

         <tr>

            <td>Gender</td>

            <td><input type="text" name="gender"></td>

         </tr>

         <tr>

            <td><button type="submit" name="insert" value="Add User">Sign Up</button></td>

            <td><button><a href="../index.html" style="text-decoration: none; color:black"> Cancel</a></button></td>

         </tr>

      </form>

   </table>

</body>

</html>