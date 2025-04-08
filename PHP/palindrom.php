<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrometer</title>
</head>
<body>
    <h1>This is a Palindrometer</h1>
    <form action="palindrom.php">
        <label for="text">Enter some text to see if it's a palindrom:</label><br>
        <input type="text" name="text" id="text"> <br>
        <input type="submit" value="Test">
    </form>
</body>
</html>

<?php
$str = $_GET["text"];
if($str === strrev($str)){
    echo "$str is a palindrome";
}
else{
    echo "$str is not a palindrome";
}
?>