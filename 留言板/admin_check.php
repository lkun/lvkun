<?php
session_start();
require_once('conn.php');  
$admin_name = $_POST['admin_name']; 
$admin_password = $_POST['admin_password']; 
$sql = "select * from admin where admin_name='".$admin_name."'";
$result = mysql_query($sql);
$num = mysql_num_rows($result); 
if (strrpos($admin_name,"<")!==false || strrpos($admin_name,">")!==false||strrpos($admin_name,"@")!==false||strrpos($admin_name,"\"")!==false||strrpos($admin_name,"'")!==false||strrpos($admin_name,"_")!==false)	{  
		echo "<script>alert('�����������ַ���');location.href='admin_login.html';</script>";
		} 
		if($num)
			{//����û����ڣ��ͼ�������Ƿ���ȷ  
			$rs = mysql_fetch_array($result);  
			if($rs[2]!=$admin_password)   
				{        
				echo "<script>alert('���벻��ȷ����ȷ�Ϻ����룡');location.href='admin_login.html';</script>"; 
				}    
				else     
					{//�û��������붼��ȷ��ע��SESSION������Ȼ����ת����ҳ    
				$_SESSION["key"]=1;      
				echo "<script>alert('��¼�ɹ���');location.href='index.php';</script>";   
				}
				}
				else 
					{//���û������û� 
				echo "<script>alert('û������û�����ȷ�Ϻ����룡');location.href='admin_login.html';</script>";
				}
				?>  