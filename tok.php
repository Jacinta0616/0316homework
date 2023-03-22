<?php
session_start();
?>
<html>
<head>
<title></title>
<meta charset="utf-8">
</head>
<body>
<?php
echo $_SESSION["login"];
?>
老師您好!!!!!<br/>
如要進入學生網頁請<a href=sok.php>點選這裡</a><br/>
<a href=logout.php>回主畫面</a>    
</body>
</html>