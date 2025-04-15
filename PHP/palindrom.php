<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrometer</title>
</head>
<body>
<div class="palindrome-explainer">
  <h2>🔍 Palindrome Checker (Palindrometer!)</h2>
  
  <div class="definition">
    <p>A <strong>palindrome</strong> reads the same backward as forward. 
       Ignore spaces, punctuation, and uppercase letters.</p>
  </div>
  
  <div class="examples">
    <h3>✅ Palindrome Examples:</h3>
    <ul>
      <li>"Madam" → "madaM" (Same backward!)</li>
      <li>"12321" → "12321" (Numbers work too!)</li>
    </ul>
    
    <h3>❌ Non-Palindrome Examples:</h3>
    <ul>
      <li>"Hello" → "olleH" (Not the same!)</li>
      <li>"12345" → "54321" (Different!)</li>
    </ul>
  </div>
  
  <div class="try-it">
    <h3>🔧 Try the Palindrometer:</h3>
        <form action="">
            <input type="text" >
            <input type="text" name="text" id="text" placeholder="Type a word or number..."> <br>
            <input type="submit" value="Check!"> <br>
        </form>
    <p id="result"></p>
  </div>
</div>
</body>
</html>

<?php
if($_GET["text"]){
    $str = $_GET["text"];
    if($str === strrev($str)){
        echo "$str is a palindrome";
    }
    else{
        echo "$str is not a palindrome";
    }
}
?>