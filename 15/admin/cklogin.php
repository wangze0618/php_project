<?php
include 'connect.php';
session_start();
$username=$_POST['yhm'];
$psw=$_POST['psw'];

$conn->query('SET NAMES UTF8');
$sql="SELECT * from user WHERE username='$username'and password='$psw'";

$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
    $rows[]=$row;
}
if($rows){
	$_SESSION['username']=$username;
	echo '<script>
	alert("登录成功！");
	location.href="index-new.php";
	</script>';
}else{
	echo '<script>
	alert("登录失败！");
	location.href="login.html";
	</script>';
}