<?php
include '../connect.php';
session_start();
$username = $_POST['login-id'];
$psw = $_POST['login-pwd'];

$conn->query('SET NAMES UTF8');
$sql = "SELECT * from admin WHERE username='$username'and password='$psw'";
$result = $conn->query($sql);
$rows = [];

while ($row = $result->fetch_assoc()) {
	$rows[] = $row;
}
if ($rows) {
	$_SESSION['username'] = $username;
	echo '<script>
	alert("登录成功！");
	location.href="index-new.php";
	</script>';
} else {
	echo '<script>
	alert("登录失败！");
	location.href="./adminlogin.php";
	</script>';
	var_dump($rows);
}