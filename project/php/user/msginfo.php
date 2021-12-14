<?php
include '../connect.php';
error_reporting(E_ERROR);
$sql1 = "SELECT * FROM gbook";
$conn->query('SET NAMES UTF8');
$result1 = $conn->query($sql1);

// 计算数据总个数
$count = $result1->num_rows;

// 每页显示几条数据
$pageSize = 6;

// 总页数
$totalPage = ceil($count / $pageSize);

// 计算当前页
if ($_GET['page']) {
    $page = $_GET['page'];
    if ($page > $totalPage) {
        $page = $totalPage;
    }
} else {
    $page = 1;
}

// 选择对应的记录
$start = ($page - 1) * $pageSize;
$sql2 = "SELECT * FROM gbook ORDER BY id DESC LIMIT {$start},{$pageSize}";
$result2 = $conn->query($sql2);
$rows = [];
while ($row = $result2->fetch_assoc()) {
    $rows[] = $row;
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../../css/php_css/main.css">
    <link rel="stylesheet" href="../../css/php_css/bookinfo.css">
    <link rel="stylesheet" href="../../css/php_css/mainbox.css">
</head>

<body>
    <!-- <div id="header"></div> -->
    <div id="nav">
        <ul>
            <li><a href="../index.php">首页</a></li>
            <li><a href="">服装馆</a></li>
            <li><a href="">美妆馆</a></li>
            <li><a href="">传智超市</a></li>
            <li><a href="">全球购</a></li>
            <li><a href="./msginfo.php">留言板</a></li>
            <li><a href="">闪购</a></li>
            <li><a href="">团购</a></li>
            <li><a href="">有趣</a></li>
            <li><a href="">关于我们</a></li>
        </ul>
    </div>
    <div id="content">
        <div id="content_details">
            <h2 align=center>留言板</h2>
            <p align=center>如果你有什么问题需要咨询的话，请单击<a href="./leavemsg.php">留言</a>给我留言，我们会第一时间给你答复。</p>
            <?php foreach ($rows as $value) { ?>
            <div class="msg">
                <div class="msg_person">&nbsp;留言人&nbsp; &nbsp;：<?php echo $value['msguser'] ?></div>
                <div class="msg_time">&nbsp;留言时间：<?php echo $value['riqi'] ?></div>
                <div class="msg_content">&nbsp;留言主题：<?php echo $value['subject'] ?></div>
                <div class="msg_content">&nbsp;留言内容：<?php echo $value['content'] ?></div>
                <div class="msg_reply"> &nbsp;留言回复：<?php if (!$value['reply']) {
                                                            echo '尚未回复，等待管理员回复';
                                                        } else {
                                                            echo $value['reply'];
                                                        } ?></div>
            </div>
            <?php } ?>
        </div>
        <p align=center class="a-items">
            <span>第<?php echo $page ?>共<?php echo $totalPage ?>页</span>
            <a href="msginfo.php">首页</a>
            <a href="msginfo.php?page=<?php echo $page - 1; ?>">上一页</a>
            <a href="msginfo.php?page=<?php echo $page + 1; ?>">下一页</a>
            <a href="msginfo.php?page=<?php echo $totalPage; ?>">尾页</a>
        </p>
    </div>
</body>

</html>