<?php
include '../connect.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$conn->query('SET NAMES UTF8');
$sql = "INSERT INTO user(username,password) VALUES('$username','$password')";
$result = $conn->query($sql);
if ($conn->query($sql)) {
	echo '<script>
	alert("注册成功！");
	location.href="../../index.php";
	</script>';
} else {
	echo '<script>
	alert("注册失败！");
	location.href="../user/userreg.php";
	</script>';
	// echo $conn->error;
	// var_dump($rows);
}