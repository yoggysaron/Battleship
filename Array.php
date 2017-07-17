<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$compteur = rand(0, 100); 

if ($compteur >= 80){
	echo 'Attack miss';
}
else {
	echo 'HIT !!! ' ;
}

var_dump($compteur);

?>
</body>
</html>