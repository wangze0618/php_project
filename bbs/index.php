<?php require_once('conn.php'); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>论坛管理系统</title>
<style type="text/css">
<!--
body {
	margin-top: 0px;
	background-color: #FFF;
}
body,td,th {
	font-family: 宋体;
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
	color: #000000;
}
.STYLE28 {
	font-size: 13px;
	color: #FFFFFF;
}
-->
</style></head>

<body>

<table width="764" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="764"><img src="images/1副本.gif" width="764" height="179" /></td>
  </tr>
  
  <tr>
    <td height="30" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="339" height="30">论坛讨论主题列表：</td>
        <td width="425"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><div align="right"><a href="bbs_add.php"><img src="images/postnew.gif" width="72" height="21" border="0" /></a>&nbsp;<a href="admin_login.php"><img src="images/Editor.gif" width="59" height="20" border="0" /></a></div></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>
     <?php
	   $sql=mysqli_query($conn,"select count(*) as total from bbs_main");
	//建立统计有计录集总数查询；
	   $info=mysqli_fetch_array($sql);
	//使用mysqli_fetch_array获取所有记录集；
	   $total=$info['total'];
	//定义变量$total值为记录集的总数；
	   if($total==0)
	   {
	     echo "本系统暂无任何数据!";
	   }
	//如果记录总数为0则显示无数据；
	   else
	   {
	   ?>
     
     <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#66CCFF" bgcolor="#FFFFFF" >
      <tr>
        <td width="5%" height="29" background="../froum/images/dow3.gif">心情</td>
        <td width="33%"> 发言主题 </td>
        <td width="12%"> 作者</td>
        <td width="13%"> 回复次数 </td>
        <td width="14%"> 最新回复时间</td>
        <td width="9%">阅读</td>
        <td width="14%">发布时间 </td>
      </tr>
      <?php
	       $pagesize=20;
		   if ($total<=$pagesize){
		      $pagecount=1;
			} 
			if(($total%$pagesize)!=0){
			   $pagecount=intval($total/$pagesize)+1;
			
			}else{
			   $pagecount=$total/$pagesize;
			
			}
			if((@ $_GET['page'])==""){
			    $page=1;
			
			}else{
			    $page=intval($_GET['page']);
			
			}
			 
             $sql1=mysqli_query($conn,"select * from bbs_main limit ".($page-1)*$pagesize.",$pagesize ");
             while($info1=mysqli_fetch_array($sql1))
		     {
		  ?>
      <tr>
        <td><img src="<?php echo $info1['bbs_face']; ?>" alt="" name=""></td>
        <td height="40"><a href="content.php?bbs_id=<?php echo $info1['bbs_ID']; ?>"><?php echo $info1['bbs_title'];?></a></td>
        <td><a href="content.php?bbs_id=<?php echo $info1['bbs_ID']; ?>"><?php echo $info1['bbs_name'];?></a></td>
        <?php
		$bbs_main_id=$info1['bbs_ID'];
        $sql2=mysqli_query($conn,"select count(bbs_main_id) as ReturnNum from bbs_ref where bbs_main_id='$bbs_main_id' ");
		$info2=mysqli_fetch_array($sql2);
		  ?>
        <td><a href="content.php?bbs_id=<?php echo $info1['bbs_ID']; ?>"><?php echo $info2['ReturnNum'];?></a></td>
        <?php
		$bbs_main_id=$info1['bbs_ID'];
        $sql3=mysqli_query($conn,"select max(bbs_ref_time) as LatesTime from bbs_ref where bbs_main_id='$bbs_main_id' ");
		$info3=mysqli_fetch_array($sql3);
		  ?>
        <td><a href="content.php?bbs_id=<?php echo $info1['bbs_ID']; ?>"><?php
				 if($info3['LatesTime']==0)
	   {
	     echo "暂时没有回复!";
	   }
				 else
	   {
				 echo $info3['LatesTime'];
	   }
			?></a></td>
        <td><a href="content.php?bbs_id=<?php echo $info1['bbs_ID']; ?>"><?php echo $info1['bbs_hits'];?></a></td>
        <td><a href="content.php?bbs_id=<?php echo $info1['bbs_ID']; ?>"><?php echo $info1['bbs_time'];?></a></td>
      </tr>
          <?php
	}	
?>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td style="text-align: right">共有主题
              <?php
		   echo $total;//显示总页数；
		  ?>
              条，每页显示&nbsp;<?php echo $pagesize;//打印每页显示的总页码；?>&nbsp;条，&nbsp;第&nbsp;<?php echo $page;//显示当前页码；?>&nbsp;页/共&nbsp;<?php echo $pagecount;//打印总页码数 ?>&nbsp;页：
<?php
		  if($page>=2)
			  //如果页码数大于等于2则执行下面程序
		  {
		  ?>
<a href="index.php?page=1" title="首页"><font face="webdings"> 9 </font></a> / <a href="index.php?id=<?php echo $id;?>&amp;page=<?php echo $page-1;?>" title="前一页"><font face="webdings"> 7 </font></a>
<?php
		  }
		   if($pagecount<=4){
			   //如果页码数小于等于4执行下面程序
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
<a href="index.php?page=<?php echo $i;?>"><?php echo $i;?></a>
<?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
<a href="index.php?page=<?php echo $i;?>"><?php echo $i;?></a>
<?php }?>
<a href="index.php?page=<?php echo $page-1;?>" title="后一页"><font face="webdings"> 8 </font></a> <a href="index.php?id=<?php echo $id;?>&amp;page=<?php echo $pagecount;?>" title="尾页"><font face="webdings"> : </font></a>
<?php }?></td>
          </tr>
        </tbody>
      </table>
      <?php
	    }	
		?>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#66CCFF" bgcolor="#FFFFFF" >
        <tr>
          <td width="100%" height="20">&nbsp;</td>
        </tr>
        <tr style="text-align: center">
          <td height="40" bgcolor="#4DAFFE"><span class="STYLE28">Copyright @ 2017 www.17skill.com Inc.All rights reserved. PHP论坛管理系统</span></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>