<?php

if (isset($_POST["login"])) {

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



   $firstN = $_POST["email"];

   $pwd = md5($_POST["pass"]);



   $sql = "SELECT * FROM userinfo WHERE firstName = '$firstN' AND password = '$pwd' ";

   $result = $conn->query($sql);



   if ($result->num_rows > 0) {

      // output data of each row

      while ($row = $result->fetch_assoc()) {

         echo "Hi $firstN. You are logged in!";
      }
   } else {

      echo "You are not logged in. Wrong username or password!";
   }



   mysqli_close($conn);
}

?>





<!DOCTYPE html>

<html>

<head>

   <title>Signup Form</title>
   <link rel="stylesheet" href="../CSS/login.css">
</head>



<body>
   <div class="main" style="border: black 1px solid;">
      <div class="title">
         <div class="msg1">
            <h1>Welcome</h1>
         </div>
         <div class="msg2">
            <h2>Welcome! Please Enter your details</h2>
         </div>
      </div>

      <div class="form" >

         <form method="POST" action="login.php" ">


            <div class=" email">

            <label for="email">First Name</label> <br>

            <input type="text" name="email" required>

      </div>

      <div class="password">

         <label for="pass">Password</label> <br>

         <input type="password" name="pass" required>

      </div>

      <div class="login">

         <button type="submit" name="login" value="login">Log in</button>

         <button><a href="../index.html" style="text-decoration: none; color:black"> Cancel</a></button>

      </div>

      </form>
   </div>

   </div>
</body>

</html>