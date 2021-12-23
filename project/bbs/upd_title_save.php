<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <?php
  include("conn.php");
  $bbs_ID=$_POST['bbs_ID'];
  $bbs_title=$_POST['bbs_title'];
  $bbs_content=$_POST['bbs_content'];
  mysqli_query($conn,"update bbs_main set bbs_title='$bbs_title',bbs_content='$bbs_content' where bbs_ID='$bbs_ID'");
  echo "<script>alert('修改成功!');</script>";
header("location:admin.php");
?>