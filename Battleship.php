<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>

<?php

class Battleship
{

	

	// START FIXE ATTRIBUTE
	private $_id;
	private $_name; 
	private $_life;
	private $_position;
	private $_size;
	private $_defence;
	private $_haste;
	private $_power;
	private $_experience;
	

	// SCALABLE ATTRIBUTE 

	private $_damageLow = 4.5 ;
	private $_damageMedium = 10.5; 
	private $_damageHight = 14 ; 
	private $_hit;

	// GAMER ATTRIBUTE

	
	


	public function __construct($name, $pv, $def, $att, $vit, $siz, $xp)
	{
		$this->_name = $name; 
		$this->_life = $pv; 
		$this->_defence = $def;
		$this->_power = $att; 
		$this->_haste = $vit;
		$this->_size = $siz;
		$this->_experience = $xp; 
		
	}

	
	
	// FUNCTION CHARACTERISTIC OF MACHINES

	public function MachineLife () 
	{
		return $this->_life;
	}

	public function MachineSize ()
	{
		return $this->_size; //getters ( return attribute _boat_size )
	}

	public function MachinePower()
	{
		return $this->_power ; //getters ( return attribute _power )
	}

	public function MachineDef()
	{
		return $this->_defence ; 
	}

	public function MachineHaste()
	{
		return $this->_haste;
	}

	public function MachineExperience()
	{
		return $this->_experience; 
	}


	// FUNCTION ACTION

			// ATTACKS Target life - attacker power * (attacker damage type - target defence ) 

			public function AttackLow (Battleship $target) {
				if (rand(0,100) <= 80 )
				{
					$target->_life -= $this->_power * ( $this->_damageLow - $target->_defence ); 
				}
				else {
					echo' <p class="name"> Attack miss </p>'; 
				}
			}
				
			public function AttackMedium (Battleship $target) {
				if(rand(0,100) <= 70)
			
			{
				$target->_life -= $this->_power *  ( $this->_damageMedium - $target->_defence ) ; 
			}
				else {
					echo ' <p class="name"> Attack miss </p>'; 
				}
			}

			public function AttackHight (Battleship $target){
				if (rand(0,100) <= 65 )
			
			{
				$target->_life -= $this->_power * ( $this->_damageHight - $target->_defence ) ; 
			}
				else {
					echo  '<p class="name"> Attack miss </p>' ;
				}
			}
				
	public function Talk ()
	{
		echo 'Take it mother fucker ! ' ; 
	}

	public function Regen () // Function for regen life whith one turn of rest
	{
		$this->_life += 20 ; 
	}

	public function Death ()
	{
		return $this->_life <= 0;  // Function Death false > 0 Dead, true <= 0 Alive
	}

	public function miss ($target)
	{
		return $this->_evasion = rand(0,100); 
	}

	// FUNCTION EXPERIENCE 

	public function ExperienceWin()
	{
		$this->_experience++; // or $this->_experience += 1 
	}
	
	// FUNCTION GAMER 


	public function Id() 
	{
		return $this->_id; 
	}

	public function Name()
	{
		return $this->_name; 
	}

	// SETTERS LIST

	public function setId($id) // Setters for verify that id is a positive number
	{
		$id = (int) $id;
		if ($id > 0)
		{
			$this->_id = $id;
		}
	}

	public function setName($name)
	{
		if (is_string($name))
		{
			$this->_name = $name; 
		}
		if (!is_string($name))
		{
			trigger_error('Votre nom doit être une chaine de caractère', E_USER_WARNING); 
		}
	}

	public function setSize($size)
	{
		if (!is_int($size))
		{
			trigger_error('La taille de votre machine doit être en nombre entier', E_USER_WARNING);
			return;
		}
		if ($size > 2)
		{
			trigger_error('La taille de votre machine ne doit pas dépasser 2', E_USER_WARNING);
			return;
		}

	}

	public function setPower($power)
	{
		if (!is_int($power)) 
		{
			trigger_error('La puissance de votre machine doit être un nombre entier', E_USER_WARNING);
			return;
		}
		if ($power > 20)
		{
			trigger_error('La puissance de votre machine ne doit pas dépasser 20', E_USER_WARNING);
			return;
		}
		$this->_power = $power;
	}

	
}

?>

</body>
</html>