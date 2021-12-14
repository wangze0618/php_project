<?php
include '../connect.php';
session_start();


// if (!$_SESSION['username']) {
//     echo "<script>
//     alert('欢迎回来！')
//     location.href='./msgmannage.php'
//     </script>";
// }


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>品优购-登录</title>
    <link rel="stylesheet" href="../../css/base.css">
    <link rel="stylesheet" href="../../css/common.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
</head>

<body>
    <header class="w">
        <a href="../index.php"><img src="../../images/logo.png" alt=""></a>
    </header>
    <div class="login-bar w">
        <h3>管理员登陆</h3>
    </div>
    <div class="main-login w">
        <div class="login-img">
            <a href="#"><img src="../../images/pinpai.png" alt=""></a>
        </div>
        <div class="login-main">
            <form action="./cklogin.php" method="post">
                <ul>
                    <li>
                        <label for="login-id">
                            账号：
                            <input type="text" name="login-id" id="login-id">
                        </label>
                    </li>
                    <li>
                        <label for="login-pwd">
                            密码：
                            <input type="password" name="login-pwd" id="login-pwd">
                        </label>
                    </li>
                    <!-- <li>
                        <label for="">
                            手机验证码：
                            <input type="text" name="yzm" id="yzm">
                        </label>
                    </li> -->
                    <li>
                        <input type="submit" value="登录">
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>

</html>