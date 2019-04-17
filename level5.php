<!DOCTYPE html>
<head>
<meta charset="utf-8">
<script>
window.alert = function()  
{     
confirm("哎哟 不错哦！");
 window.location.href="level6.php?keyword=柳暗花明"; 
}
</script>
<title>第5关</title>
</head>
<body>
<h1 align=center>第5关 没错又是搜索</h1>
<?php 
ini_set("display_errors", 0);
$str = strtolower($_GET["keyword"]);
$str2=str_replace("<script","<scr_ipt",$str);
$str3=str_replace("on","o_n",$str2);
echo "<h2 align=center>没有找到和".htmlspecialchars($str)."相关的结果.</h2>".'<center>
<form action=level5.php method=GET>
<input name=keyword  value="'.$str3.'">
<input type=submit name=submit value=搜索 />
</form>
</center>';
?>
<center><img src="https://dn-coding-net-tweet.codehub.cn/photo/2019/cb30e912-eabc-4357-89eb-49e8de1b1961.jpg"></center>
<?php 
echo "<h3 align=center>payload的长度:".strlen($str3)."</h3>";
?>
</body>
</html>

