<?php
	var_dump($_GET);
	//获取出来id值
	$id=$_GET['id'];
	$username=$_GET['username'];
	$address=$_GET['address'];
	$age=$_GET['age'];
	
	$link=mysqli_connect('localhost','root','123');
	if(!$link){
		exit('数据库连接失败');
	}
	mysqli_set_charset($link,'utf8');
	mysqli_select_db($link,'bbs');
	$sql="update bbs_user set username='$username',address='$address',age='$age' where id='$id'";
	$result=mysqli_query($link,$sql);
	if($result && mysqli_affected_rows($link)){
		echo'修改成功<a href="userlist.php">返回</a>';
	}else{
		echo'修改失败';
	}
	mysqli_close($link);
