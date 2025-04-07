<?php 
require 'connection.php';

$query = "SELECT * FROM Students";

$result = mysqli_query($conn, $query);

echo $result;
?>