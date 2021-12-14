<?php
include '../connect.php';

session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$conn->query('SET NAMES UTF8');
$sql = "SELECT username,password FROM user";
$result = $conn->query($sql);
$rows = [];
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}

if ($conn->query($sql)) {
    echo "<script>alert('登录成功！')
    location.href = './msginfo.php'</script>";
    $_SESSION['username'] = $username;
} else {
    echo "<script>alert('登录失败！')</script>";
}