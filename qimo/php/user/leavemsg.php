<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../../css/php/main-new.css">
    <link rel="stylesheet" href="../../css/php/bookinfo.css">
    <link rel="stylesheet" href="../../css/php/mainbox.css">
    <link rel="stylesheet" href="../../css/php/leavemsg.css">
</head>

<body>
    <div id="header"><img src="../../img/logo.png " alt="" srcset=""></div>
    <div id="nav">
        <ul class='flexbox'>
            <li><a href="../../index.php">蛋糕小超市</a></li>
            <li><a href="">线下店铺</a></li>
            <li><a href="">店铺地图</a></li>
            <li><a href="">关于我们</a></li>
            <li><a href="">登录</a></li>
            <li><a href="">注册</a></li>
            <!-- <li><a href="../user/msginfo.php">留言板</a></li> -->
        </ul>
    </div>

    <div id="content">
        <div id="content_details">
            <h2 align=center>留言板</h2>
            <p align=center>感谢您的访问，请留下您宝贵的意见！</p>
            <div id="msg">
                <form action="../user/savemsg.php" method="post">
                    <p><input type="hidden" name="passid" value=0></p>
                    <p><span class="width">&nbsp;&nbsp;留言人：</span><input type="text" name="msguser"></p>
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
        <p>copyright©2010-2021 诺心lecake.com版权所有 诺心食品（上海）有限公司 沪ICP备10211730号 沪公网安备31010402003364号</p>
    </div>
</body>

</html>