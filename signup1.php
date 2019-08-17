<html>
<head>
<title>
</title>
</head>
<body>
<?php
session_start();

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



$_SESSION["name"]=$a=$_POST["name"];
$_SESSION["mail"]=$b=$_POST["mail"];
$c=$_POST["pwd"];
$d=$_POST["pno"];



	

mysqli_query($connection, "INSERT INTO `register_details` 
(`name`, `eid`, `password`, `pno`) 
VALUES ('$a', '$b', '$c','$d')") 
or die(mysqli_error($connection));
header('Location: FIRMDETAILS.php');





?>
</body>
</html>


