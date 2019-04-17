<!DOCTYPE html>
<head>
<meta charset="utf-8">
<script>
window.alert = function()  
{     
confirm("哎哟 不错哦！");
 window.location.href="level5.php?keyword=逆水行舟"; 
}
</script>
<title>第4关</title>
</head>
<body>
<h1 align=center>第4关 生无可恋</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
$str2=str_replace(">","",$str);
$str3=str_replace("<","",$str2);
echo "<h2 align=center>没有找到和".htmlspecialchars($str)."相关的结果.</h2>".'<center>
<form action=level4.php method=GET>
<input name=keyword  value="'.$str3.'">
<input type=submit name=submit value=搜索 />
</form>
</center>';
?>
<center><img src="https://dn-coding-net-tweet.codehub.cn/photo/2019/0d3f0d24-a861-4d20-97da-f807ea842be8.jpg"></center>
<?php 
echo "<h3 align=center>payload的长度:".strlen($str3)."</h3>";
?>
</body>
</html>


