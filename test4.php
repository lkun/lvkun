<html>
   <head>
       <title> 安排表 </title>
   </head>
      <body>
<?php 
     for( $d=1;$d<=7;$d++){
          echo "\$d= $d <br>";
          switch($d){
          case 1:
          echo "今天是星期一";
     break;
          case 2:
          echo "今天是星期二";
     break;
          case 3:
          echo "今天是星期三";
     break;
          case 4:
          echo "今天是星期四";
     break;
          case 5:
          echo "今天是星期五";
     break;
          default:
          echo "今天休息";
}
          echo "<hr width=300 align=left><br>";
}
?>
</body>
</html>