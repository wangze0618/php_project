<?php
include '../connect.php';
$id = $_GET['id'];

$conn->query('SET NAMES UTF8');
//使用sql创建数据库
$sql = "DELETE FROM gbook WHERE id=$id";

//判断sql语句执行情况
if ($conn->query($sql)) {
    echo '<script>
	alert("数据删除成功！");
	location.href="../user/msginfo.php";
	</script>';
} else {
    die('数据删除失败,' . $conn->error);
}

$conn->close();