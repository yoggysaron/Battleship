<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
</head>
<body>

	<div id="banner-below">
		<ul id="list-below">
			<li> <img src="img/bannerbelow1"> </li> <!-- Put a ID for after -->
			<li> <img src="img/bannerbelow2"> </li>
			<li> <img src="img/bannerbelow3"> </li>
			<li> <img src="img/bannerbelow4"> </li>
			<li> <img src="img/bannerbelow5"> </li>
			<li> <img src="img/bannerbelow6"> </li>
			<li> <img src="img/bannerbelow7"> </li>
			<li> <img src="img/bannerbelow8"> </li>
			<li> <img src="img/bannerbelow9"> </li>
		</ul>	
	</div>



	<div id="banner">
	<h2 id="title-below"> Show that you have bigger ball than the others </h2>
	<h1 id="title"> Battleship </h1>
	</div>

	<div id="banner-beside">
		<ul id="list-beside">
			<li> <img src="img/bannerbeside1"> </li>
			<li> <img src="img/bannerbeside2"> </li>
			<li> <img src="img/bannerbeside3"> </li>
			<li> <img src="img/bannerbeside4"> </li>
			<li> <img src="img/bannerbeside5"> </li>
			<li> <img src="img/bannerbeside2"> </li>
			<li> <img src="img/bannerbeside3"> </li>
			<li> <img src="img/bannerbeside4"> </li>
			<li> <img src="img/bannerbeside5"> </li>

		</ul>	
	</div>

<?php

require 'Battleship.php' ; // Call my class in the file "Battleship.php"


	// NAME -  LIFE - DEF - ATT - VIT - SIZE - XP
	
	$smallBoat = new Battleship("Benoit", 100,2,1,4,9,0); 
	 
	$fighterJet = new Battleship("Robin", 200,4,4,5,2,0);
	
	$bombers = new Battleship("Fred" ,300,5,6,2,3,0);
	
	var_dump($bombers);
	var_dump($smallBoat); 
	
	
	// MachineLife - MachineDef - MachinePower - MachineHaste - MachinesSize - MachineExperience



	echo '<p class="name"> Gamer : ' ,$smallBoat->Name(), '</p>  The <mark> Small boat </mark>  has for <u> <strong class="life"> ' ,$smallBoat->MachineLife(), ' </strong> </u> Life point and, <u> <strong> ' ,$smallBoat->MachineDef(),' </strong> </u> def point and, <u> <strong> ',$smallBoat->MachinePower(),' </strong> </u> Attack point and,  <u> <strong> ' , $smallBoat->MachineHaste() , ' </strong> </u> Haste point and
		 <u> <strong> ' , $smallBoat->MachineSize() , '</strong> </u> Size point <br> 
		Experience : <u> </strong> ' , $smallBoat->MachineExperience(), ' </strong> </u> <br>'  ;

	echo ' <p class="name"> Gamer : ' ,$fighterJet->Name(), ' </p> The <mark> Fighter jet </mark>  has for <u> <strong class="life"> ' ,$fighterJet->MachineLife(), ' </strong> </u> Life point and, <u> <strong> ' ,$fighterJet->MachineDef(),' </strong> </u> def point and, <u> <strong> ',$fighterJet->MachinePower(),' </strong> </u> Attack point and,  <u> <strong> ' , $fighterJet->MachineHaste() , ' </strong> </u> Haste point and
		<u> <strong> ' , $fighterJet->MachineSize() , '</strong> </u> Size point <br> 
		Experience : <u> </strong> ' , $fighterJet->MachineExperience(), ' </strong> </u> <br>' ;

	echo ' <p class="name"> Gamer : ' ,$bombers->Name(), ' </p> The <mark> Bombers </mark>  has for <u> <strong class="life"> ' ,$bombers->MachineLife(), ' </strong> </u> Life point and, <u> <strong> ' ,$bombers->MachineDef(),' </strong> </u> def point and, <u> <strong> ',$bombers->MachinePower(),' </strong> </u> Attack point and,  <u> <strong> ' , $bombers->MachineHaste() , ' </strong> </u> Haste point and 
		<u> <strong> ' , $bombers->MachineSize() , '</strong> </u> Size point <br> 
		Experience : <u> </strong> ' , $bombers->MachineExperience(), ' </strong> </u> <br>' ;
	

echo '<h1 class="fight-title"> First round </h1> ' ; 

$bombers->AttackHight($smallBoat);



$smallBoat->AttackMedium($bombers);


var_dump($bombers);
var_dump($smallBoat);


// FIGHT RESULT RAJOUTER LE GAIN XP

if ($smallBoat->Death())
	{
	echo ' <p> The player ' ,$smallBoat->Name(), ' his dead </p> ';  
	}
else 
	{
	echo ' <p> The player ' ,$smallBoat->Name(), ' his alive with : ' ,$smallBoat->MachineLife(), ' </p> ';
	}	


if ($bombers->Death())
	{
	echo '<p> The player ' ,$bombers->Name(), ' his dead </p> ';
	}
else 
	{
	echo '<p> The player ' ,$bombers->Name(), ' his alive with : ' ,$bombers->MachineLife(),' </p> ' ;
	}


	echo ' <br> Bombers win with <mark> ' ,$bombers->MachinePower(), ' </mark> attacks point versus the SmallBoat <br> Bombers wins <mark> ' ,$bombers->MachineExperience(), ' </mark>  XP point ' ; 

 echo '<h1 class="fight-title"> Second round </h1> ' ; 

$bombers->AttackHight($smallBoat);
$bombers->ExperienceWin();


$smallBoat->AttackMedium($bombers);
$smallBoat->ExperienceWin();

var_dump($bombers);
var_dump($smallBoat);


// FIGHT RESULT RAJOUTER LE GAIN XP

if ($smallBoat->Death())
	{
	echo ' <p> The player ' ,$smallBoat->Name(), ' his <span class="dead">  dead </span> </p> ';  
	}
else 
	{
	echo ' <p> The player ' ,$smallBoat->Name(), ' his <span class="alive"> alive with </span> : ' ,$smallBoat->MachineLife(), ' </p> ';
	}	


if ($bombers->Death())
	{
	echo '<p> The player ' ,$bombers->Name(), ' his <span class="dead"> dead </span> </p> ';
	}
else 
	{
	echo '<p> The player ' ,$bombers->Name(), ' his <span class="alive">  alive </span> with : ' ,$bombers->MachineLife(),' </p> ' ;
	}


	


?>

<p> Click <a href="Rules.html"> here </a> for learn the rules. </p>

</body>
</html>