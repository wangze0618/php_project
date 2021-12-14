<?php
include './connect.php';
$id=(int)$_POST['id'];
$kaohao=$_POST['kaohao'];
$xm=$_POST['xm'];
$cj=$_POST['cj'];
$zhaopian=$_POST['photo'];

// var_dump($id);
// var_dump($kaohao);
// var_dump($xm);
// var_dump($cj);
// var_dump($zhaopian);
$conn->query('SET NAMES UTF8');
//使用sql创建数据库
$sql="UPDATE chengji SET kaohao='$kaohao',xm='$xm',cj=$cj,zhaopian='$zhaopian' WHERE id=$id";

//判断sql语句执行情况
if($conn->query($sql)){
	echo '<script>
	alert("数据更新成功！");
	location.href="cjmanage.php";
	</script>';
}else{
	die('数据更新失败,'.$conn->error);
}

$conn->close();

?>