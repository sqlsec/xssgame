<!DOCTYPE html>
<head>
<meta charset="utf-8">
<script>
window.alert = function()  
{     
confirm("哎哟 不错哦！");
 window.location.href="level4.php?keyword=宁静致远"; 
}
</script>
<title>第3关</title>
</head>
<body>
<h1 align=center>第3关 这该咋办啊</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
echo "<h2 align=center>没有找到和".htmlspecialchars($str)."相关的结果.</h2>"."<center>
<form action=level3.php method=GET>
<input name=keyword  value='".htmlspecialchars($str)."'>
<input type=submit name=submit value=搜索 />
</form>
</center>";
?>
<center><img src="https://dn-coding-net-tweet.codehub.cn/photo/2019/ee7a688a-d75e-4ed7-8a79-96e62d3127e2.png" width="15%"></center>
<?php 
echo "<h3 align=center>payload的长度:".strlen($str)."</h3>";
?>
</body>
</html>
