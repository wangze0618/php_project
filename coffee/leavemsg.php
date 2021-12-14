<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/leavemsg.css">
	</head>
	<body>
		<div id="header"></div>
		<div id="nav">
			<ul>
				<li><a href="">首页</a></li>
				<li><a href="">关于我们</a></li>
				<li><a href="">咖啡豆</a></li>
				<li><a href="">挂耳包</a></li>
				<li><a href="">咖啡器材</a></li>
				<li><a href="msginfo.php">留言板</a></li>
				<li><a href="">咖啡论坛</a></li>
				<li><a href="">联系我们</a></li>
			</ul>
		</div>
		<div id="content">
			<div id="content_details">
				<h2 align=center>留言板</h2>
				<p align=center>感谢您的访问，请留下您宝贵的意见！</p>
				<div id="msg">
					<form action="savemsg.php" method="post">
					<p><input type="hidden" name="passid" value=0></p>
					<p><span class="width">留言人：</span><input type="text" name="msguser"></p>
					<p><span class="width">留言主题：</span><input type="text" name="subject"></p>
					<p><span class="width">留言内容：</span><textarea rows="6" cols="50" name="msgcontent">	</textarea></p>
					<p><input type="hidden" name="date" value='<?php echo date("Y-m-d")?>'></p>
					<p align="center"><input type="submit" class="width">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" class="width"></p>
					</form>
				</div>
			</div>
		</div>
		<div id="footer"></div>
	</body>
</html>
