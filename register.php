<!DOCTYPE html>
<html>
<head>
    <title>Thank you !!</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Flat Trendy Signup Forms Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
<link href="css/signupstyle.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,700,800' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script src="js/signopjquery.min.js"></script>
</head>


<body>
<?php
include('dbconnection.php');
if(isset($_POST['register']))
{  
  $name = $_POST['name'];
  $email  = $_POST['email'];
  $pass = $_POST['password'];

  $query  = mysql_query("insert into user (name,email,password) VALUES ('".$name."','".$email."',
    '".$pass."')  ")  or die("Some eroor".mysql_error());
    }?>

  
   <div class="thank-you">
    <div class="close-1"> </div>
    <h4>THANK YOU</h4>
    <p>Your account has been created and a
        verification email has been sent.
        Click on the link included in the email
        to activate your account.  
        </p>
        <a href="#"><h5>Thank you.</h5></a>
    <a href="demp.php" class="thank-you-button">ok</a>

</div>

</body>
</html>