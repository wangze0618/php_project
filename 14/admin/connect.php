<?php
$servername='localhost';
$username='root';
$password='';
$dbname='kaoshi';


$conn=new mysqli($servername,$username,$password,$dbname);

//通过$conn验证数据库连接情况
if ($conn->connect_error){
	echo '数据库连接失败！原因是：'.$conn->connect_error;
	die();
}


?>