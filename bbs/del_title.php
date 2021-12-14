<?php require_once('conn.php'); ?>
<?php
//从bbs_main表中删除讨论主题
$bbs_ID=strval($_GET['bbs_ID']);
echo $bbs_ID;
 mysqli_query($conn,"delete from bbs_main where bbs_ID='$bbs_ID'");
//从bbs_ref表中删除回复主题
$bbs_main_ID=strval($_GET['bbs_ID']);
echo $bbs_main_ID;
 mysqli_query($conn,"delete from bbs_ref where bbs_main_ID='$bbs_ID'");

echo "<script>alert('删除主题成功!');window.location.href='index.php';</script>";
?>
