<?php 
/**
 |---------------------------------------------------------
 |   FUNCTION SHELL_EXEC() pour executer une commande en php
 |   Output = shell_exec(Input)
 |   iconv permet de convertir du dos en php
 |---------------------------------------------------------
*/


echo "Test d'un ipconfig \n";

$sortie = shell_exec('ipconfig'); 

$retour = iconv("CP850", "UTF-8", $sortie);

echo "<pre>$retour</pre>";