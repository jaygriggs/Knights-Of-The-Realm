<?php

class Ditch extends Mapobject_class
{
  
   protected function getValue() {
        return "true";
    }

}

class DitchPosition
 {
public function ditchposition()
{

$myPosition = GladiatorGetPosition::getPosition();
$Gladiator1 = $myPosition->Positionvalue1;
$Gladiator2 = $myPosition->Positionvalue2;
$Gladiator3 = $myPosition->Positionvalue3;

if ($Gladiator1 == "13"){echo "<style> .square:nth-child(13){background-image: url(\"images/ditchbam.png\");background-repeat: no-repeat;} </style>";} 
elseif ($Gladiator2 == "13"){echo "<style> .square:nth-child(13){background-image: url(\"images/ditchbam.png\");background-repeat: no-repeat;} </style>";}
elseif ($Gladiator3 == "13"){echo "<style> .square:nth-child(13){background-image: url(\"images/ditchbam.png\");background-repeat: no-repeat;} </style>";}
else{echo "<style> .square:nth-child(13){background-image: url(\"images/ditch.png\");background-repeat: no-repeat;} </style>";}

}}

$DitchPosition = new DitchPosition;

class GladiatorGetDitchDamage 
{

private static $DitchDamage;
public $DitchDamageValue1;
public $DitchDamageValue2;
public $DitchDamageValue3;

private function initialize() 
{

$myPosition = GladiatorGetPosition::getPosition();
$Gladiator1 = $myPosition->Positionvalue1;
$Gladiator2 = $myPosition->Positionvalue2;
$Gladiator3 = $myPosition->Positionvalue3;

   $DitchPoints = rand(1, 10);

   if ($Gladiator1 == "13"){$DDamage1 = $DitchPoints;} else{$DDamage1 = 0;}
   if ($Gladiator2 == "13"){$DDamage2 = $DitchPoints;} else{$DDamage2 = 0;}
   if ($Gladiator3 == "13"){$DDamage3 = $DitchPoints;} else{$DDamage3 = 0;}

    $this->DitchDamageValue1 = $DDamage1;
    $this->DitchDamageValue2 = $DDamage2;
    $this->DitchDamageValue3 = $DDamage3;
}

public function getDitchDamage()
{
    if (!isset(self::$DitchDamage))
    {
        $class = __CLASS__;
        self::$DitchDamage = new $class();
        self::$DitchDamage->initialize();
    }
    return self::$DitchDamage;
}
}

?>