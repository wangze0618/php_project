<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="../css/main-new.css">
    <link rel="stylesheet" type="text/css" href="../css/ad_index.css">
</head>

<body>
    <div id="header">
        <div id="yh"><span><?php echo $_SESSION['username'] ?>，欢迎你</span>&nbsp;&nbsp;&nbsp;&nbsp;<a
                href="logout.php">退出登录</a></div>
    </div>
    <div id="content">
        <div id="content_left">
            <ul>
                <li><a href="">管理员管理</a></li>
                <li><a href="">用户管理</a></li>
                <li><a href="cjmanage.php">成绩管理</a></li>
                <li><a href="../../project/php/admin/msgmannage.php">留言管理</a></li>
                <li><a href="">新闻管理</a></li>
                <li><a href="">论坛管理</a></li>
            </ul>
        </div>
        <div id="content_right">
            <div id="content_detalis">
                <div id="about">
                    <h2 align="center">关于软件</h2>
                    <p>使用平台：</p>
                    <p>使用平台：</p>
                    <p>使用平台：</p>
                    <p>使用平台：</p>
                </div>
            </div>
        </div>
    </div>

    <div id="footer">版权信息</div>
</body>
<script src="js/nav.js"></script>

</html>