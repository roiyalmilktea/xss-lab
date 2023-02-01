<html>
 <head>
  <meta charset="UTF-8">
  <title>ログイン成功</title>
  <link rel="stylesheet" href="css/test.css" type="text/css">
 </head>
 <body>
   <?php
   session_start();
	
	echo "hello!" . $_SESSION['name']."!";
?>
</br>
    <p1>ログイン</p1>
    <p2>ユーザーページにログイン成功しました</p2>
 </body>
</html> 