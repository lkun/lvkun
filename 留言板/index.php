<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>留言本</title>
</head>
<body>
<div align="right"><a href="admin_login.html" tagert="_blank" >
<font size="+1" face="隶书" >留言板管理</font></a>
</div>
<div align="center"><font face="黑体"><h2>PHP学习交流留言板</h2></font>
</div>
<?
$conn=mysql_connect ("localhost", "root", "lK910213");
mysql_select_db("guest_book");
mysql_query("set name GB2312");

$pageSize = 2;
@$pageNumber = $_GET[ 'pageNumber' ];
if( $pageNumber == null )$pageNumber = 1;
$rs =mysql_fetch_row( mysql_query("select count(*) from contents"));
$totalCount = $rs[ 0 ];

$exec="select * from contents limit " . ( ($pageNumber - 1) * $pageSize ) . ", 2" ;

$result=mysql_query($exec);
while($rs=mysql_fetch_object($result))
{
	echo "<table><tr><td>留言者账号:".$rs->id."</td></tr>";
	echo "<tr><td>姓名:".$rs->name."</td></tr>";
	echo "<tr><td>留言:".$rs->content."</td></tr></table><br/>";
	echo ".................................................................";
	echo "<br />";
}
if ($pageNumber >1)
{
	echo "<a href=index.php?pageNumber=" .( $pageNumber -1 ) . ">前一页&nbsp&nbsp</a>";
}else{
	echo "前一页&nbsp&nbsp";
}
if( $pageNumber < $totalCount / $pageSize )
{
	echo "<a href=index.php?pageNumber=" . ($pageNumber + 1 ) . ">后一页</a>";
}else
{
	echo "后一页";
}
mysql_close();
?>

<div align="CENTER"><a href="message_post.html" tagert="_blank" >
<font size="+2" face="隶书" ><p>我要留言</font></a>
</div>
</body>
</html>