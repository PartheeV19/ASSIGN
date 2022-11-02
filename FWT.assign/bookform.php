<?php

$conn= mysqli_connect('localhost','root','','database');

      $name = $_POST['name'];
      $email = $_POST['email'];
      $age = $_POST['age'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];
      $aadhar =

      $sql_query="INSERT INTO ENTRY_DETAILS (name,email,age,address,location,guests,arrival,leaving)
      VALUES ('$name','$email','$age','$address','$location','$guests','$arrivals','$leaving')";

      if (mysqli_query($conn, $sql_query))
      {
         echo "New Details are inserted successfully";
      }
      else
      {
         echo "ERROR:". $sql."".mysql_error($conn);
      }
      mysqli_closs($conn);
?>
