<div class="titulo">Olá PHP</div>

<?php

echo intdiv(7, 4), '<br>';
echo round(7 / 4), '<br>';

echo '<br>', ucfirst('só a primeira letra');
echo '<br>', ucwords('todas as palavras');
echo '<br>', strlen('Quantas letras?');
echo '<br>', mb_strlen("eu também", "utf-8");
echo '<br>', substr('só uma parte mesmo', 7, 6);
echo '<br>', str_replace('isso', 'aquilo', 'trocar isso');


?>