<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录</title>
    <link rel="stylesheet" href="../../css/base.css">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/login.css">

</head>

<body>
    <!-- nav模块 -->
    <div class="nav">
        <div class="nav-content w clearfix">
            <a href="javascript:;">
                <img src="../../img/logo.png" alt="">
            </a>
            <h3>小熊蛋糕店</h3>
            <ul class="nav-ul">
                <li><a href="#">蛋糕小超市</a></li>
                <li><a href="#">线下店铺</a></li>
                <li><a href="#">店铺地图</a></li>
                <li><a href="#">合作专区</a></li>
                <li><a href="#">关于我们</a></li>
            </ul>
        </div>
    </div>

    <div class="register w">
        <form action="./ckyreg.php" method='post'>
            <h3>注册</h3>
            <ul>
                <li>
                    <input type="text" name='username' placeholder="账号">
                </li>
                <li>
                    <input type="text" name='password' placeholder="密码">
                </li>
              
                <li>
                   <input type="submit" value="登录">
                </li>
            </ul>
        </form>
    </div>
</body>

</html>