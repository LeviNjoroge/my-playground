<?php
    require 'connection.php';
    
    $fetch_all = "SELECT regno, fname, lname, gender, fee_paid, coursename FROM students JOIN course ON students.courseid = course.coursecode;";

    $fetch_all_result = mysqli_query($conn, $fetch_all);
    
?>