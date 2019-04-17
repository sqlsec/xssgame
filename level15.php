<!DOCTYPE html>
<head>
<meta charset="utf-8">
<script>
window.alert = function()  
{     
confirm("ORZ ORZ ORZ 恭喜全部通过");
 window.location.href="success.txt"; 
}
</script>
<title>第15关</title>
</head>
<body>
<h1 align=center>第15关 厉害了 Word哥</h1>
<?php 
ini_set("display_errors", 0);
$str = strtolower($_GET["keyword"]);
$str2=str_replace("script","&nbsp;",$str);
$str3=str_replace(" ","&nbsp;",$str2);
$str4=str_replace("/","&nbsp;",$str3);
$str5=str_replace("	","&nbsp;",$str4);
echo "<center>".$str5."</center>";
?>
<center><img src="https://dn-coding-net-tweet.codehub.cn/photo/2019/9ec67d16-a8b9-41cd-82fa-14b0c0f96e72.gif"</center>
<?php 
echo "<h3 align=center>payload的长度:".strlen($str5)."</h3>";
?>
</body>
</html>

