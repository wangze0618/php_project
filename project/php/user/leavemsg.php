<?php
include '../connect.php';
session_start();




?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../../css/php_css/main.css">
    <link rel="stylesheet" href="../../css/php_css/leavemsg.css">
</head>

<body>
    <div id="header" align=center>
        <a href="#"><img src="../../images/logo.png" alt="" srcset=""></a>
    </div>
    <div id="nav">
        <ul>
            <li><a href="../index.php">首页</a></li>
            <li><a href="">服装馆</a></li>
            <li><a href="">美妆馆</a></li>
            <li><a href="">传智超市</a></li>
            <li><a href="">全球购</a></li>
            <li><a href="../user/msginfo.php">留言板</a></li>
            <li><a href="">闪购</a></li>
            <li><a href="">有趣</a></li>
        </ul>
    </div>
    <div id="content">
        <div id="content_details">
            <h2 align=center>留言板</h2>
            <p align=center>感谢您的访问，请留下您宝贵的意见！</p>
            <div id="msg">
                <form action="../user/savemsg.php" method="post">
                    <p><input type="hidden" name="passid" value=0></p>
                    <p><span class="width">&nbsp;&nbsp;留言人：</span><input type="text" name="msguser"
                            value="<?php echo $_SESSION['username']; ?>"></p>
                    <p><span class="width">留言主题：</span><input type="text" name="subject"></p>
                    <p><span class="width">留言内容：</span><textarea rows="6" cols="50" name="msgcontent">	</textarea></p>
                    <p><input type="hidden" name="date" value='<?php echo date("Y-m-d") ?>'></p>
                    <p align="center"><input type="submit" class="width">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset"
                            class="width"></p>
                </form>
            </div>
        </div>
    </div>
    <div id="footer" align=center>
        <p>地址：北京市昌平区建材城西路金燕龙办公楼一层 邮编：100096 电话：400-618-4000 传真：010-82935100 邮箱: zhanghj+itcast.cn</p>
        <p> 京ICP备08001421号京公网安备110108007702</p>
    </div>
</body>

</html>