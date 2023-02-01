
<?php
	
	if(isset($_SESSION['id']) && isset($_SESSION['pass'])){
		header("Location:auth.php");
	}
?>
<form action="auth.php" method="GET">
name:<input type="text" name="id"> password:<input type="password" name="pass"><br>
<input type="submit" value="Login">
</form> 
