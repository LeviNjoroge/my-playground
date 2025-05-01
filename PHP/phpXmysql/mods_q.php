<?php
require "connection.php";
require "results.php";

if (isset($_GET["name"])) {
    $q_name = $_GET["name"];

    // Escape input to avoid SQL injection
    $q_name = mysqli_real_escape_string($conn, $q_name);

    $fetch_all_q = "
        SELECT regno, fname, lname, gender, fee_paid, coursename
        FROM students
        JOIN course ON students.courseid = course.coursecode
        WHERE fname LIKE '%$q_name%' OR lname LIKE '%$q_name%';
    ";

    $fetch_all_result = mysqli_query($conn, $fetch_all_q);
}
?>
