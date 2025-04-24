<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series</title>
</head>
<body>
    <p>Hey fam today, we gonna calculate the Fibonacci Series...</p>
    <form action="">
        <input type="text" name="num" id="num" placeholder="Number of terms...."> <br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>

<?php
    if(isset($_GET["num"])){
        $num = $_GET["num"];
        $first = 0;
        $second = 1;
        for($i=0;$i<$num;$i++){
            $next = $first + $second;
            echo $next."<br>";
            $first = $second;
            $second = $next;
        }
        echo "done!";
    }
?>