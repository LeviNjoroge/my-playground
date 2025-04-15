<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Palindrometer</title>
  <style>
      body {
          font-family: 'Arial', sans-serif;
          line-height: 1.6;
          max-width: 800px;
          margin: 0 auto;
          padding: 20px;
          background-color: #f5f5f5;
          color: #333;
      }
        
      .palindrome-explainer {
          background-color: white;
          border-radius: 10px;
          padding: 20px;
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      }
        
      h2 {
          color: #2c3e50;
          text-align: center;
          margin-bottom: 20px;
          border-bottom: 2px solid #3498db;
          padding-bottom: 10px;
      }
        
      h3 {
          color: #3498db;
          margin-top: 20px;
      }
        
      .definition {
          background-color: #f8f9fa;
          padding: 15px;
          border-radius: 5px;
          margin-bottom: 20px;
      }
        
      .examples ul {
          padding-left: 20px;
      }
        
      .examples li {
          margin-bottom: 8px;
      }
        
      .try-it {
          background-color: #e8f4f8;
          padding: 20px;
          border-radius: 5px;
          margin-top: 20px;
      }
        
      form {
          margin: 15px 0;
      }
        
      input[type="text"] {
          width: 100%;
          padding: 10px;
          margin-bottom: 10px;
          border: 1px solid #ddd;
          border-radius: 4px;
          font-size: 16px;
      }
        
      input[type="submit"] {
          background-color: #3498db;
          color: white;
          border: none;
          padding: 10px 20px;
          border-radius: 4px;
          cursor: pointer;
          font-size: 16px;
          transition: background-color 0.3s;
      }
        
      input[type="submit"]:hover {
          background-color: #2980b9;
      }
        
      #result {
          margin-top: 15px;
          padding: 15px;
          background-color: #fff;
          border-radius: 4px;
          border-left: 4px solid #3498db;
          font-weight: bold;
      }
        
      .palindrome {
          color: #27ae60;
      }
        
      .not-palindrome {
          color: #e74c3c;
      }
  </style>
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
  <form action="" method="GET">
      <input type="text" name="text" id="text" placeholder="Type a word or number...">
      <input type="submit" value="Check!">
  </form>
    
  <div id="result">
      <?php
      if(isset($_GET["text"])){
          $str = $_GET["text"];
          // Improved palindrome check - case insensitive
          $cleanStr = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $str));
            
          if($cleanStr === strrev($cleanStr)){
              echo "<span class='palindrome'>\"$str\" is a palindrome! ✓</span>";
          }
          else{
              echo "<span class='not-palindrome'>\"$str\" is not a palindrome. ✗</span>";
          }
      }
      ?>
  </div>
</div>
</div>
</body>
</html>