<?php
//配置文件常量声明
session_start();
switch($_GET['a'])
        {
		   case 'login'://登录操作
		   $name=$_POST['username'];//接收传过来的信息
		   $pwd=$_POST['pwd'];
		  
		  include("conn.php");
		  //4.定义sql语句并执行
		  $sql="select * from users where name={$name}";
		  $result=mysql_query($sql);
		  if(mysql_num_rows($result)>0){
			$user=mysql_fetch_assoc($result);
			if($user['pwd']==$pwd){
				//将登录信息存到session里
				$_SESSION['adminuser']=$user;
			header("Location:main.php");
			}
			else{
			header("Location:login.php");
			}
			}else{
			header("Location:login.php");
			}
			break;
			
			case 'logout'://注销
			unset($_SESSION['adminuer']);//移除登录信息（释放）
			header('Location:login.php');
			break;
	    }
?>