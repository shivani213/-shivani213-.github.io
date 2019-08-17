<!DOCTYPE HTML>
<html>
<head>
<title>Firm Details</title>
<style type="text/css">
.one
{
color:black;
font-size:25px;}
label
{
font-size:15px;
margin-left:20%;

}
form {
 
  height:1015px;
  width:600px;
  margin: 0 auto;
  background: #f2f2f2;
  padding: 20px 22px;
  border-radius:15px 15px 15px 15px;
 
  
}


form button[type=submit] {
    border-radius:12px;
    background-color:#efeff5;
    color:black;
    padding: 15px 32px;
    text-align: center;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
}
input[type=text] {
    width: 60%;
    padding: 12px 20px;
    margin-left:20%;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color:white;

}

select {
    width: 60%;
    padding: 12px 20px;
    margin-left:20%;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color:white;
	margin-bottom:20px;

}

input[type=number] {
    width: 60%;
    padding: 12px 20px;
    margin-left:20%;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color:white;
}

body
{
	background-image:url(https://www.dreambigin.com/images/system/img/Cover_Page.png);
	
}

</style>
<script type="text/javascript">
 



function pinvalidate()
{
var test=document.getElementById("pin").value;
var res=test.search(/^[0-9]{6}$/); 
if(res==-1)
alert("Pincode is not valid");

}
function statevalidate()
{
var test=document.getElementById("state").value;
var res=test.search(/^[A-Za-z]*$/); 
if(res==-1)
alert("Incorrect state name");
}
function cityvalidate()
{
var test=document.getElementById("city").value;
var res=test.search(/^[A-Za-z]*$/); 
if(res==-1)
alert("Incorrect city name");
}
function numvalidate()
{
var test=document.getElementById("pno").value;
var res=test.search(/^[0-9]{10}$/); 
if(res==-1)
alert("Phone number not valid");

}
 


</script>


</head>
<body>
<form name="form" id="form" action="firmdetails1.php" method="POST" >

<label style="text-align:center;color:white"><p style="color:black;font-size:35px"> FIRM DETAILS </p></label>
<br/>
<label>FIRM NAME:<br/><input  type="text" style="margin-bottom:20px" name="name" id="name" size="30"  required /></label>
<br/>
<label>FIRM TYPE:<br/>
<select name="type" id="type" >
<option value="select">Select one</option>
<option value="Sole Proprietorship" selected>Sole Proprietorship</option>
<option value="Partnership">Partnership</option>
<option value="Limited Liability Company">Limited Liability Company</option>
<option value="Corporation">Corporation</option>
</select></label><br/>
<label>FIRM ESTABLISHMENT YEAR:<br/><input type="number"style="margin-bottom:20px" name="year" maxlength="4" id="year"  required /></label>
<br/>
<label>DOOR NUMBER:<br/><input  type="text" style="margin-bottom:20px" name="doorno" id="doorno" size="30" required /></label>
<br/>
<label>LOCALITY:<br/><input  type="text" style="margin-bottom:20px" name="loc" id="loc" size="30" required /></label>
<br/>
<label>CITY:<br/><input  type="text" style="margin-bottom:20px" name="city" id="city" onchange="cityvalidate();" size="30"  required /></label>
<br/>
<label>STATE:<br/><input  type="text" style="margin-bottom:20px" name="state" onchange="statevalidate();" id="state" size="30" required /></label>
<br/>
<label>LANDMARK:<br/><input  type="text" style="margin-bottom:20px" name="land" id="land" size="30" required /></label>
<br/>
<label>ADDRESS TYPE:<br/>
<select name="addrtype" id="addrtype" >
<option value="select">Select one</option>
<option value="Business" selected>Business</option>
<option value="Home">Home</option>
</select></label><br/>
<label>PINCODE:<br/><input  type="number" maxlength="5" style="margin-bottom:20px" name="pin" id="pin" size="30" onchange="pinvalidate();" required /></label>
<br/>
<label>ALTERNATE PHONE NUMBER:<br/><input  type="number" style="margin-bottom:20px" maxlength="10" name="pno" id="pno" onchange="numvalidate();" size="30" required /></label>
<br/>






<pre><button type="submit" name="submit" id="submit" style="margin-left:40%;margin-top:20px" >SUBMIT </button>  <span id="success_message" class="text-success"></span>                                              <a href="index.php"><font color="white" size="5px">Logout</font></a></pre>


</body>
</html>
