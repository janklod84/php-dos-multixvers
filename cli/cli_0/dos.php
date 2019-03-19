<?php
/*
 | Ajout de chemin
 | php.ini :  include_path = ".;D:\Scripts"
 | argc, argv
*/

if(isset($_SERVER['argv']))
{
    $arg = $_SERVER['argv'];

    foreach($arg as $dos)
    {
    	 if(!is_dir($dos) && $dos !== 'dos.php')
    	 {
    	 	 mkdir($dos, 0777, true);
    	 }
    }
}


?>