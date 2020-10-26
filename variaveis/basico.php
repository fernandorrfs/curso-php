<div class="titulo">Variáveis</div>

<?php
$a = 30**2;
$b = 6;

$c = -4 * -5;
$d = 2;

$ab = $a / $b;
$c2 = $c**2;
$d2 = $d**2;

$cd = $c2 / $d2;

$sub = $ab - $cd;
$sub3 = $sub**3;

$final = $sub3 / (10**3);

var_dump($final);