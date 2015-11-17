<?php

session_start();
$error_msg = "";
$nameError="";
$passwordError="";


if(isset($_POST['submit'])){
	
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
if(!isset($_SESSION['logedin'])){
	if($_SESSION['username']=="123"){
		if($_SESSION['password']=="123"){
			$_SESSION['logedin']=1;
			$home_url="loged.php";
			header('Location:'.$home_url);
		}else{
			$passwordError='please input a valid password!';
		}
	}else{
		$nameError='please input a valid username!';
	}
}else{
	$home_url="loged.php";
	header('Location:'.$home_url);
}
}

//    if(!isset($_SESSION['logedin'])){
//    echo '<p class="error">'.$error_msg.'</p>';
?>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

<label for "username">Name:</label>
<input type="text" name="username">
<span class="error">*<?php echo $nameError ?></span><br>

<label for "password">password:</label>
<input type="text" name="password">
<span type="error">*<?php echo $passwordError ?></span><br>

<input type="submit" name="submit" value="Login"> 

</form>
