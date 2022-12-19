<?php

$svname = 'localhost';
$user = 'root';
$pass = '';
$banco = 'site_facul';

$con = mysqli_connect($svname, $user, $pass, $banco);
if(!$con){
    die("houve um erro:" .mysqli_connect_error());
}

?>