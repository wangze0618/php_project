<?php
session_start();
if (session_destroy()) {
    echo "<script>alert('退出成功！')
    location.href='../index.php';</script>";
}