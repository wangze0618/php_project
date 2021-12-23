<?php
//连接数据库，根据实际情况修改文件名
include '../connect.php';
session_start();
//去掉php错误提示
error_reporting(E_ERROR);

// 1.统计记录数
$sql = "SELECT * FROM gbook"; //查询某表中所有记录，根据实际情况做修改表的名字
$conn->query('SET NAMES UTF8'); //设置字符编码
$result = $conn->query($sql); //执行sql语句
$count = $result->num_rows; //获取查询结果集中记录数，保存在$count中
//2.指定每页显示几条
$pageSize = 8; //此处根据实际情况修改

//3.计算总页数
$totalPage = ceil($count / $pageSize); //ceil()为向上取整函数

//4.计算当前页
if ($_GET['page']) {
    $page = $_GET['page'];
    if ($page > $totalPage) {
        $page = $totalPage;
    }
} else {
    $page = 1;
}
//5.选择对应的记录
$start = ($page - 1) * $pageSize; //计算起始位置
$sql2 = "SELECT * FROM gbook ORDER BY id desc LIMIT $start,$pageSize"; //根据实际情况修改表名
$result2 = $conn->query($sql2);
//6.将查询结果保存到数组中
$rows = [];
while ($row = $result2->fetch_assoc()) {
    $rows[] = $row;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/php/main-new.css">
    <link rel="stylesheet" href="../../css/php/msg.css">
</head>

<body>
    <div id="header">
        <a href="#"><img src="../../images/logo.png" alt="" srcset=""></a>
        <div id="yh"><span><?php echo $_SESSION['username'] ?>欢迎你</span>&nbsp;&nbsp;&nbsp;&nbsp;<a
                href="../admin/logout.php">退出登录</a>
        </div>
    </div>
    <div id="content">
        <!-- 左侧 -->
        <div id="content_left">
            <ul>
                <li><a href="">管理员管理</a></li>
                <li><a href="">用户管理</a></li>
                <li><a href="">成绩管理</a></li>
                <li><a href="../admin/msgmanage.php">留言管理</a></li>
                <li><a href="">新闻管理</a></li>
                <li><a href="">论坛管理</a></li>
            </ul>
        </div>
        <!-- 右侧 -->
        <div id="content_right">
            <div id="content_detalis">
                <h1 align=center>留言管理表</h1>
                <div align=center>
                    <table border=1 cellspacing=0 width=500px>
                        <tr>
                            <th>序号</th>
                            <th>留言人</th>
                            <th>主题</th>
                            <th>内容</th>
                            <!-- <th>操作</th> -->
                            <th>内容</th>
                            <th>操作</th>
                        </tr>

                        <?php foreach ($rows as $value) { ?>
                        <tr id="">
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['msguser'] ?></td>
                            <td><?php echo $value['subject'] ?></td>
                            <td><?php echo $value['content'] ?></td>
                            <td><?php echo $value['riqi'] ?></td>
                            <td><a href='msgreply_post.php?id=<?php echo $value['id'] ?>'>回复</a>&nbsp;&nbsp;&nbsp;<a
                                    href='msgdelete.php?id=<?php echo $value['id'] ?>'>删除</a></td>
                        </tr>
                        <?php } ?>
                        <table>
                            <br>
                            <!-- <form>
                                <p align=center><a href="cjinsert_post.html"
                                        style="display: inline-block;width: 500px;height: 30px;background-color: lightblue;text-decoration: none;line-height: 30px;color:white;">添加</a>
                                </p>
                            </form> -->
                </div>
            </div>
            <p align=center class="a-items">
                <span>第<?php echo $page ?>共<?php echo $totalPage ?>页</span>
                <a href="msgmanage.php">首页</a>
                <a href="msgmanage.php?page=<?php echo $page - 1; ?>">上一页</a>
                <a href="msgmanage.php?page=<?php echo $page + 1; ?>">下一页</a>
                <a href="msgmanage.php?page=<?php echo $totalPage; ?>">尾页</a>
            </p>

        </div>
    </div>
    <!-- 网页底部 -->
    <!-- <div id="footer">版权信息</div> -->

</body>

</html>