<!DOCTYPE html>
<head>
<meta charset="utf-8">
<script>
window.alert = function()  
{     
confirm("哎哟 不错哦！");
window.location.href="level2.php?keyword=跨站师"; 
}
</script>
<title>第1关</title>
</head>
<body>
<h1 align=center>第1关 先热个身吧</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["name"];
echo "<h2 align=center>欢迎用户:".$str."</h2>";
?>
<center><img src="https://dn-coding-net-tweet.codehub.cn/photo/2019/8deed969-b339-4c84-8654-b1a1e40e06de.png" width="50%"></center>
<?php 
echo "<h3 align=center>payload的长度:".strlen($str)."</h3>";
?>
</body>
</html>




