<?php
    include("conexao.php"); 
    if(isset($_POST['bt_nome'])){
        if(isset($_FILES['bt_arquivo'])){
            $arquivo = $_FILES['bt_arquivo'];
            if($arquivo['size']>15000000){
                die("Arquivo muito grande!! Max: 15MB");
            }
            if ($arquivo['error']){
                die("Falha ao enviar arquivo");
            }
        }
        
        var_dump($arquivo);
        
        $nome = $_POST['bt_nome'];

        $pasta ="recebidos/";
        $nome_arquivo=$arquivo['name'];
        $novo_nome_arquivo = uniqid();
        $extensao = strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));

        

        $caminho = $pasta . $novo_nome_arquivo . "."  . $extensao;

        

        if($extensao != "jpg"){
            die("Tipo de arquivo não aceito");
        }

        $deucerto = move_uploaded_file($arquivo["tmp_name"], $caminho);

        if($deucerto){
            $mysqli -> query("INSERT INTO alexia_receber (nome, arquivo_caminho) 
            values ('$nome', '$caminho')") or die ($mysqli->error);
        }

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <title>Formulário - Receber</title>
    </head>
    <body>       
        <div class="container">
            <h1>Formulário - Receber</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-floating mb-3">
                    <label class="form-label" for="bt_nome">Nome:</label>
                    <input  class="form-control" type="text" name="bt_nome" required>
                    <div class="form-text">*Inserir o seu nome completo.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="bt_arquivo">Selecione um arquivo: </label>
                    <input class="form-control" type="file" name="bt_arquivo" required>
                    <div class="form-text">*Inserir apenas arquivos .jpg</div>
                </div>
                <button class="btn btn-primary" type="submit">Enviar Arquivo</button>
                <button class="btn btn-danger" type="reset">Limpar</button>
            </form>
        </div>        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>