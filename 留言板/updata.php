<?
@$name=$_POST['user'];
@$content=$_POST['post_contents'];
$conn=mysql_connect("localhost", "root", "lK910213");
mysql_query("set name GB2312");
mysql_select_db("guest_book");
@$exec="insert into contents(id,name,content) values ('".$_POST[num1]."','".$_POST['user']."','".$_POST['post_contents']."')";
$result=mysql_query($exec);
if($result>0)
echo "������Գɹ���лл������ԣ�";
else 
echo "�������ʧ�ܣ������������ԣ�";
echo "<p><a href=index.php ><center>������ҳ��</center></a>";
mysql_close();
?>

<html><head><meta http-equiv='Refresh' content='20;URL=index.php'></head>
<body><p>лл���Ա�վ��֧�֣�������Զ�����......</p></body></html>