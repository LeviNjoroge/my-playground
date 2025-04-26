<!-- 
🟢 BASIC LEVEL
    Add Two Numbers
        Write a PHP script that adds two numbers $a = 5 and $b = 7 and prints the result.

    Area of a Circle
        Given a radius $r = 4, write a PHP program to calculate the area of the circle using the formula πr². (Use M_PI for π.)

    Check if a Number is Even or Odd
        Write a PHP script that checks if a number $n = 13 is even or odd. 
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Math</title>
</head>
<body>
    <div class="basic_math">
        <form action="" method="get">
            <input type="number" name="num1" id="num1" placeholder="First Number..."> <br>
            <input type="text" name="num2" id="num2" placeholder="Second Number..."> <br>
            <input type="submit" value="Perform basic math">
        </form>
    </div>
    <div class="area_of_a_circle">
        <form action="">
            <input type="number" name="radius" id="radius"> <br>
            <input type="submit" value="Calculate the Area!">
        </form>
    </div>
</body>
</html>

<?php
    // basic math
    if($_GET["num1"]&&$_GET["num2"]){
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        echo "$num1 + $num2 = ".$num1 + $num2."<br>";
        echo "$num1 - $num2 = ".$num1 - $num2."<br>";
        echo "$num1 x $num2 = ".$num1 * $num2."<br>";
        if($num2!=0){
            echo "$num1/$num2 = ".$num1 / $num2." with the remainder is: ".$num1% $num2."<br>";
        }
        else{
            echo "division by zero is not allowed mate";
        }
        $num1 = $num2 = 0;
    }

    //area of a circle
    if($_GET["radius"]){
        $radius = $_GET["radius"];
    }

    //check if a number is odd or even

    
?>