<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册页</title>
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../css/base.css">
    <link rel="stylesheet" href="../../css/common.css">
    <link rel="stylesheet" href="../../css/register.css">
</head>

<body>
    <header class="w">
        <a href="#"><img src="../../images/logo.png" alt=""></a>
    </header>

    <div class="main w">
        <h3>
            <span>注册新用户</span>
            <span>已有账号，去<a href="#">登录</a></span>
        </h3>
        <div class="reg-form">
            <form action="./RegAccount.php" method="post">
                <ul>
                    <li><label for="telnum">账号：</label><input type="tel" name="username" id="telnum">
                        <!-- <span class="error"> <i class="error_icon"></i>手机号码不正确，请重新输入</span> -->
                    </li>


                    <li><label for="login_in">登录密码：</label><input type="password" name="password   " id="login_in">
                        <!-- <span class="error"><i class="error_icon"></i>密码不少于6位，请重新输入</span> -->
                    </li>
                    <!-- <li class="safe">
                        安全程度&nbsp;<i>弱</i>&nbsp;<i>中</i>&nbsp;<i>强</i>
                    </li>

                    <li><label for="login_in_re">确认密码：</label><input type="password" name="repsd" id="login_in_re">
                        <span class="error"><i class="error_icon"></i>密码不一致，请重新输入</span>
                    </li> -->
                    <li class="aggre">
                        <!-- <input type="checkbox" name="checkbox" id="checkbox">同意协议并注册 <a href="#">品优购用户协议</a> -->
                    </li>
                    <li class="login_li"><input type="submit" value="完成注册"></li>
                </ul>
            </form>
        </div>
    </div>
    <footer class="w">
        <div class="mod_right ">
            <div class="about ">
                <ul class="clearfix ">
                    <li><a href="# ">关于我们</a></li>
                    <li></li>
                    <li><a href="# ">联系我们</a></li>
                    <li></li>
                    <li>
                        <a href="# ">联系客服</a>
                    </li>
                    <li></li>
                    <li>
                        <a href="# ">商家入驻</a>
                    </li>
                    <li></li>
                    <li>
                        <a href="# ">营销中心</a>
                    </li>
                    <li></li>
                    <li>
                        <a href="# ">手机品优购</a>
                    </li>
                    <li></li>
                    <li>
                        <a href="# ">友情链接</a>
                    </li>
                    <li></li>
                    <li>
                        <a href="# ">销售联盟</a>
                    </li>
                    <li></li>
                    <li>
                        <a href="# ">品优购社区</a>
                    </li>
                    <li></li>
                    <li>
                        <a href="# ">品优购公益</a>
                    </li>
                    <li></li>
                    <li>
                        <a href="# ">English Site</a>
                    </li>
                    <li></li>
                    <li>
                        <a href="# ">Contact U</a>
                    </li>
                </ul>
                <p>地址：北京市昌平区建材城西路金燕龙办公楼一层 邮编：100096 电话：400-618-4000 传真：010-82935100 邮箱: zhanghj+itcast.cn</p>
                <p> 京ICP备08001421号京公网安备110108007702</p>
            </div>
        </div>
    </footer>
</body>

</html>