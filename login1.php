<?php
session_start();
?>
<html>
<head>
<title>
</title>
</head>
<body>
<?php

$dbhost = 'localhost';     
$dbuser = 'root';   
$dbpass = "";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass);

if(!$connection ) {  
die('Could not connect to Server' 
.mysqli_error($connection));  
}

$dbhandle=mysqli_select_db($connection, 'vendor');
if(!$dbhandle) {  
die('Database Selection Problem' 
.mysqli_error($connection));  
}
$a=$_POST["mail"];
$b=$_POST["pword"];
$query = "SELECT * FROM `register_details`
WHERE eid='$a' AND password='$b'";
$result=mysqli_query($connection,$query);
if(!$result )
{
die('Could not retrieve data: '
.mysqli_error($connection));
}
 
$count= mysqli_num_rows($result);
if($count==1)
{   
header("location:FIRMDETAILS.php");
}
else { 
   
   ?>
   <script>alert('Your Login Name or Password is invalid');
   window.location.href ="index.php";
   </script>
   <?php
   }
?>