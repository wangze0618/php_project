<?php

include './connect.php';

$select_sql = "SELECT * FROM chengji";
$result = $conn->query($select_sql);

$new_arr = [];
while ($arr = $result->fetch_assoc()) {
    array_push($new_arr, $arr);
}

?>

<html>

<body>
    <h1 align=center>成绩表</h1>
    <table border=1 cellspacing=0 width="600px" align=center>
        <tr>
            <th>序号</th>
            <th>考号</th>
            <th>姓名</th>
            <th>成绩</th>
            <th>照片</th>
            <th>操作</th>
        </tr>

        <?php foreach ($new_arr as $rows) { ?>
        <tr>
            <td><?php echo $rows['id'] ?></td>
            <td><?php echo $rows['kaoshi'] ?></td>
            <td><?php echo $rows['xm'] ?></td>
            <td><?php echo $rows['cj'] ?></td>
            <td><?php echo $rows['zhaopian'] ?></td>
            <td><a href="updatePost.php?id=<?php echo $rows['id'] ?>" target=_blank>编辑</a>&nbsp;&nbsp;&nbsp;<a
                    href="delete.php?id=<?php echo $rows['id'] ?>">删除</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <p align=center><a href=" ./12-1.html">添加</a></p>
</body>

</html>