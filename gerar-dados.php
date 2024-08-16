<?php

function gerarNumerosAleatorios($min, $max, $qtd) {
    $numeros = range($min, $max);  // Cria uma faixa de números de $min a $max
    shuffle($numeros);  // Embaralha os números
    return array_slice($numeros, 0, $qtd);  // Seleciona a quantidade desejada de números
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['numeros']) && count($_POST['numeros']) == 11) {
        $qtd_para_sortear = 6;  // Quantidade de números a serem sorteados
        $numeros_sorteados = gerarNumerosAleatorios(1, 60, $qtd_para_sortear);

        echo "<h1>Números sorteados: " . implode(", ", $numeros_sorteados) . "</h1>";
    } else {
        echo "<h1>Você deve selecionar exatamente 11 números.</h1>";
    }
    echo '<a href="gerador.php">Voltar</a>';
}
?>
