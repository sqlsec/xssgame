<!DOCTYPE html>
<head>
<meta charset="utf-8">
<script src="https://chao.jsanhuan.cn/angular.min.js"></script>
<script>
window.alert = function()  
{     
confirm("哎哟 不错哦！");
 window.location.href="level15.php?keyword=业精于勤"; 
}
</script>
<title>第14关</title>
</head>
<h1 align=center>第14关 恭喜你快要通关了</h1>
<p align=center><img src="https://dn-coding-net-tweet.codehub.cn/photo/2019/54c95d0f-037b-4885-a3f4-f8a3ad5c9341.jpg" width="20%"></p>
<?php 
ini_set("display_errors", 0);
$str = $_GET["src"];
echo '<body><span class="ng-include:'.htmlspecialchars($str).'"></span></body>';
?>


