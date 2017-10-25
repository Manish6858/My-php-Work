<?php

session_start();
include "dbconnection.php";
if(isset($_POST['dashboard'])){

  $email = $_POST['email'];
  $pass = $_POST['password'];




 $query =  mysql_query("select * from user where email = '$email' AND password = '$pass'")


             or  die("Quweery not eecuted!1".mysql_error());
       

  if(mysql_num_rows($query)>0){
   $_SESSION['adminEmail'] = $email;
   $_SESSION['adminPassword'] = $pass;

   header('Location:dashboard.php');
  }

  else{
   // echo "<p style = 'color:red;'> Authentication failed !! Please try again</p>";
    echo "<script> alert('Authentication failed !! Please try again') </script>";
  }
}

?>