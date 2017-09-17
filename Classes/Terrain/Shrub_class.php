<?php

 class Shrub extends Mapobject_class 
{
   protected function getValue() {
        return "true";
    }
   
}

class ShrubPosition
 {
public function shrubposition()
{

$myPosition = GladiatorGetPosition::getPosition();
$Gladiator1 = $myPosition->Positionvalue1;
$Gladiator2 = $myPosition->Positionvalue2;
$Gladiator3 = $myPosition->Positionvalue3;

if ($Gladiator1 == "64"){echo "<style> .square:nth-child(64){background-image: url(\"images/shrubbam.png\");background-repeat: no-repeat;} </style>";} 
elseif ($Gladiator2 == "64"){echo "<style> .square:nth-child(64){background-image: url(\"images/shrubbam.png\");background-repeat: no-repeat;} </style>";}
elseif ($Gladiator3 == "64"){echo "<style> .square:nth-child(64){background-image: url(\"images/shrubbam.png\");background-repeat: no-repeat;} </style>";}
else{echo "<style> .square:nth-child(64){background-image: url(\"images/shrub.png\");background-repeat: no-repeat;} </style>";}

 }}

$ShrubPosition = new ShrubPosition;

class GladiatorGetShrubDamage 
{

private static $ShrubDamage;
public $ShrubDamageValue1;
public $ShrubDamageValue2;
public $ShrubDamageValue3;

private function initialize() 
{

$myPosition = GladiatorGetPosition::getPosition();
$Gladiator1 = $myPosition->Positionvalue1;
$Gladiator2 = $myPosition->Positionvalue2;
$Gladiator3 = $myPosition->Positionvalue3;

   $ShrubPoints = rand(1, 8);

   if ($Gladiator1 == "64"){$SDamage1 = $ShrubPoints;} else{$SDamage1 = 0;}
   if ($Gladiator2 == "64"){$SDamage2 = $ShrubPoints;} else{$SDamage2 = 0;}
   if ($Gladiator3 == "64"){$SDamage3 = $ShrubPoints;} else{$SDamage3 = 0;}

    $this->ShrubDamageValue1 = $SDamage1;
    $this->ShrubDamageValue2 = $SDamage2;
    $this->ShrubDamageValue3 = $SDamage3;
}

public function getShrubDamage()
{
    if (!isset(self::$ShrubDamage))
    {
        $class = __CLASS__;
        self::$ShrubDamage = new $class();
        self::$ShrubDamage->initialize();
    }
    return self::$ShrubDamage;
}
}

?>