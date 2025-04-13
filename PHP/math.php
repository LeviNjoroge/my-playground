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
        <label for="n">Enter the number of terms:</label> <br>
        <input type="text" name="n" id="n"> <br>
        <label for="d">Enter the common difference series/sequence:</label> <br>
        <input type="text" name="d" id="d"> <br>

        <input type="submit" value="Calculate"> <br><br>
    </form>
</body>
</html>

<?php
    // Fetch form inputs using GET method
    $a = isset($_GET["a"]) ? $_GET["a"] : 0;
    $d = isset($_GET["d"]) ? $_GET["d"] : 0;
    $n = isset($_GET["n"]) ? $_GET["n"] : 0;
    $nth = isset($_GET["nth"]) ? $_GET["nth"] : 0;

    // Calculate the sum (S) of the arithmetic progression
    if ($n > 0) {
        $gen_s = ($n * (2 * $a + $d * ($n - 1))) / 2;
        echo "The sum of the first $n terms of the AP is: $gen_s <br>";
    } else {
        echo "Please enter a valid number of terms (n).<br>";
    }

    // Calculate the nth term (Tn)
    if ($n > 0) {
        $gen_nth = $a + $d * ($n - 1);
        echo "The $n-th term of the AP is: $gen_nth <br>";
    }

    // // Calculate the nth term if the nth term is given (backwards calculation)
    // if ($nth > 0) {
    //     $gen_n = ($nth - $a) / $d + 1;
    //     echo "The number of terms to reach the nth term is: $gen_n <br>";
    // }
?>
