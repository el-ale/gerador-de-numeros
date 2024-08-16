<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Apostas</title>
    <script>
        function verificarSelecao() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            var selecionados = 0;
            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    selecionados++;
                }
            });

            if (selecionados > 11) {
                alert("Você só pode selecionar até 11 números.");
                return false; // Impede o envio do formulário
            }
            return true;
        }
    </script>
</head>
<body>
    <h1>Gerador de Apostas</h1>
    <form action="gerar-dados.php" method="post" onsubmit="return verificarSelecao();">
        <p>Selecione até 11 números, daí serão 6 pontos de acertos:</p>
        <?php for ($i = 1; $i <= 60; $i++): ?>
            <input type="checkbox" id="num<?php echo $i; ?>" name="numeros[]" value="<?php echo $i; ?>">
            <label for="num<?php echo $i; ?>"><?php echo $i; ?></label>
            <?php if ($i % 10 == 0) echo "<br>"; ?>
        <?php endfor; ?>
        <br><br>
        <input type="submit" value="Gerar Aposta">
    </form>
</body>
</html>
