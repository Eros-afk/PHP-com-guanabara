<?php
if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];

    // Verifica se o valor é numérico
    if (is_numeric($numero)) {
        $numero = (int)$numero;
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;
    } else {
        $erro = "Por favor, insira um número válido.";
    }
} else {
    $erro = "Nenhum número foi fornecido.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <section>
        <?php if (isset($erro)): ?>
            <p style="color: red;"><?php echo $erro; ?></p>
        <?php else: ?>
            <p>Número: <?php echo $numero; ?></p>
            <p>Antecessor: <?php echo $antecessor; ?></p>
            <p>Sucessor: <?php echo $sucessor; ?></p>
        <?php endif; ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </section>
</body>
</html>
