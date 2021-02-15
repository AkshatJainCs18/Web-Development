<?php
include ('config.php');

$username=$_POST['username'];
$sql = "SELECT * FROM users where username='".$username."'" ;
$result = $conn->query($sql);

?>


    <?php 
if ($result->num_rows > 0) {

    ?>
    
    <?php
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
 ?>
  <form name="FORM" action="A3Q5d.php"  method="post">
  USERNAME:  <input type="text" name="username" placeholder="Enter Username" value="<?php echo  $row["username"] ?>" required><br>
  EMAIL<input type="email" name="email" placeholder="Enter Email" value ="<?php echo  $row["email"] ?>" required ><br>
  Current City : <?php echo  $row["city"] ?><br/>
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
   
         Gender : <?php echo  $row["gender"] ?><br/>
       Choose GENDER  &nbsp MALE<input type="radio" name="gender" value="male">
        FEMALE<input type="radio" name="gender" value="female">
        <br>
        <input type="submit" name="submit" value="UPDATE">
</form>

   
   
   
    <?php
}
  ?>

<?php 
} ?>
  
