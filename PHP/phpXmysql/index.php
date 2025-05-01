<?php
    require "results.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soen 260 School</title>
    <style>
        .students_table{
            margin: 25px 0;
            border-collapse: collapse;
            font-size: 0.9em;
            min-width: 720px;
        }

        .students_table thead tr{
            background-color:#009879;
            color: white;
            text-align: left;
            font-weight: bold;
        }

        .students_table td, .students_table th{
            padding: 12px 15px;
        }
    </style>
</head>
<body>
    <table class="students_table">
        <thead>
            <tr>
                <th>Registration Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Fee Paid</th>
                <th>Course</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    while ($row = mysqli_fetch_assoc($fetch_all_result)) {
                        echo "<tr>
                                <td>{$row['regno']}</td>
                                <td>{$row['fname']}</td>
                                <td>{$row['lname']}</td>
                                <td>{$row['gender']}</td>
                                <td>{$row['fee_paid']}</td>
                                <td>{$row['coursename']}</td>
                              </tr>";
                    }
                ?>
                <!-- <tr>
                    <td>S001</td>
                    <td>Lee</td>
                    <td>Kin</td>
                    <td>M</td>
                    <td>120,000</td>
                    <td>Applied Comp</td>
                </tr> -->
        </tbody>
    </table>
</body>
</html>