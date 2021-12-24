<?php require_once('conn.php'); ?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>管理者登录</title>
    <link rel="stylesheet" href="./css/admin_login.css">
    <style type="text/css">
    .STYLE3 {
        font-size: 14px
    }

    .STYLE1 {
        font-size: 16px
    }
    </style>
</head>

<body>
    <form id="form1" name="form1" method="POST" action="./chkadmin.php">
        <table width="294" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#98AC31" rules="none">
            <tr align="center">
                <td colspan="2">论坛后台管理<span class="STYLE1">登录页面</span></td>
            </tr>
            <tr>
                <td width="75">管理账号：</td>
                <td width="213"><label>
                        <input name="username" type="text" id="username" />
                    </label></td>
            </tr>
            <tr>
                <td>管理密码：</td>
                <td><input name="password" type="password" id="password" /></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>
                        <input type="submit" value="提交" />
                        <input type="reset" name="Submit2" value="重置" />
                    </label></td>
            </tr>
        </table>
    </form>
</body>

</html>