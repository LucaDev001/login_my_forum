<?php

include ('conexao.php');

$nome = $_POST['nickname'];
$email = $_POST['email'];
$pass = $_POST['password'];

echo "your login name is:" . $nome . "<br>";
echo "your pass is:". $pass . "<br>";
echo "your email is:". $email . "<br>";

$sqlquery = "INSERT INTO clientes(nickname, email, password) 
        VALUES ('$nome', '$email', '$pass')";
  if ($con->query($sqlquery) === TRUE) {
    echo "<br>Nice Broo, You Are in!";
} else {
    echo "Error: " . $sqlquery . "<br>" . $con->error;
}

?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/register.css">
        <title></title>
    </head>
    <body>

    </body>
</html>