<?php


include('conn.php');
session_start();
 if(isset($_POST['submit']))
 {
 $name = $_POST['name'];
 
 $email = $_POST['namel'];
 


$sql = mysqli_query($conn, "INSERT INTO `rehan`( `fname`, `lname`) VALUES ('$name','$email')");
if($sql){
    
    header('location: index.php');
    

}
else{
   //  echo'<script> alert("Data Not Saved"); </script>';
     echo "Failed to insert data ";
  }

 }