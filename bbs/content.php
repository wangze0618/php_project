<?php require_once('conn.php'); ?>
<?php
$bbs_ID=strval($_GET['bbs_id']);	
mysqli_query($conn,"UPDATE bbs_main SET bbs_hits = bbs_hits + 1 WHERE bbs_ID = '".$bbs_ID."'");
//阅读时首先要将阅读数增加1，即bbs_hits自动增加1。
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
	font-family: Times New Roman, Times, serif;
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
.STYLE28 {	font-size: 13px;
	color: #FFFFFF;
}
.STYLE29 {
	color: #990000;
	font-size: 14px;
}
.STYLE26 {font-size: 16px}
-->
</style></head>
<body>
<table width="764" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="764"><img src="images/1副本.gif" width="764" height="179" /></td>
  </tr>
  
  <tr>
    <td height="30" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="572" height="30"><table width="99%" height="30" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
          <tr>
            <?php 
		$sql2=mysqli_query($conn,"select * from bbs_main where bbs_ID=$bbs_ID ");
		$info2=mysqli_fetch_array($sql2);
			?>
            <td valign="middle"><span class="STYLE29">
             
              讨论主题：<?php echo $info2['bbs_title']; ?>&nbsp;</span></td>
            </tr>
        </table></td>
        <td width="192">&nbsp;<a href="bbs_add.php"><img src="images/postnew.gif" width="72" height="21" /></a>&nbsp;&nbsp;&nbsp; &nbsp;<a href="admin_login.php"><img src="images/Editor.gif" width="59" height="20" /></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>
     
     <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td><table width="100%" border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
          <tr>
            <td width="168" rowspan="2" bgcolor="#FFFFFF" valign="top"><p align="center">&nbsp;</p>
                <p align="center"><img src="<?php echo $info2['bbs_sex']; ?>" alt="" width="60" height="100"></p>
                <p align="center"> 发表人：<?php echo $info2['bbs_name']; ?></p></td>
            <td width="588" height="120" bgcolor="#FFFFFF">主题内容：<?php echo $info2['bbs_content']; ?></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;<img src="images/email.gif" width="16" height="16" />&nbsp; <a href="mailto:<?php echo $info2['bbs_email']; ?>">电子邮件</a> &nbsp;<img src="images/home.gif" width="16" height="16" />&nbsp; <a href="http://<?php echo $info2['bbs_url']; ?>">主页</a>&nbsp;&nbsp; <img src="images/write.gif" width="16" height="16" /><a href="bbs_reply.php?bbs_ID=<?php echo $info2['bbs_ID']; ?>">回复主题</a></td>
          </tr>
      </table></td>
      </tr>
     
      <tr>
        <td>
             <?php
	   $sql=mysqli_query($conn,"select count(*) as total from bbs_ref where bbs_main_ID=$bbs_ID");
	//建立统计有计录集总数查询；
	   $info=mysqli_fetch_array($sql);
	//使用mysqli_fetch_array获取所有记录集；
	   $total=$info['total'];
	//定义变量$total值为记录集的总数；
	   if($total==0)
	   {
	     echo "本系统暂无任何回复!";
	   }
	//如果记录总数为0则显示无数据；
	   else
	   {
	   ?>  
             <?php
 
	       $pagesize=5;
		   //设置每页显示5条记录；
		   if ($total<=$pagesize){
		      $pagecount=1;
			   //定义$pagecount初使变量为1页；
			} 
			if(($total%$pagesize)!=0){
			   $pagecount=intval($total/$pagesize)+1;
			//取页面统计总数为整数；
			}else{
			   $pagecount=$total/$pagesize;
			
			}
			if((@ $_GET['page'])==""){
			    $page=1;
			//如果总数小于5则页码显示为1页；
			}else{
			    $page=intval($_GET['page']);
			//如果大于5条则显示实际的总数；
			}
			 
  $sql1=mysqli_query($conn,"select * from bbs_ref where bbs_main_ID=$bbs_ID limit ".($page-1)*$pagesize.",$pagesize ");
		   //设置bbs_ref数据表按ID升序排序查询出所有数据；
    while($info1=mysqli_fetch_array($sql1))
		//使用mysqli_fetch_array查询所有记录集，并定义为$info1;
 {
?> 
           
        
            <table width="100%" border="1" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="170" rowspan="2" bgcolor="#FFFFFF" valign="top"><p align="center">&nbsp;</p>
                    <p align="center"><img src="<?php echo $info1['bbs_ref_sex']; ?>" alt="" width="60" height="100">&nbsp;&nbsp;&nbsp; </p>
                    <p align="center">回复人：<?php echo $info1['bbs_ref_name']; ?></p></td>
                  <td width="587" height="120" bgcolor="#FFFFFF">回复内容：<?php echo $info1['bbs_ref_content']; ?></td>
                </tr>
                <tr>
                  <td height="25" bgcolor="#FFFFFF">&nbsp;&nbsp; <img src="images/11.gif" width="16" height="15" />&nbsp;&nbsp;<?php echo $info1['bbs_ref_time']; ?>&nbsp;<img src="images/email.gif" width="16" height="16" />&nbsp;&nbsp;&nbsp; <a href="mailto:<?php echo $info1['bbs_ref_email']; ?>">电子邮件</a> &nbsp;<img src="images/home.gif" width="16" height="16" />&nbsp;<a href="http://<?php echo $info1['bbs_ref_url']; ?>"> 主页</a></td>
                </tr>
              </table>
               <?php
	}	
?>
               <table width="100%" border="0" cellspacing="0" cellpadding="0">
                 <tbody>
                   <tr>
                     <td>共有回复 
                       <?php
		   echo $total;//显示总页数；
		  ?>
&nbsp;条，每页显示&nbsp;<?php echo $pagesize;//打印每页显示的总页码；?>&nbsp;条，&nbsp;第&nbsp;<?php echo $page;//显示当前页码；?>&nbsp;页/共&nbsp;<?php echo $pagecount;//打印总页码数 ?>&nbsp;页：
<?php
		  if($page>=2)
			  //如果页码数大于等于2则执行下面程序
		  {
		  ?>
<a href="content.php?page=1" title="首页"><font face="webdings"> 9 </font></a> / <a href="content.php?id=<?php echo $id;?>&amp;page=<?php echo $page-1;?>" title="前一页"><font face="webdings"> 7 </font></a>
<?php
		  }
		   if($pagecount<=4){
			   //如果页码数小于等于4执行下面程序
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
<a href="content.php?page=<?php echo $i;?>"><?php echo $i;?></a>
<?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
<a href="content.php?page=<?php echo $i;?>"><?php echo $i;?></a>
<?php }?>
<a href="content.php?page=<?php echo $page-1;?>" title="后一页"><font face="webdings"> 8 </font></a> <a href="content.php?id=<?php echo $id;?>&amp;page=<?php echo $pagecount;?>" title="尾页"><font face="webdings"> : </font></a>
<?php }?></td>
                   </tr>
                 </tbody>
              </table></td>
      </tr>
      
    </table>
    
    <?php
	 }
		?>
    
    </td>
  </tr>
</table>
<table width="764" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td width="749" height="1">&nbsp;</td>
  </tr>
  
  
  <tr>
    <td height="40" bgcolor="#4DAFFE"><p style="text-align: center"><span class="STYLE28"> Copyright @ 2017 www.17skill.com Inc.All rights reserved. PHP论坛管理系统 </span></p>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>