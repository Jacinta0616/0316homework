<?php
session_start();

$PID="principal";
$ppassword="1234567890";
$TID="teacher";
$tpassword="12345";
$SID="student";
$spassword="123";


$ID=$_POST["ID"];
$password=$_POST["password"];

if(($PID==$ID)&&($ppassword==$password)){
    $_SESSION["login"]="P_Yes";
    header("Location:pok.php");
}elseif(($TID==$ID)&&($tpassword==$password)){
    $_SESSION["login"]="T_Yes";
    header("Location:tok.php");
}elseif(($SID==$ID)&&($spassword==$password)){
    $_SESSION["login"]="S_Yes";
    header("Location:sok.php");
}else{
    $_SESSION["login"]="No";
    header("Location:error.php");
}
?>