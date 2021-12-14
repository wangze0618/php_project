<?php
//默认首页，需先判断用户是否登录

//开启session
session_start();


//判断有木有存储的session，如果木有，则跳转至登录页面（login.html）
if (!$_SESSION['username']) {
	header('location:login.html');
}


?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/1.css">
</head>

<body>
    <div id=header>
        <div id=login>
            <span><?php echo $_SESSION['username'] ?>你好，&nbsp;&nbsp;&nbsp;&nbsp;</span><a href="logout.php">注销登录</a>
        </div>
    </div>
</body>

</html>