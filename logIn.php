<?php
//开始会话
session_start();
$error_msg = "";
$nameError="";
$passwordError="";


if(isset($_POST['submit'])){
//submit后，赋值session变量
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
//$_SESSION['logedin']变量，判断是否已经登录
if(!isset($_SESSION['logedin'])){
//如果之前没有登录，检测用户名和密码。
	if($_SESSION['username']=="123"){
		if($_SESSION['password']=="123"){
			$_SESSION['logedin']=1;
//用户名和密码正确，跳转到的登录后的页面
			$home_url="loged.php";
			header('Location:'.$home_url);
		}else{
			$passwordError='please input a valid password!';
		}
	}else{
		$nameError='please input a valid username!';
	}
}else{
//如果之前登陆过，直接跳转到登录后的页面。
	$home_url="loged.php";
	header('Location:'.$home_url);
}
}

//    if(!isset($_SESSION['logedin'])){
//    echo '<p class="error">'.$error_msg.'</p>';
?>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<!--用户名输入-->
<label for "username">Name:</label>
<input type="text" name="username">
<span class="error">*<?php echo $nameError ?></span><br>
<!--密码输入-->
<label for "password">password:</label>
<input type="text" name="password">
<span type="error">*<?php echo $passwordError ?></span><br>
<!--提交按钮-->
<input type="submit" name="submit" value="Login"> 

</form>
