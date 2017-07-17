<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php


class Test {

	private $_force;

	const FORCE_LOW = 1;
	const FORCE_MEDIUM = 2;
	const FORCE_HIGHT = 3; 

	public function __construct ($att)
	{
		$this->setForce($att);
	}

	public function setForce ($force)
	{

		if (in_array($force, [self::FORCE_LOW, self::FORCE_MEDIUM, self::FORCE_HIGHT]))
			{
				$this->_force = $force;
			}	
	}



}

$test1 = new Test(Test::FORCE_LOW);

var_dump($test1);

?>

</body>
</html>