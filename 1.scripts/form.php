<?php 

/**
 |----------------------------------------------
 |            CREER UN DOSSIER
 |----------------------------------------------
*/

function debug($data)
{
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}


function dos2utf8($data)
{
    $str = iconv("CP850", "UTF-8", $data);
    echo "<pre>$str</pre>";
}

if(!empty($_GET))
{
	// debug($_GET);
	$dos     =  $_GET['dossier'];
	$texte   =  $_GET['texte'];
	$fichier =  $_GET['fichier'];

	shell_exec('MKDIR '. $dos);
    shell_exec('CD '. $dos);
    shell_exec('ECHO '. $texte .' > '. $fichier .'.txt');

	$retour = shell_exec('dir /B');
	dos2utf8($retour);

	echo "<br><br> CONTENU DU FICHIER ". $dos ."\\". $fichier .".txt";
	echo '<br>';

	$output = shell_exec('FTYPE '. $fichier . '.txt');
    dos2utf8($output);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Test de script BAT</title>
	<style type="text/css">
		body
		{
			font-family: Arial;
		}
	</style>
</head>
<body>
   
    <form action="form.php">
    	<div>
    		<label for="dossier">Votre nom de dossier</label>
    		<br>
    	    <input type="text" name="dossier">
    	</div>
    	
    	<div>
    		<label for="fichier">Votre nom de fichier</label>
    		<br>
    	    <input type="text" name="fichier">
    	</div>

        <div>
        	<label for="texte">Votre texte</label>
        	<br>
    	    <textarea name="texte" rows="5"><?= $_GET['texte'] ?? null; ?></textarea>
        </div>

    	<input type="submit" value="Valider">
    </form>

</body>
</html>