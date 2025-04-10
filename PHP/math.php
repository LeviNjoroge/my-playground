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
        <label for="d">Enter the common difference series/sequence:</label> <br>
        <input type="text" name="d" id="d"> <br>
        <label for="n">Enter the number of terms:</label> <br>
        <input type="text" name="n" id="n"> <br>

        <input type="submit" value="Calculate"> <br><br>
    </form>
</body>
</html>

<?php
    $a = isset($_GET["a"]);
    $d = isset($_GET["d"]);
    $n = isset($_GET["n"]);
    $nth = isset($_GET["nth"]);

    $gen_nth = $a+$d*($n-1) || $nth || $nth-$d*($n-1);
    if($d!=0){$gen_n = ($nth - $a)/$d + 1 || $n;}else{$n || 0;}
    $gen_s = ($n*(2*$a + $d*($n - 1)))/2 || $n*($a+$nth)/2;

    echo "The nth term of the AP is: $gen_nth";
    echo "The number of terms in the AP is: $gen_n";
    echo "The sum of $gen_n terms in the AP is: $gen_s";
?>