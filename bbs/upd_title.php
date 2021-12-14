<?php require_once('conn.php'); ?>
<?php
$bbs_ID=strval($_GET['bbs_ID']);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改讨论主题</title>
<style type="text/css">
<!--
body {
	margin-top: 0px;
}
body,td,th {
	font-family: Times New Roman, Times, serif;
	font-size: 12px;
}
.style18 {color: #FFFF00}
.style25 {font-size: 18px; font-weight: bold;}
.STYLE26 {font-size: 16px}
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
.STYLE28 {font-size: 13px;
	color: #FFFFFF;
}
-->
</style></head>

<body>

<table width="764" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="800"><img src="images/1副本.gif" width="764" height="179" /></td>
  </tr>
</table>
<table width="764" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td height="30"><form method="POST" action="upd_title_save.php" id="form1" name="form1">
     <?php
	$sql=mysqli_query($conn,"select * from bbs_main where bbs_ID='$bbs_ID' ");
	$info=mysqli_fetch_array($sql);
		?>
      <table width="500" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#66CCFF">
        <tr>
          <td height="25" colspan="2">确定修改此标题和内容： </td>
          </tr>
        <tr>
          <td width="17%" height="25">标题：</td>
          <td width="83%"><label>
            <input name="bbs_title" type="text" id="bbs_title" value="<?php echo $info['bbs_title']; ?>" />
          </label></td>
        </tr>
        <tr>
          <td height="25">内容：</td>
          <td><label>
            <textarea name="bbs_content" cols="45" rows="8" id="bbs_content"><?php echo $info['bbs_content']; ?></textarea>
            <input name="bbs_ID" type="hidden" id="bbs_ID" value="<?php echo $info['bbs_ID']; ?>">
          </label></td>
        </tr>
        <tr>
          <td height="25" colspan="2"><label>
            <input type="submit" name="Submit" value="确定修改" />
          </label></td>
          </tr>
      </table>
    </form>
    </td>
  </tr>
  <tr style="text-align: center">
    <td height="40" bgcolor="#4DAFFE"><p><span class="STYLE28"> Copyright @ 2017 www.17skill.com Inc.All rights reserved. PHP论坛管理系统 </span></p></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
