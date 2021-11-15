<?php 



    if(isset($_POST['escrita'])){

        $operacao = "escrita";
        $data = date('d/m/Y');
        $conteudo = $data." - ".$operacao."\n";
        $fp = fopen("log.txt","a");
        fwrite($fp,$conteudo);
        fclose($fp);
    }
    if(isset($_POST['leitura'])){
        $operacao = "leitura";
        $data = date('d/m/Y');
        $conteudo = $data." - ".$operacao."\n";
        $fp = fopen("log.txt","a");
        fwrite($fp,$conteudo);
        fclose($fp);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>tarefa 02</title>
</head>
<body>
    
<style>
        .container{
            width: 400px;
            /*background-color: blue;*/
            margin-top: 200px;
            margin-left: 600px;

        }
        .labal{
            margin-bottom: 50px;
        }

    </style>

    <div class="container">

    <form action="" method="POST">

        <button type="submit" class="btn btn-success" name="escrita">Escrita</button>
        <button type="submit" class="btn btn-success" name="leitura" >Leitura</button>
        
    </form>

    </div>

</body>
</html>