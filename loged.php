<?php
	session_start();
	echo 'user:'.$_SESSION['username'].'is logged in!';
	if(isset($_POST['submit']))
	{
		$home_url='LogOut.php';
		header('Location:'.$home_url);
	}
?>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<input type="submit" name="submit" value="LogOut"> 

</form>