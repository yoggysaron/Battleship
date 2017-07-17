<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$sarkozy = array('goRilLe', 'BaBouIn', 'CaPucIn') ;

function change(&$sarkozy){
	
}

foreach ($sarkozy as $hollande){
$hollande = array_map(strtolower,$sarkozy);
$royal = array_map(ucfirst, $hollande);
};

print_r($sarkozy);
print_r($hollande);
print_r($royal);

?>

</body>
</html>

