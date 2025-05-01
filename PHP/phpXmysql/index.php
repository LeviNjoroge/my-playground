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
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
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

        .students_table tbody tr{
            border-bottom: 1px solid #dddddd;
        }

        .students_table tbody tr:nth-of-type(even){
            background-color: #f3f3f3;
        }

        .students_table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .students_table tbody tr.active-row{
            font-weight: bold;
            color: #009879;
        }
    </style>
</head>
<body>
    <p>Here are the Students enrolled in the school</p>
    <p>Wanna search? <br>
        <form action="mods_q.php">
            <input type="search" name="name" id="name"> <br>
        </form>
    </p>
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
        </tbody>
    </table>
</body>
</html>