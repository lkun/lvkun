<?
session_start();
if($_SESSION['admin']=="OK")
{
$conn=mysql_connect ("localhost","root","lK910213");
	mysql_query("set names GB2312");
	mysql_select_db("guest_book");
	$exec="select * from contents where id=".$_GET['id'];
	$exec="updata contents set content='".$_POST['post_contents']."' where id=".$_POST['id'];
	$result=mysql_query($exec);
}
mysql_close();
header("location:admin_index.php");
?>