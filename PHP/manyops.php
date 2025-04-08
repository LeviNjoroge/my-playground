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
        echo "The lenth of the text is: ".strlen($str)." characters.";
        echo "In lower, the test is: ". strtolower($str);
        echo "In uppercase: ".strtoupper($str);
        echo "With first letters in upper: "

        ?>
    </form>
</body>
</html>