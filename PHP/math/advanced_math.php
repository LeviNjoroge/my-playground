<!-- 
🔴 ADVANCED LEVEL
    1. Check Prime Number
        Write a PHP function that checks whether a given number $n = 29 is a prime number.

    2. Find All Armstrong Numbers Between 100 and 999
        Write a script that finds and prints all 3-digit Armstrong numbers.

    3. Solve a Quadratic Equation
        Given coefficients $a = 1, $b = -3, and $c = 2, write a PHP script to solve the quadratic equation using the quadratic formula.

    4. Greatest Common Divisor (GCD)
        Write a PHP function to find the GCD of two numbers, e.g., $a = 36, $b = 60. 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Math</title>
</head>
<body>
    <div class="isPrime">
        <!-- To check if a number is prime-->
        <form action="">
            <input type="number" name="prime" id="prime" placeholder="Enter possibly prime number">
            <input type="submit" value="Check!"> <br>
        </form>
        <?php
            if($_GET["prime"]){
                $num = $_GET["prime"];
                $prime_count = 0;
                for($i=2;$i<=$num;$i++){
                    if($num % $i == 0){
                        $prime_count +=1;
                    }
                }
                if($prime_count<=2){
                    echo "{$num} is a prime number";
                }
                else{
                    echo "{$num} is NOT a prime number";
                }
            }
        ?>
    </div>

    <div class="amstrong_numbers">
        <!-- Find All Armstrong Numbers Between 100 and 999 -->

    </div>

    <div class="quadrilateral_equation">
        <!-- Given coefficients $a = 1, $b = -3, and $c = 2, write a PHP script to solve the quadratic equation using the quadratic formula. -->
         
    </div>

    <div class="gcd">
        <!-- A PHP function to find the GCD of two numbers-->

    </div>

</body>
</html>