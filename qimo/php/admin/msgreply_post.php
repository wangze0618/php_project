<?php
include '../connect.php';
session_start();
$id = $_GET['id'];

$sql = "SELECT * FROM gbook WHERE id='$id'";
$result = $conn->query($sql);
$rows = [];
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="../../css/php/main-new.css">
    <link rel="stylesheet" href="../../css/php/msgreply_post.css">
</head>

<body>
    <div id="header">
        <a href="../index.php"><img src="../../images/logo.png" alt=""></a>
        <div id="yh"><span><?php echo $_SESSION['username'] ?>欢迎你</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">退出登录</a>
        </div>
    </div>
    <div id="content">
        <div id="content_left">
            <ul>
                <li><a href="">管理员管理</a></li>
                <li><a href="">用户管理</a></li>
                <li><a href="msgmanage.php">成绩管理</a></li>
                <li><a href="">留言管理</a></li>
                <li><a href="">新闻管理</a></li>
                <li><a href="">论坛管理</a></li>
            </ul>
        </div>
        <div id="content_right">
            <div id="content_detalis">
                <h1 align=center>留言回复</h1>
                <div>
                    <form action="msgreply.php" method="post">
                        <ul id="main">
                            <li>
                                <input type="hidden" name="id" value=<?php echo $rows[0]['id'] ?>>
                            </li>
                            <li><span>留言信息状态：</span><input type="text" name="passid" readonly
                                    value=<?php echo $rows[0]['passid'] ?>>
                            </li>
                            <li><span>留言人：</span><input type="text" name="msguser" readonly
                                    value=<?php echo $rows[0]['msguser'] ?>>
                            </li>
                            <li><span>主题：</span><input type="text" name="subject" readonly
                                    value=<?php echo $rows[0]['subject'] ?>>
                            </li>
                            <li><span>内容：</span><textarea align=left name="content" cols="50" rows="6"
                                    readonly><?php echo $rows[0]['content'] ?></textarea>
                            <li><span>时间：</span><input type="text" name="riqi" readonly
                                    value=<?php echo $rows[0]['riqi'] ?>></li>
                            <li><span>回复内容：</span><textarea name="reply" cols="50"
                                    rows="6"><?php echo $rows[0]['reply'] ?></textarea>
                            <li><span>回复时间：</span><input type="text" name="redate" readonly
                                    value=<?php echo date("Y-m-d") ?>></li>
                            <li><input type="submit" name="update" value="修改"></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="footer">
        <p>如有问题，请联系在线客服。工作时间：9:00-21:00</p>
        <p>copyright©2010-2021 诺心lecake.com版权所有 诺心食品（上海）有限公司 沪ICP备10211730号 沪公网安备31010402003364号</p>
    </div>

</body>

</html>