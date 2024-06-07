<?php 
    $cotacao = 5.17;

    $real = 1000;

    $dolar = $real / $cotacao;

    /*echo "R$ ". number_format($real, 2, ',', '.'). " em Dólar é igual a U$ ". number_format($dolar, 2, ',', '.');

    echo "<br>\n";

    $dolar = $real * $cotacao;

    echo "U$ ". number_format($dolar, 2, ',', '.'). " em Real é igual a R$ ". number_format($real, 2, ',', '.');

    echo "<br>\n";

    $dolar = 1000 / $cotacao;

    echo "R$ ". number_format($dolar, 2, ',', '.'). " em Real é igual a U$ ". number_format($dolar, 2, ',', '.');

    echo "<br>";*/

    //Formato de moedas com inernasionalização!
    //Biblioteca intl (internalization PHP)

    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "Seus" . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");

?>