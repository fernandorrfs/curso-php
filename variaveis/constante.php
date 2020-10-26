<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);

echo '<br>', TAXA_DE_JUROS;

const NOVA_TAXA = 5.2;
echo '<br>', NOVA_TAXA;

$valor_variavel = 2.8;

define('NEW_TAXA', $valor_variavel);
echo '<br>', NEW_TAXA;

echo '<br>', PHP_VERSION;
echo '<br>', __FILE__;
echo '<br>', __DIR__;