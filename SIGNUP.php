
<!DOCTYPE html>
<html lang="en">
<head>
  <title>signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  h2,h3{text-align:center;
text-style:bold;}
  form {
 
  width: 400px;
  height:600px;
  margin: 0 auto;
  background: white;
  padding: 20px 22px;
 
 
  
}
form {
 
  height:700px;
  margin: 0 auto;
  background: #f2f2f2;
  padding: 20px 22px;
  border-radius:15px 15px 15px 15px;
 
  
}

 form button {
  width: 250px;
  height: 30px;
  margin-left:10%;
  background-color: rgba(0,0,0,.2);
  
  background-repeat: no-repeat;
  padding: 8px 24px 8px 10px;
  font: bold .875em/1.25em "Open Sans Condensed", sans-serif;
  letter-spacing: .075em;
  color: #fff;
 
  margin-bottom: 30px;
  border-radius:25px 25px 25px 25x;
}

form input:focus { background-color: rgba(0,0,0,.4); }

form input.email {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAMCAYAAAC9QufkAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6M0YwNDIzMTQ3QzIzMTFFMjg3Q0VFQzhDNTgxMTRCRTQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6M0YwNDIzMTU3QzIzMTFFMjg3Q0VFQzhDNTgxMTRCRTQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDozRjA0MjMxMjdDMjMxMUUyODdDRUVDOEM1ODExNEJFNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozRjA0MjMxMzdDMjMxMUUyODdDRUVDOEM1ODExNEJFNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PsOChsgAAADUSURBVHjaYvz///9JBgYGMwbSwSkGoOafQPwKiAOBmIEIHAXED0H6QJwPQGwAxE+AOJOAxnwgvgfEKiB9MM0gWg6IbwNxIw6NXUB8HogloHwUzSAsBAoDIJ4DxMxQMRA9H4gPADE/kloMzSCsBcR/gHgj1LAt0HBRR1P3gQktBA2AeBcQZwHxCyB+AsT3gTgFKq6FohrJZnssoW6AxPaDBqoZurP9oBrtCYS2ExA/h9JgzX+gAsZExrMZVP0fmGZ1IjWiBCoL0NsXgPgGGcnzLECAAQD5y8iZ2Z69IwAAAABJRU5ErkJggg==);
  background-position: 500px 10px;
  border-radius:15px 15px 15px 15px;
  background-color:white;
  
}

form input.pass {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAQCAYAAADNo/U5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NTVFMDg1QzU3QzIzMTFFMjgwQThGODZFM0EwQUZFQ0YiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NTVFMDg1QzY3QzIzMTFFMjgwQThGODZFM0EwQUZFQ0YiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo1NUUwODVDMzdDMjMxMUUyODBBOEY4NkUzQTBBRkVDRiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo1NUUwODVDNDdDMjMxMUUyODBBOEY4NkUzQTBBRkVDRiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv2NSIIAAADYSURBVHjanJAxCsJAEEXXaBMQtvIMqTxDKjtPELC1svMoOYM2WlqIhVcQFMVgG7ATAoIggfGPjrLIrBo/vCzZ+Z+dGUNExiECI7Clhw5gAtqur8YfUQxm4AzGIAMRSIAFXbC8OyUdghwsgH173cp9Lr5XqAeOSsANcj3h/8BpbQ4Ko6uQOvtMQy6noG4+iz3XZ4iHbIEQ9L8EeUlN3t5etvSrMg6RqajAc78BQ7BTq6QrllV3tKLvpZOclyrt/TWTlTP0zVQqba/BAKyUWsmh1BPUxL70JsAABHkyyK1uocIAAAAASUVORK5CYII=);
  background-position: 500px 8px;
  border-radius:15px 15px 15px 15px;
  background-color:white;
}

::-webkit-input-placeholder { color: black; text-transform: uppercase; }
::-moz-placeholder { color: #ccc; text-transform: uppercase; }
:-ms-input-placeholder { color: black; text-transform: uppercase; }

form button[type=submit] {
  margin-left:30%;
  width: 150px;
  height:50px;
  margin-bottom:10px;
  color:white;
  font-size:16px;
  text-align:center;
  letter-spacing: .05em;
  text-transform: uppercase;
  background: #d966ff;
  border-radius:25px 25px 25px 25px;
  border-left-color:white;
  border-bottom-color:white;
  border-top-color:white;
  border-right-color:white;
 border-color:white;
 
  cursor: pointer;
}
form button[type=button]{
margin-left:30%;
  width: 150px;
  height:50px;
  margin-bottom:10px;
  color:white;
  text-align:center;
  font-size:20px;
  letter-spacing: .05em;
  text-transform: uppercase;
  background: #d966ff;
  border-radius:25px 25px 25px 25px;
  border-left-color:white;
  border-bottom-color:white;
  border-top-color:white;
  border-right-color:white;
 border-color:white;
 
  cursor: pointer;
}
form label{
margin-left:15px;
font-size:20px;
color:#9494b8
}
</style>
<script type="text/javascript">
function numvalidate()
{
var test=document.getElementById("pno").value;
var res=test.search(/^[0-9]{10}$/); 
if(res==-1)
alert("Phone number not valid");

}
function mailvalidate()
{
var test=document.getElementById("mail").value;
var res=test.search(/\w@[a-z]{5}.com/); 
if(res==-1)
alert("Please enter a valid Email ID");

}


</script>
</head>
<body>
​
  
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-8" style="background-image:url(https://www.dreambigin.com/images/system/img/Cover_Page.png);height:700px!important">
      
    </div>
    <div class="col-sm-4">
     
	 <form action="signup1.php"  method="POST" >
    <h1 style="margin-left:15px"><b>Register Now!</h1>
	<br/>
	<br/>
	<div class="form-group">
      <label for="name">Full Name:</label>
      <input type="text" class="form-control" placeholder="Name..." name="name" id="name"  required>
    </div>
  <div class="form-group">
      <label for="mail">Email:</label>
      <input type="email" class="form-control" placeholder="Email..." name="mail" id="mail" onchange="mailvalidate();" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" placeholder="********" name="pwd" id="pwd" required>
    </div>
    <div class="form-group">
      <label for="pwd">Phone Number:</label>
      <input type="number" class="form-control" placeholder="Phone Number..." name="pno" id="pno" onchange="numvalidate();" required>
    </div>
    
  
    <button type="submit" style="margin-top:25px">Register</button>
	
	

    
</form>
    </div>
   
  </div>
</div>
​
</body>
</html>
​
