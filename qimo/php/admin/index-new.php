<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="../../css/php/main-new.css">
    <link rel="stylesheet" type="text/css" href="../../css/php_css/ad_index.css">
    <link rel="stylesheet" href="../../css/php_css/index-new.css">
</head>

<body>
    <div id="header">
        <a href="../index.php"><img src="../../images/logo.png" alt=""></a>

        <div id="yh"><span><?php echo $_SESSION['username'] ?>欢迎您!</span>&nbsp;&nbsp;&nbsp;&nbsp;<a
                href="logout.php">退出登录</a></div>
    </div>
    <div id="content">
        <div id="content_left">
            <ul>
                <li><a href="">管理员管理</a></li>
                <li><a href="">用户管理</a></li>
                <li><a href="cjmanage.php">成绩管理</a></li>
                <li><a href="../admin/msgmanage.php">留言管理</a></li>
                <li><a href="">新闻管理</a></li>
                <li><a href="">论坛管理</a></li>
            </ul>
        </div>
        <div id="content_right">
            <div id="content_detalis">
                <div id="about">
                    <h2 align="center">关于我们</h2>
                    <p>制作时间：2021/12/13</p>
                    <p>制作平台：XAMPP</p>
                    <p>策划者：饶艳</p>
                </div>
            </div>
        </div>
    </div>

    <div id="footer" align=center>
        <p>如有问题，请联系在线客服。工作时间：9:00-21:00</p>
        <p>copyright©2010-2021 诺心lecake.com版权所有 诺心食品（上海）有限公司 沪ICP备10211730号 沪公网安备31010402003364号</p>
    </div>
</body>
<script src="js/nav.js"></script>

</html>