<?php
  $username=$_GET['username'];
  $password=$_GET['password'];
  
  $user='陆';
  $pass='666';
  
  
  if($username==$user && $password==$pass){
	  echo'登录成功';
  }else{
	  echo'登录失败';
  }
  echo '<br/>'.'用户名：'.$username.'<br/>';
  echo '密码：'.$password;