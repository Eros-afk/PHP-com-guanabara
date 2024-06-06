<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP aula de strings</title>
</head>
<body>
    <h1>Teste de strings</h1>
    <?php 
        // const CANAL = "Curso em Video \u{1F499}";
        // echo "Eu adoro o " . CANAL;
        // echo " Estamos no ano de " . date('Y-m-d');

        $nome = "Eros";
        $snome = "Simette";
        $apelido = "Monastyr";
        echo "$nome \"$apelido\" $snome";
    ?>
</body>
</html>