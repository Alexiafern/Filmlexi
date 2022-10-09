<?php
    $servidor ="localhost";
    $usuario ="alexia";
    $senha="14075277976";
    $banco="alexia";

    $mysqli = new mysqli($servidor, $usuario, $senha, $banco);

    if ($mysqli->connect_errno){
        echo "Não deu certo " . $mysqli->connect_error;
        exit();
    }

?>