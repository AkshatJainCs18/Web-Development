<?php
include ('config.php');
?>
 <?php 
if(isset($_POST['submit']))
{
   $username=$_POST['username'];
   $email=$_POST['email'];
   $city=$_POST['city'];
   
   $gender=$_POST['gender'];
   $sql  = "INSERT INTO `users` (username, email, gender, city) 
    VALUES ('$username', '$email', '$gender', '$city')";
   mysqli_query($conn, $sql);
}
?>
<html>
<body>
<form name="FORM" action="A3Q3.php"  method="post">
  USERNAME:  <input type="text" name="username" placeholder="Enter Username" required><br>
  EMAIL<input type="email" name="email" placeholder="Enter Email" required ><br>
  
  CITY<select  name="city" >
                 <option>Dehradun</option>
                 <option>Delhi</option>
                 <option>Chandigarh</option>
                 <option>Haryana</option>
                 <option>Lucknow</option>
                 <option>Noida</option>
                 <option>Kolkata</option>
                 <option>Mumbai</option>
                 <option>Meerut</option>
                 <option>Chennai</option>
                 </select><br>
        GENDER  &nbsp MALE<input type="radio" name="gender" value="male">
        FEMALE<input type="radio" name="gender" value="female">
        <br>
         <input type="submit" name="submit" value="submit">
</form>

</body>
</html>
