<?php
// Incluindo o arquivo da classe Rota para garantir que ela esteja disponível
include_once '../app/Libraries/Rota.php';
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Framework</title>
</head>
<body>
    <?php
    // Criando uma instância da classe Rota para testar a inclusão do arquivo
    $rota = new Rota();
    // Chamando o método url para verificar se a classe está funcionando corretamente
    //$rota->url();
    ?>
</body>
</html>