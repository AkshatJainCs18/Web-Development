<?php
$hostname="localhost";
$userame="root";
$password="";
$database="web";
$conn=mysqli_connect($hostname,$userame,$password,$database);
if($conn){echo "connection successful";}
else{echo "connection unsuccessful"+mysqli_connect_error();}
?>