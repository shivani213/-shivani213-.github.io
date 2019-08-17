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



$a=$_POST["name"];
$b=$_POST["type"];
$c=$_POST["year"];
$d=$_POST["doorno"];
$e=$_POST["loc"];
$f=$_POST["city"];
$g=$_POST["state"];
$h=$_POST["land"];
$i=$_POST["addrtype"];
$j=$_POST["pin"];
$k=$_POST["pno"];





	
$query="INSERT INTO `firm_details` 
(`firm_name`, `firm_type`, `estd_year`, `door_num`,`locality`, `city`, `state`, `landmark`,`addr_type`, `pincode`, `pno`) 
VALUES ('$a', '$b', '$c','$d','$e', '$f', '$g','$h','$i', '$j', '$k')";
$result=mysqli_query($connection, $query);
if($result)
{
	?>
   <script>alert('Thank you.We will get back to you soon.');
   window.location.href ="FIRMDETAILS.php";
   </script>
   <?php
   
}





?>
 
</body>
</html>


