<!DOCTYPE html>
<head>
<meta charset="utf-8">
<script>
window.alert = function()  
{     
confirm("哎哟 不错哦！");
 window.location.href="level3.php?writing=苦尽甘来"; 
}
</script>
<title>第2关</title>
</head>
<body>
<h1 align=center>第2关 窒息的操作</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
echo "<h2 align=center>没有找到和".htmlspecialchars($str)."相关的结果.</h2>".'<center>
<form action=level2.php method=GET>
<input name=keyword  value="'.$str.'">
<input type=submit name=submit value="搜索"/>
</form>
</center>';
?>
<center><img src="https://dn-coding-net-tweet.codehub.cn/photo/2019/688da926-8a0b-452a-9a2b-82ba919328fb.jpg"></center>
<?php 
echo "<h3 align=center>payload的长度:".strlen($str)."</h3>";
?>
</body>
</html>




