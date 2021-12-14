<?php
include './connect.php';
$id = $_GET['id'];

$select_sql = "SELECT * FROM chengji WHERE id=$id";
$result = $conn->query($select_sql);

$new_arr = [];
while ($arr = $result->fetch_assoc()) {
    array_push($new_arr, $arr);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 align=center>修改考生成绩</h1>
    <div align=center>
        <form action="update.php" method="post">
            <p>序号：<input type="text" readonly name="id" value="<?php echo $new_arr[0]['id'] ?>"></p>
            <p>考号：<input type="text" name="kaohao" value="<?php echo $new_arr[0]['kaoshi'] ?>"></p>
            <p>姓名：<input type="text" name="xm" value="<?php echo $new_arr[0]['xm'] ?>"></p>
            <p>成绩：<input type="text" name="cj" value="<?php echo $new_arr[0]['cj'] ?>"></p>
            <p>照片：<input type="text" name="photo" value="<?php echo $new_arr[0]['zhaopian'] ?>"></p>
            <p><input type="submit" name="" value="修改"></p>
        </form>
    </div>
</body>

</html>