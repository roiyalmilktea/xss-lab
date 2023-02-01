<!doctype html>
<html>
<head>
   <title>Hello/Index</title>
   <style>
   body {font-size:16pt; color:#999; }
   h1 { font-size:100pt; text-align:right; color:#f6f6f6;
       margin:-50px 0px -100px 0px; }
   </style>
</head>
<body>
   
   <p>This is a excute.</p>
  
   <p><?php echo date("Y年n月j日"); ?></p>
  
   <p>input</p>
   
   <p>please write something.</p>

   <form method="POST" action="./response.php">
    
       <input type="text" name="data"/>
       <input type="submit" value="送信"/>
   </form>
</body>
</html>

