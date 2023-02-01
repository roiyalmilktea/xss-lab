<?php
session_start();
if($_SESSION["name"] == "pass" && $_SESSION["pass"] == "pass"){
  header('Location: manager_login.php');
exit;
}
if($_SESSION["name"] == "user1" && $_SESSION["pass"] == "user1"){
    header('Location: users_login.php');
exit;
}
?>
<html>
 <head>
  <meta charset="UTF-8">
  <title>ログイン</title>
  <link rel="stylesheet" href="css/test.css" type="text/css">
 </head>
 <body>
    <h1>ログインページ</h1>
    <h2>ログイン</h2>
<form method="POST" action="">
   <label>ログインしてください</label></br>
      <input type="text" name="name" value=""></br></br>
      <input type="text" name="pass" value=""></br></br>
      <input type="submit" value="ログイン">
</form>
 </body>
</html> 