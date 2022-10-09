<?php

    if(!isset($_SESSION)){

        session_start();

    }
    if(!isset($_SESSION['user_ativo'])){

        die("Você não está logado!");

    }
?>