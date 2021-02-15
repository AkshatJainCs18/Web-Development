<?php
include ('config.php');
$username=$_POST['username'];

$sql = "DELETE FROM users where username='".$username."'" ;
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  
?>
