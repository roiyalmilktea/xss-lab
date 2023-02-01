<?php 
	session_start();
	//$name=$_POST['name'];
	//$pass=$_POST['pass'];

	$dbuser = "root";
	$dbpass = "root";
	$dsn = "mysql:host=172.30.0.2;dbname=testdb;";
	//データベースに接続
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	if (!isset($_SESSION['id']) && !isset($_SESSION['pass'])){
		$_SESSION['id'] = $_POST['id'];
		$_SESSION['pass'] = $_POST['pass'];
	}
	$flg = false;
	$st = $pdo->query("SELECT * FROM user");
	while($row = $st->fetch()){
		$Dname = htmlspecialchars($row['id']);
		$Dpass = htmlspecialchars($row['pass']);
		//もしデータベース内の値と入力された値が一致したらユーザー名を取得して$flgをtrueにします
		if($_SESSION['id']==$Dname && $_SESSION['pass'] == $Dpass){
			$_SESSION['name'] = htmlspecialchars($row['name']);
			$flg = true;
		}
	} 
	if($flg==false){
		//IDもしくはPASSWORDが違えばセッションを破棄してログイン画面に遷移します。
		unset($_SESSION['id']);
		unset($_SESSION['pass']);
		header("Location:users_login.php");
	}else{
	  //ユーザー情報がデータベースと一致したらユーザーページに遷移します。
		header("Location:login.php");
	}
	