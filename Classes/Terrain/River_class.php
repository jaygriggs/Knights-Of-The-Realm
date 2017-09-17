<?php

 class River extends Mapobject_class 
{
   protected function getValue() {
        return "true";
    }
}

class RiverPosition
{
public function riverposition()
{
  
$myPosition = GladiatorGetPosition::getPosition();
$Gladiator1 = $myPosition->Positionvalue1;
$Gladiator2 = $myPosition->Positionvalue2;
$Gladiator3 = $myPosition->Positionvalue3;

if ($Gladiator1 == "92"){echo "<style> .square:nth-child(92){background-image: url(\"images/riverbam.png\");background-repeat: no-repeat;} </style>";} 
elseif ($Gladiator2 == "92"){echo "<style> .square:nth-child(92){background-image: url(\"images/riverbam.png\");background-repeat: no-repeat;} </style>";}
elseif ($Gladiator3 == "92"){echo "<style> .square:nth-child(92){background-image: url(\"images/riverbam.png\");background-repeat: no-repeat;} </style>";}
else{echo "<style></style>";
}
 }}

$RiverPosition = new RiverPosition;

class GladiatorGetRiverDamage 
{

private static $RiverDamage;

public $RiverDamageValue1;
public $RiverDamageValue2;
public $RiverDamageValue3;

private function initialize() 
{

$myPosition = GladiatorGetPosition::getPosition();
$Gladiator1 = $myPosition->Positionvalue1;
$Gladiator2 = $myPosition->Positionvalue2;
$Gladiator3 = $myPosition->Positionvalue3;

   $RiverPoints = rand(1, 10);

   if ($Gladiator1 == "92"){$RDamage1 = $RiverPoints;} else{$RDamage1 = 0;}
   if ($Gladiator2 == "92"){$RDamage2 = $RiverPoints;} else{$RDamage2 = 0;}
   if ($Gladiator3 == "92"){$RDamage3 = $RiverPoints;} else{$RDamage3 = 0;}

    $this->RiverDamageValue1 = $RDamage1;
    $this->RiverDamageValue2 = $RDamage2;
    $this->RiverDamageValue3 = $RDamage3;
}

public function getRiverDamage()
{
    if (!isset(self::$RiverDamage))
    {
        $class = __CLASS__;
        self::$RiverDamage = new $class();
        self::$RiverDamage->initialize();
    }
    return self::$RiverDamage;
}
}

?>