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
同學您好!!!!!<br/>
<a href=logout.php>回主畫面</a>    
</body>
</html>