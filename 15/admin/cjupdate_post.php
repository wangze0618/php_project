<?php
include 'connect.php';
$id=$_GET['id'];

$sql="SELECT * FROM chengji WHERE id='$id'";
$result=$conn->query($sql);
$rows=[];
while($row=$result->fetch_assoc()){
	$rows[]=$row;
}
// var_dump($rows);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/main-new.css">
</head>
<body>
	<div id="header">
			<div id="yh"><span>某某某，欢迎你</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">退出登录</a></div>
		</div>
		<div id="content">
			<div id="content_left">
				<ul>
					<li><a href="">管理员管理</a></li>
					<li><a href="">用户管理</a></li>
					<li><a href="cjmanage.php">成绩管理</a></li>
					<li><a href="">留言管理</a></li>
					<li><a href="">新闻管理</a></li>
					<li><a href="">论坛管理</a></li>
				</ul>
			</div>
			<div id="content_right">
				<div id="content_detalis">
					<h1 align=center>修改考生成绩</h1>
					<div align=center>
					<form action="cjupdate.php" method="post">
							<p><input type="hidden" name="id" value=<?php echo $rows[0]['id']?> ></p>
							<p>考号：<input type="text" name="kaohao" value=<?php echo $rows[0]['kaohao']?>></p>
							<p>姓名：<input type="text" name="xm" value=<?php echo $rows[0]['xm']?>></p>
							<p>成绩：<input type="text" name="cj" value=<?php echo $rows[0]['cj']?>></p>
							<p>照片：<input type="text" name="photo" value=<?php echo $rows[0]['zhaopian']?>></p>
							<p><input type="submit" name="update" value="修改"></p>	

					</form>
					</div>
				</div>				
			</div>
		</div>

		<div id="footer">版权信息</div>
		
</body>
</html>