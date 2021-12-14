<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="../../css/php_css/main-new.css">
    <link rel="stylesheet" type="text/css" href="../../css/php_css/ad_index.css">
    <link rel="stylesheet" href="../../css/php_css/index-new.css">
</head>

<body>
    <div id="header">
        <a href="../index.php"><img src="../../images/logo.png" alt=""></a>

        <div id="yh"><span><?php echo $_SESSION['username'] ?>，欢迎你</span>&nbsp;&nbsp;&nbsp;&nbsp;<a
                href="logout.php">退出登录</a></div>
    </div>
    <div id="content">
        <div id="content_left">
            <ul>
                <li><a href="">管理员管理</a></li>
                <li><a href="">用户管理</a></li>
                <li><a href="cjmanage.php">成绩管理</a></li>
                <li><a href="../admin/msgmannage.php">留言管理</a></li>
                <li><a href="">新闻管理</a></li>
                <li><a href="">论坛管理</a></li>
            </ul>
        </div>
        <div id="content_right">
            <div id="content_detalis">
                <div id="about">
                    <h2 align="center">关于软件</h2>
                    <p>使用环境：WAMP Windows+Apache+MySQL+PHP</p>
                    <p>使用平台：XAMPP</p>
                    <p>作者：王泽</p>
                    <p>Github：wangze0618</p>
                </div>
            </div>
        </div>
    </div>

    <div id="footer" align=center>
        <p>地址：北京市昌平区建材城西路金燕龙办公楼一层 邮编：100096 电话：400-618-4000 传真：010-82935100 邮箱: zhanghj+itcast.cn</p>
        <p> 京ICP备08001421号京公网安备110108007702</p>
    </div>
</body>
<script src="js/nav.js"></script>

</html>