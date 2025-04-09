<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country to Language</title>
</head>
<body>
    <h1>Welcome to the Open Source Intelligence(OSINT) Department of Languages!</h1>
    <form action="">
        <label for="Country">Enter the country:</label> <br>
        <input type="text" name="Country" id="Country"> <br><br>
        <label for="Language">Enter the language spoken:</label> <br>
        <input type="text" name="Language" id="Language"> <br><br>
    </form>
</body>
</html>

<?php
    $country = $_GET["Country"];
    $language = $_GET["Language"];

    function storage(){
        global 
        static $country_to_language[$country] = $language;
    }
?>