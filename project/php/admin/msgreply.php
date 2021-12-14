<?php

include '../connect.php';
$id = (int)$_POST['id'];
$passid = $_POST['passid'];
$subject = $_POST['subject'];
$msguser = $_POST['msguser'];
$content = $_POST['content'];
$reply = $_POST['reply'];
$riqi = $_POST['riqi'];
$redate = $_POST['redate'];

if ($content) {
    $passid = 1;
}

$conn->query('SET NAMES UTF8');
$sql = "UPDATE gbook SET passid = '$passid',msguser='$msguser',subject='$subject',content = '$content',reply= '$reply',riqi = '$riqi',redate = '$redate' WHERE id = $id";
if ($conn->query($sql)) {
    echo '<script>
	alert("数据更新成功！");
	location.href="../user/msginfo.php";
	</script>';
} else {
    die('数据更新失败,' . $conn->error);
}