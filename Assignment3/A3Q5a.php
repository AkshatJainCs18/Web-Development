<html>
<head>
<script>
function checkData()
{
  
var r = confirm("Are you sure want to delete?");
if (r == true) {
    return r;
} else {
    document.getElementById("display").submit();
  return r;
}

}
</script>
</head>
<body>
<form name="FORM" action="A3Q5a.php"  method="post">
  USERNAME:  <input type="text" name="username" placeholder="Enter Username" required><br>
  <input type="submit" value="LOGIN" name="submit"> 
  </form>

<?php
include ('config.php');
?>

<table border='1' >
   
    <?php 
if(isset($_POST['submit']))
{

$username=$_POST['username'];

$sql = "SELECT * FROM users where username='".$username."'" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    ?>
     <tr>
    <th>Name</th>
    <th>Email</th>
    <th>gender</th>
    <th>City</th>
    <th>Delete</th>
    <th>Edit</th>
    </tr>
    <?php
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
 ?>
  <tr>
 <td> <?php echo  $row["username"] ?></td>
    <td> <?php echo  $row["email"] ?></td>
    <td> <?php echo  $row["gender"] ?></td>
    <td> <?php echo  $row["city"] ?></td>
    <td>
    <form name="FORM" action="A3Q5b.php"  method="post" onSubmit="return checkData();">
   <input type="hidden" name="username" value="<?php echo  $row["username"] ?>" required><br>
  <input type="submit" value="DELETE" name="submit"> 
  </form>
  </td>
   <td>
   <form name="FORM" action="A3Q5c.php"  method="post">
 <input type="hidden" name="username" value="<?php echo  $row["username"] ?>" required><br>
  <input type="submit" value="EDIT" name="submit"> 
  </form>
   </td>
    </tr>
   <?php
}
  ?>

<?php 
}

}
?>
 </table>

 <form action="A3Q4.php" id="display">
 </form>
 </body>
 </html>
