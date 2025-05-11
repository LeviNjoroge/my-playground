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

                echo "Since {$num} is divisible by: <br>";
                for($i=2;$i<=$num;$i++){
                    if($num % $i == 0){
                        echo $i."<br>";
                        $prime_count +=1;
                    }
                }
                if($prime_count=1){
                    echo "<br>It IS a prime number";
                }
                else{
                    echo "<br>It IS NOT a prime number";
                }
            }
        ?>
    </div>

    <div class="amstrong_numbers">
        <!-- Find All Armstrong Numbers Between 100 and 999 -->

    </div>

    <div class="quadrilateral_equation">
        <!-- Given coefficients $a = 1, $b = -3, and $c = 2, write a PHP script to solve the quadratic equation using the quadratic formula. -->
         <!--
            using the formulae:
                x = (-b+-sqrt(b^2-4ac))/2a
         -->
        <form action="">
            <input type="number" name="a" id="a" placeholder="Enter a"> <br>
            <input type="number" name="b" id="b" placeholder="Enter b"> <br>
            <input type="number" name="c" id="c" placeholder="Enter c"> <br>
            <input type="submit" value="Solve for x!"> <br> <br>
        </form>

        <?php
            // if(isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["c"])){
            //     $a = $_GET["a"];
            //     $b = $_GET["b"];
            //     $c = $_GET["c"];
            //     $x1 = (-($b)+sqrt((pow($b,2)-4*$a*$c)))/(2*$a);
            //     $x2 = (-($b)-sqrt((pow($b,2)-4*$a*$c)))/(2*$a);
            //     echo "x is {$x1} or {$x2}";
            // }


            if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["c"])) {
                $a = $_GET["a"];
                $b = $_GET["b"];
                $c = $_GET["c"];

                $discriminant = pow($b, 2) - 4 * $a * $c;

                if ($a == 0) {
                    echo "This is not a quadratic equation.";
                } elseif ($discriminant < 0) {
                    echo "No real roots.";
                } else {
                    $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
                    $x2 = (-$b - sqrt($discriminant)) / (2 * $a);
                    echo "x is {$x1} or {$x2}";
                }
            }
        ?>
    </div>

    <div class="gcd">
        <!-- A PHP function to find the GCD of two numbers-->

    </div>

</body>
</html