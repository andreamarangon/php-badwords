<?php
$testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
 nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
 velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
 sunt in culpa qui officia deserunt mollit anim id est laborum.';
 var_dump($_GET['parola']);
 $badWord = $_GET['parola'];
 $lunghezzaTesto = strlen($testo);
 $testoCensurato = str_replace($badWord, '***', $testo)
?>
<h1>Testo</h1>
<p class="">
  <?php
    echo $testo;
   ?>
</p>
<h2>Lunghezza testo</h2>
<p class="">
  Il testo contiene
  <?php
    echo $lunghezzaTesto;
   ?>
   parole
</p>
<h1>Testo censurato</h1>
<p class="">
  <?php
    echo $testoCensurato;
   ?>
</p>
