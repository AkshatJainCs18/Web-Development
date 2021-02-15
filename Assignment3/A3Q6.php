<html>
<head>
<script>
function checkData()
{
    
  var firstname = document.getElementById("firstname").value;
  var lastname = document.getElementById("lastname").value;
  alert("Welcome "+ firstname +" "+ lastname +" to the world of web");
 
}
</script>
</head>
<body>
<form name="FORM" action="A3Q6.php"  method="post" >
  First name:  <input type="text"  id="firstname" placeholder="Enter Firstname"  required><br>
  Last name:  <input type="text"  id="lastname"  placeholder="Enter Lastname"  required><br><br> 
  <input type="button" value ="Submit" onClick="checkData();">
  </form>
  <body>
  </html>