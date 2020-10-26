<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Open+Sans&family=Roboto&family=Source+Sans+Pro&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicios.css">
</head>
<body class="exercicio">
<header class="cabecalho">
    <h1>PHP</h1>
    <h2>Visualização do exercício</h2>
</header>
<nav class="navegacao">
    <a href="<?= "{$_GET['dir']}/{$_GET['arq']}.php" ?>" class="verde">Sem formatação</a>
    <a href="index.php" class="vermelho">Voltar</a>
</nav>
<main class="principal">
    <div class="conteudo">
        <?php
            include("{$_GET['dir']}/{$_GET['arq']}.php");
        ?>
    </div>
</main>
<footer class="rodape">
    COD3R E ALUNOS <?= date('Y'); ?>
</footer>
</body>
</html>
