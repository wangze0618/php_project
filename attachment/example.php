<?php
//将查询结果保存到一个数组变量中
$rows=[
		['coursename'=>'电子商务安全','score'=>95],
		['coursename'=>'高级程序设计','score'=>96],
		['coursename'=>'统计学','score'=>90],
		['coursename'=>'供应链','score'=>91],
		['coursename'=>'系统分析与设计','score'=>96]
]
?>
<html>
   <body>
   <h1 align=center>成绩表</h1>
   	<table border=1 cellspacing=0 width="600px" align=center>
   		<tr><th>课程名称</th><th>成绩</th><th>操作</th></tr>
   		<?php foreach($rows as $value){ ?>
   			<tr><td><?php echo $value['coursename']?></td><td><?php echo $value['score'] ?></td><td><a href="">编辑</a>&nbsp;&nbsp;&nbsp;<a href="">删除</a></td></tr>
   		<?php } ?>
   		
   	</table>
   </body>
</html>