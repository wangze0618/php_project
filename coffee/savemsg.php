<?php
include './connect.php';
$passid=$_POST['passid'];
$msguser=$_POST['msguser'];
$subject=$_POST['subject'];
$msgcontent=$_POST['msgcontent'];
$date=$_POST['date'];

$conn->query('SET NAMES UTF8');
//使用sql创建数据库
$sql="INSERT INTO gbook(msguser,subject,content,riqi,passid) VALUES ('$msguser','$subject','$msgcontent','$date',$passid)";

//判断sql语句执行情况
if($conn->query($sql)){
	echo "<script>
	alert('数据插入成功！');
	location.href='msginfo.php';
	</script>";
}else{
	die('数据插入失败,'.$conn->error);
}

$conn->close();