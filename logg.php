<?php
session_start();

    include_once('conexao.php');

    $logUser = $_POST['nickname'];
    $passUser = $_POST['password'];

    $sql = "SELECT * FROM clientes WHERE nickname = '$logUser' and password = '$passUser'";
    
    $result = $con->query($sql);
    
    //print_r($result);

    if(mysqli_num_rows($result) < 1){
        unset($_SESSION['nickname']);
        unset($_SESSION['password']);
        header('Location: login.html');
    }else{
        $_SESSION['nickname'] = $logUser;
        $_SESSION['password'] = $passUser;
        header('Location: forum.php');
    }

?>