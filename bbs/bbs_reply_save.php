<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
 include("conn.php");
 $bbs_main_ID=$_POST['bbs_main_ID'];
 $bbs_ref_name=$_POST['bbs_ref_name'];
 $bbs_ref_sex=$_POST['bbs_ref_sex'];
 $bbs_ref_email=$_POST['bbs_ref_email'];
 $bbs_ref_url=$_POST['bbs_ref_url'];
 $bbs_ref_content=$_POST['bbs_ref_content'];
 $bbs_ref_time=$_POST['bbs_ref_time'];
 mysqli_query($conn,"insert into bbs_ref (bbs_main_ID,bbs_ref_name,bbs_ref_sex,bbs_ref_email,bbs_ref_url,bbs_ref_content,bbs_ref_time) values ('$bbs_main_ID','$bbs_ref_name','$bbs_ref_sex','$bbs_ref_email','$bbs_ref_url','$bbs_ref_content','$bbs_ref_time')");
 echo "<script>alert('回复主题成功!');window.location.href='index.php';</script>";
?>