<?php
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      $server = "localhost";
      $user = "root";
      $pass = "";
      $db = "login_db";
      
      $conn = new mysqli($server, $user, $pass, $db);
      
      if($conn -> connect_errno)
      {
         echo "Database connection failed!<BR>";
         echo "Reason: ", $conn->connect_error;
         exit();
      }
      else
      {
         $username = $_POST["username"];
         $email = $_POST["email"];
         $password = $_POST["password"];
      
         $sql = "INSERT INTO `login`(`username`,`password`,`email`)
            VALUES ('$username', '$password','$email')";
         
         $qry = $conn -> query($sql);
         if($qry)
         {
            echo "Registration done successfully!";
            
         }
         else
         {
            echo "Something went wrong while registration!<BR>";
            echo "Error Description: ", $conn -> error;
         }
      }
   }
   $conn -> close();
?>