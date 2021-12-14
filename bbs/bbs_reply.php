<?php
$bbs_main_ID=strval($_GET['bbs_ID']);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>论坛管理系统</title>
<style type="text/css">
<!--
body {
	margin-top: 0px;
}
body,td,th {
	font-family: 宋体;
	font-size: 12px;
}
.style18 {color: #FFFF00}
.style25 {font-size: 18px; font-weight: bold;}
a:link {
	text-decoration: none;
	color: #000000;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	color: #FF0000;
}
.STYLE29 {font-size: 14px}
.STYLE28 {	font-size: 13px;
	color: #FFFFFF;
}
-->
</style>
</head>
<body>

<table width="765" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="765"><img src="images/1副本.gif" width="764" height="179" /></td>
  </tr>
  
  
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#FFFFFF"><form action="bbs_reply_save.php" method="POST" name="form1" id="form1">
          <table width="84%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#66CCFF">

            <tr>
              <td width="10%">回复人：</td>
              <td width="90%"><input name="bbs_ref_name" type="text" id="bbs_ref_name" size="20" maxlength="10" /></td>
            </tr>
            <tr>
              <td valign="top"><div align="right">性别形象：</div></td>
              <td><label>
                <input name="bbs_ref_sex" type="radio" value="images/1.gif" checked="checked" />
                <img src="images/1.gif" width="50" height="90" />
                <input type="radio" name="bbs_ref_sex" value="images/2.gif" />
                <img src="images/2.gif" width="50" height="90" />
                <input type="radio" name="bbs_ref_sex" value="images/3.gif" />
                <img src="images/3.gif" width="50" height="90" />
                <input type="radio" name="bbs_ref_sex" value="images/4.gif" />
                <img src="images/4.gif" width="50" height="90" />
                <input type="radio" name="bbs_ref_sex" value="images/5.gif" />
                <img src="images/5.gif" width="50" height="90" />
                <input type="radio" name="bbs_ref_sex" value="images/6.gif" />
                <img src="images/6.gif" width="50" height="90" /> </label></td>
            </tr>
            <tr>
              <td><div align="right">电子邮件：</div></td>
              <td><input name="bbs_ref_email" type="text" id="bbs_ref_email" size="30" maxlength="16" /></td>
            </tr>
            <tr>
              <td><div align="right">个人主页：</div></td>
              <td><input name="bbs_ref_url" type="text" id="bbs_ref_url" size="30" maxlength="16" /></td>
            </tr>
            <tr>
              <td valign="top"><div align="right">回复内容： </div></td>
              <td><label>
                <textarea name="bbs_ref_content" cols="45" rows="8" id="bbs_ref_content"></textarea>
                <input type="hidden" name="bbs_ref_time" id="bbs_ref_time" value="<?php echo date("Y-m-d");?>">
                <input name="bbs_main_ID" type="hidden" id="bbs_main_ID" value="<?php echo $bbs_main_ID;?>">
              </label></td>
            </tr>
            <tr>
              <td colspan="2">
                <label>
                  <input name="Submit" type="submit"  value="确定提交" />
                    &nbsp;
                    <input type="reset" name="Submit2" value="重新填写" />
                </label></td>
            </tr>
          </table>
        </form>        </td>
      </tr>
      <tr style="text-align: center">
        <td height="40" bgcolor="#4DAFFE"><span style="text-align: center"></span>          <p class="STYLE28"> Copyright @ 2017 www.17skill.com Inc.All rights reserved. PHP论坛管理系统 </p></td>
      </tr>
      
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>

