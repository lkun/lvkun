<?php
session_start();
require_once('conn.php');  
$admin_name = $_POST['admin_name']; 
$admin_password = $_POST['admin_password']; 
$sql = "select * from admin where admin_name='".$admin_name."'";
$result = mysql_query($sql);
$num = mysql_num_rows($result); 
if (strrpos($admin_name,"<")!==false || strrpos($admin_name,">")!==false||strrpos($admin_name,"@")!==false||strrpos($admin_name,"\"")!==false||strrpos($admin_name,"'")!==false||strrpos($admin_name,"_")!==false)	{  
		echo "<script>alert('不能有特殊字符！');location.href='admin_login.html';</script>";
		} 
		if($num)
			{//如果用户存在，就检查密码是否正确  
			$rs = mysql_fetch_array($result);  
			if($rs[2]!=$admin_password)   
				{        
				echo "<script>alert('密码不正确，请确认后输入！');location.href='admin_login.html';</script>"; 
				}    
				else     
					{//用户名，密码都正确，注册SESSION变量，然后跳转到首页    
				$_SESSION["key"]=1;      
				echo "<script>alert('登录成功！');location.href='index.php';</script>";   
				}
				}
				else 
					{//如果没有这个用户 
				echo "<script>alert('没有这个用户，请确认后输入！');location.href='admin_login.html';</script>";
				}
				?>  