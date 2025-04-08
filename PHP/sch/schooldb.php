<?php 
require 'connection.php';

$query = "SELECT fname FROM Students";

$result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row['fname'] . "<br>"; // assuming you have a 'name' column
    }
} else {
    echo "Query failed: " . mysqli_error($conn);
}
?>
