<?
session_start();
if($_SESSION['admin']=="OK")
{
$conn=mysql_connect ("localhost","root","lK910213");
	mysql_query("set names GB2312");
	mysql_select_db("guest_book");
	$exec="delete * from contents where id=".$_GET['id'];
	mysql_query($exec);
	mysql_close();
}

header("location:admin_index.php");
?>