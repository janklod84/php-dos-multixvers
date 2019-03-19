<?php
/*
 | Ajout de chemin
 | php.ini :  include_path = ".;D:\Scripts"
 | argc, argv
*/

require_once __DIR__.'/Function.php';


if(isset($_SERVER['argv']))
{
    $argNB = $_SERVER['argc'];

    for ($i = 1 ; $i < $argNB; $i++)
    {
          mkdir($_SERVER['argv'][$i]);
    }
}



?>