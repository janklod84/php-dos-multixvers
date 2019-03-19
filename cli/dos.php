<?php
/*
 | Ajout de chemin
 | php.ini :  include_path = ".;D:\Scripts"
 | argc, argv
*/

require_once __DIR__.'/Function.php';


define('ROOT', 'C:\\Users\\User\\Desktop\\');


if(isset($_SERVER['argv']))
{
    $argNB = $_SERVER['argc'];

    for ($i = 1 ; $i < $argNB; $i++)
    {
          mkdir(ROOT . $_SERVER['argv'][$i]);
    }
}



?>