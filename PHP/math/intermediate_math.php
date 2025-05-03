<!-- 
🟡 INTERMEDIATE LEVEL
    Multiplication Table
        Write a PHP script that prints the multiplication table of 7 from 1 to 10 using a loop.

    Factorial of a Number
        Write a PHP function to calculate the factorial of a given number $n = 5.

    Sum of Digits
        Write a PHP program that takes a number $n = 1234 and returns the sum of its digits (1+2+3+4 = 10). 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intermediate Math</title>
</head>
<body>
    <!-- Multiplication Table -->
    <!-- Write a PHP script that prints the multiplication table of 7 from 1 to 10 using a loop. -->
    <div class="multiplication_table">
        <p>Write a PHP script that prints the multiplication table of 7 from 1 to 10 using a loop.</p>
        <?php
            // this is jus casually without using a table, lemme now try it as a table
            for($i=1;$i<=10;$i++){
                echo "7 x $i = ". 7 * $i ."<br>";
            }
        ?>
        <table>
            <tbody>
                <?php 
                    for($i=1;$i<=10;$i++){
                        echo "<tr> <td>7</td><td>x</td><td>$i</td><td>=</td><td>". 7 * $i ."</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Factorial of a Number -->
    <div class="factorial_of_a_number">
        <br> <br> <br>
        <form action="">
            <input type="number" name="num" id="num" placeholder="Enter the number..."> 
            <input type="submit" value="Find the factorial"> <br>
        </form>

        <?php
            if($_GET["num"]){
                $num = $_GET["num"];
                $result = 1;
                if($num == 0){
                    $result = 1;
                }
                else{
                    for($x=1;$x<=$num;$x++){
                        $result*=$x;
                    }
                }
                echo $result;
            }
        ?>
    </div>

    <!-- Sum of Digits -->
     <div class="sum_of_numbers">
            <form action="">
                <input type="number" name="l_num" id="l_num">
                <input type="submit" value="Submit"> <br>
            </form>
     </div>
</body>
</html>