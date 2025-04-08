<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Ops</title>
</head>
<body>
    <form action="manyops.php">
        <label for="string">Enter a string(this can be anything from a sentence to a word):</label><br>
        <input type="text" name="string" id="string"> <br> <br>

        <?php
        $str = $_GET["string"];
        echo "The lenth of the text is: ".strlen($str)." characters. <br>";
        echo "In lower, the test is: ". strtolower($str)."<br>";
        echo "In uppercase: ".strtoupper($str)."<br>";
        echo "With first letters in upper: ".ucwords($str)."<br>";
        echo "String reversed: ".strrev($str)."<br>";
        echo "Word count of the text: ".str_word_count($str)."<br>";
        ?>
    </form>
</body>
</html>