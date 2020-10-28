<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Open+Sans&family=Roboto&family=Source+Sans+Pro&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>
<body>
<header class="cabecalho">
    <h1>PHP</h1>
    <h2>índice dos exercícios</h2>
</header>
<main class="principal">
    <div class="conteudo">
        <nav class="modulos">
            <div class="modulo vermelho">
                <h3>Módulo 01</h3>
                <ul>
                    <li><a href="exercicio.php?dir=basico&arq=ola">Exercício A</a></li>
                    <li><a href="exercicio.php?dir=basico&arq=desafio">desafio</a></li>
                </ul>
            </div>
            <div class="modulo azul">
                <h3>Módulo 02</h3>
                <ul>
                    <li><a href="exercicio.php?dir=variaveis&arq=basico">Variáveis básicas</a></li>
                    <li><a href="exercicio.php?dir=variaveis&arq=variaveis_variaveis">Variáveis variáveis</a></li>
                    <li><a href="exercicio.php?dir=variaveis&arq=constante">Constantes</a></li>
                </ul>
            </div>
            <div class="modulo verde">
                <h3>Controle</h3>
                <ul>
                    <li><a href="exercicio.php?dir=controle&arq=if">if/else</a></li>
                </ul>
            </div>
            <div class="modulo cinza">
                <h3>Módulo 04</h3>
                <ul>

                </ul>
            </div>
        </nav>
    </div>
</main>
<footer class="rodape">
    COD3R E ALUNOS <?= date('Y'); ?>
</footer>
</body>
</html>