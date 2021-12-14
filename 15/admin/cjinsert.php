<?php
include './connect.php';
$kh=$_POST['kaohao'];
$xingming=$_POST['xm'];
$chengji=$_POST['cj'];
$photo=$_POST['photo'];

$conn->query('SET NAMES UTF8');
//使用sql创建数据库
$sql="INSERT INTO chengji(kaohao,xm,cj,zhaopian) VALUES ('$kh','$xingming',$chengji,'$photo')";

//判断sql语句执行情况
if($conn->query($sql)){
	echo '数据插入成功！';
}else{
	die('数据插入失败,'.$conn->error);
}
echo "<script>";
echo "location.href='cjmanage.php'";
echo "</script>";
$conn->close();

?>