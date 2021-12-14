<?php
//连接数据库
include 'connect.php';
//打开session
session_start();
//接收用户传来的用户名和密码
$username = $_POST['yonghuming'];
$password = $_POST['psw'];

//编写匹配用户名和密码的select语句
$sql = "SELECT * FROM user where username = '$username' and password = '$password'";

//执行$sql，将结果放到$result中
$result = $conn->query($sql);
$rows = [];

while ($row = $result->fetch_assoc()) {
	$rows[] = $row;
}

//用户名、密码验证
if ($rows) {
	//登录成功，跳转至index.php
	header('location:index.php');

	//把登录的用户名信息存储到session中
	$_SESSION['username'] = $username;
} else {
	//登录失败——提示“登录失败”信息，跳转至login.html
	echo "<script type='text/javascript'>alert('登录失败！');
	location.href='./login.html'
	</script>";
}