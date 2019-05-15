<?php
	//得到你要添加的数据
	$username=$_GET['username'];
	$password=md5($_GET['password']);
	$address=$_GET['address'];
	$age=$_GET['age'];
	$sex=$_GET['sex'];
	//var_dump($_GET);
	$link=mysqli_connect('localhost','root','123');
	if(!$link){
		exit('数据库连接失败');
	}
	mysqli_set_charset($link,'utf8');
	mysqli_select_db($link,'bbs');
	$sql="insert into bbs_user(username,password,address,sex,age) values('$username','$password','$address',$sex,$age)";
	$result=mysqli_query($link,$sql);
	$id=mysqli_insert_id($link);
	if($id){
		echo'添加成功<a href="userlist.php">返回首页</a>';
	}else{
		echo'添加失败';
	}
	mysqli_close($link);