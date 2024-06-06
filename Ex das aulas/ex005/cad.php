<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <head>
        <h1>Resultado do processamento</h1>
    </head>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Desconhecido";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site."
            //var_dump($_REQUEST); $_GET $_POST $COOKIES
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a><p>
    </main>
</body>
</html>