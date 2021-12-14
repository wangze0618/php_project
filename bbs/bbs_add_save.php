<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
 include("conn.php");
 $bbs_title=$_POST['bbs_title'];
 $bbs_name=$_POST['bbs_name'];
 $bbs_sex=$_POST['bbs_sex'];
 $bbs_face=$_POST['bbs_face'];
 $bbs_email=$_POST['bbs_email'];
 $bbs_url=$_POST['bbs_url'];
 $bbs_content=$_POST['bbs_content'];
 $bbs_time=$_POST['bbs_time'];
 $bbs_hits=$_POST['bbs_hits'];
 mysqli_query($conn,"insert into bbs_main (bbs_title,bbs_name,bbs_sex,bbs_face,bbs_email,bbs_url,bbs_content,bbs_time,bbs_hits) values ('$bbs_title','$bbs_name','$bbs_sex','$bbs_face','$bbs_email','$bbs_url','$bbs_content','$bbs_time','$bbs_hits')");
 echo "<script>alert('添加论坛主题成功!');history.back();</script>";
?>