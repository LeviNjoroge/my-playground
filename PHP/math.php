<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
</head>
<body>
    <h1>AP & GP Calculations</h1>
    <p>
        With this site, you will be able to caclulate the following:
        <ul>
            <li>Sum to n</li>
            <li>nth number</li>
        </ul>
        of both the AP and GP
    </p>
    <p>Let's begin...</p>
    <form action="">
        <label for="a">Enter the first number of the series/sequence:</label><br>
        <input type="text" name="a" id="a"> <br>
        <label for="nth">Enter the last number of the series/sequence:</label> <br>
        <input type="text" name="nth" id="nth"> <br>
        <label for="a1">Enter the common difference series/sequence:</label> <br>
        <input type="text" name="a1" id="a1"> <br>

        <input type="submit" value="Calculate"> <br><br>
    </form>
</body>
</html>

<?php
    $a = isset($_GET["a"]);
    $a1 = isset($_GET["a1"]);
    $nth = isset($_GET["nth"]);

    echo "The nth term of the AP "
?>