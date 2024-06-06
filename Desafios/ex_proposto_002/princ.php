<?php
if (isset($_GET['minimo']) && isset($_GET['maximo'])) {
    $minimo = $_GET['minimo'];
    $maximo = $_GET['maximo'];

    // Verifica se os valores são numéricos e se mínimo é menor que máximo
    if (is_numeric($minimo) && is_numeric($maximo) && $minimo <= $maximo) {
        $minimo = (int)$minimo;
        $maximo = (int)$maximo;
        $sorteado = mt_rand($minimo, $maximo);
    } else {
        $erro = "Por favor, insira um intervalo válido.";
    }
} else {
    $erro = "Por favor, forneça os valores mínimo e máximo.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Sorteio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Sorteio</h1>
    </header>
    <section>
        <?php if (isset($erro)): ?>
            <p style="color: red;"><?php echo $erro; ?></p>
        <?php else: ?>
            <p>Intervalo: <?php echo $minimo; ?> - <?php echo $maximo; ?></p>
            <p>Número Sorteado: <?php echo $sorteado; ?></p>
        <?php endif; ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </section>
</body>
</html>
