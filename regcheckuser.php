<?php
	header("Content-type:text/html;charset=utf-8");
	//1接收数据
	
	$username=$_GET["username"];
	//2、在数据库中查询
	   //1)、建立连接，并选择数据库
	   $con = mysql_connect("localhost","root","root");
	   if(!$con){
			echo "链接失败";
		}else{
			mysql_select_db("ysl",$con);
		   //2)、执行SQL语句（查询）
		   $sqlstr = "select * from informs where username='$username'";
		   $result = mysql_query($sqlStr,$con);
		   //3)、关闭连接
		   mysql_close($con);
			//3、响应结果
			//获得$result的行数
			$rows = mysql_num_rows($result);
			if($rows==0){//如果用户名不存在，可以使用，返回1.
				echo "0";	
			}else {//如果用户名存在，返回0；
				echo "0";
			}
		}
?>

