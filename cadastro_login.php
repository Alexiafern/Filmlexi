<?php
    include("conexao.php");
    include('autenticacao.php');
    

    if(isset($_POST['bt_login'])){


        $login = $_POST['bt_login'];
        $senha = $_POST['bt_senha'];

        
       

        $senha_nova = password_hash($_POST['bt_senha'], PASSWORD_DEFAULT);

        $mysqli->query ("INSERT INTO tabela_alexia (login, senha) VALUES ('$login', '$senha_nova')") ;


       
    }
?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">

        <title>Cadastro de Usuário</title>
    </head>
    <body>
        <div class="container">
            <h1>Cadastro de Usuário</h1>

            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label" for="bt_login">Digite o seu usuário: </label>
                    <input class="form-control" type="text" name="bt_login">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="bt_senha">Digite a sua senha: </label>            
                    <input class="form-control"  type="password" name="bt_senha">
                </div>    
                            
                <input class="btn btn-primary" type="submit" value="Cadastrar">
                <input class="btn btn-warning" type="reset" value="Limpar">
                <a href="index.php" class="btn btn-danger">Sair</a>
                

            </form>
        </div>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>