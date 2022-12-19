<?php
session_start();
//print_r($_SESSION)

$a = "$_SESSION['nickname']) == true";
$b = "$_SESSION['password']) == true";
$c = "$_SESSION['id_pag']) == false";
$d = "$_SESSION['id_pag']) == true";

if((!isset($_SESSION['nickname']) == true),(!isset($_SESSION['password']) == true)),(!isset($_SESSION['id_pag']) == false){

    unset($_SESSION['nickname']);
    unset($_SESSION['password']);
    header('Location: login.html');


}elseif{
    ((!isset($_SESSION['nickname']) == true) and (!isset($_SESSION['password']) == true)) and (!isset($_SESSION['id_pag']) == true)  

    header('Location: forum2.html');
}
$logado = $_SESSION['nickname'];
echo "ola $logado, seja bem vindo!";
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/css.css">
        <title></title>
    </head>
    <body>
        <p>ola</p>
    </body>
</html>
