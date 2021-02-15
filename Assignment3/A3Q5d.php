<?php
include ('config.php');



   $username=$_POST['username'];
   $email=$_POST['email'];
   $city=$_POST['city'];
  
   $gender=$_POST['gender'];
   
 
   $sql  = "UPDATE users set username ='". $username."' ,email = '". $email ."' ,city = '".$city ."' , gender = '".$gender ."' where username='".$username ."'";

  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " .$conn->error;
  }



?>

<?php
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

?>

<table border='1'  >
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>gender</th>
    <th>City</th>
    
    </tr>
    <?php 
if ($result->num_rows > 0) {

    ?>
    
    <?php
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
 ?>
  <tr>
 <td> <?php echo  $row["username"] ?></td>
    <td> <?php echo  $row["email"] ?></td>
    <td> <?php echo  $row["gender"] ?></td>
    <td> <?php echo  $row["city"] ?></td>
   
   
    </tr>
   <?php
}
  ?>

<?php 
} ?>
     </table>
