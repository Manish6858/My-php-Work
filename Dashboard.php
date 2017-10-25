<!DOCTYPE html>
<html>
<head>
   <title>Home | Colrate </title>
</head>
<body>


<?php 
include('dbconnection.php');
if(isset($_POST['dashboard']))

{
   $recuser = $_POST['email'];
   $recpass = $_POST['password'];
   $qyery ="select * from user  where email ='".$recuser."' AND password ='".$recuser."'";
   $queryresult = mysql_query($query) or die("not run".mysql_error());
   echo "num row".mysql_num_rows($queryresult);
  /* if(mysql_num_rows($queryresult)>0){
      header('Location:index.html');
   }
   else
   {
      echo "wrong User";
   }*/

}
?>
</body>
</html>