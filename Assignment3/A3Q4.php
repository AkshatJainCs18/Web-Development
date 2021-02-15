<?php
 include ('config.php');


$sql = "SELECT * FROM users";
$result = $conn->query($sql);

?>
<html>
<body>
<table border='1' >
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
     </body>
     </html>
