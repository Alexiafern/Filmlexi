<?php
    include("conexao.php");

    if(isset($_POST['bt_login'])){
        $login = $_POST['bt_login'];
        $senha = $_POST['bt_senha'];

        $sql = "SELECT * FROM tabela_alexia WHERE login='$login' limit 1";
        $sql_exec = $mysqli->query($sql) or die ($mysqli->error);

        $usuario = $sql_exec->fetch_assoc();

        if(password_verify($senha, $usuario['senha'])){
            
            if(!isset($_SESSION)){
                session_start();


                $_SESSION['user_ativo'] = $usuario['senha'];

                header("location:cadastro_login.php");


            }


        }else{
            echo "Falha ao logar! Login ou senha incorreto";
        }


        
    }
    
?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=], initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <title>Tela de Login</title>
    </head>
    <body>
        
        <div class="container col-11 col-md9" id="form-container">
            <div class="row align-items-center gx-5">
                <div class="col-md-6 order-md-2">
                    <h1>Tela de Login</h1>
                    <form action="" method="post">
                        <div class="form-floating mb-3">
                            <label class="form-label" for="bt_login">Login</label>
                            <input class="form-control" type="text" placeholder="Digite o seu login" name="bt_login">
                        </div>
                        <div class="form-floating mb-3">
                            <label class="form-label" for="bt_senha">Senha:</label>
                            <input class="form-control" type="password" placeholder="Digite a sua senha" name="bt_senha">
                        </div>                       
                        <!--<a href="index.php" class="btn btn-success" type="submit" value="Entrar">Entrar</a>-->
                        <input class="btn btn-success" type="submit" value="Entrar">
                        <input class="btn btn-danger" type="reset" value="Cancelar">
                        <a href="index.php" class="btn btn-warning">Sair</a>
                    </form>
                </div>                   
                <div class="col-md-6 order-md-1">
                    <div class="col-12">
                        <img src="imagens/login.svg.svg" alt="" class="img-fluid">
                    </div>
                </div>           
            </div>                 
        </div>              
    </body>
</html>