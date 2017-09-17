<?php

 class Boulder extends Mapobject_class
{
  protected function getValue() {
        return "true";
}
}

class BoulderPosition
 {
public function boulderposition()
{

$myPosition = GladiatorGetPosition::getPosition();
$Gladiator1 = $myPosition->Positionvalue1;
$Gladiator2 = $myPosition->Positionvalue2;
$Gladiator3 = $myPosition->Positionvalue3;

if ($Gladiator1 == "28"){echo "<style> .square:nth-child(28){background-image: url(\"images/boulderbam.png\");background-repeat: no-repeat;} </style>";} 
elseif ($Gladiator2 == "28"){echo "<style> .square:nth-child(28){background-image: url(\"images/boulderbam.png\");background-repeat: no-repeat;} </style>";}
elseif ($Gladiator3 == "28"){echo "<style> .square:nth-child(28){background-image: url(\"images/boulderbam.png\");background-repeat: no-repeat;} </style>";}
else{echo "<style> .square:nth-child(28){background-image: url(\"images/boulder.png\");background-repeat: no-repeat;} </style>";}

}}

$BoulderPosition = new BoulderPosition;

class GladiatorGetBoulderDamage 
{

private static $BoulderDamage;
public $BoulderDamageValue1;
public $BoulderDamageValue2;
public $BoulderDamageValue3;

private function initialize() 
{

$myPosition = GladiatorGetPosition::getPosition();
$Gladiator1 = $myPosition->Positionvalue1;
$Gladiator2 = $myPosition->Positionvalue2;
$Gladiator3 = $myPosition->Positionvalue3;

   $BoulderPoints = rand(2, 12);

   if ($Gladiator1 == "28"){$BDamage1 = $BoulderPoints;} else{$BDamage1 = 0;}
   if ($Gladiator2 == "28"){$BDamage2 = $BoulderPoints;} else{$BDamage2 = 0;}
   if ($Gladiator3 == "28"){$BDamage3 = $BoulderPoints;} else{$BDamage3 = 0;}

    $this->BoulderDamageValue1 = $BDamage1;
    $this->BoulderDamageValue2 = $BDamage2;
    $this->BoulderDamageValue3 = $BDamage3;
}

public function getBoulderDamage()
{
    if (!isset(self::$BoulderDamage))
    {
        $class = __CLASS__;
        self::$BoulderDamage = new $class();
        self::$BoulderDamage->initialize();
    }
    return self::$BoulderDamage;
}
}

?>