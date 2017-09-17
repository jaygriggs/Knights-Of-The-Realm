<?php

 class Treasure extends Mapobject_class 
{
   protected function getValue() {
        return "true";
    }

}

class GladiatorGetTreasureDamage 
{

private static $TreasureDamage;
public $TreasureDamageValue1;
public $TreasureDamageValue2;
public $TreasureDamageValue3;

private function initialize() 
{

$myPosition = GladiatorGetPosition::getPosition();
$Gladiator1 = $myPosition->Positionvalue1;
$Gladiator2 = $myPosition->Positionvalue2;
$Gladiator3 = $myPosition->Positionvalue3;

$myHitPoints = GladiatorGetHitPoints::getHitPoints();
$CurrentHitPoints1 = $myHitPoints->HitPointsValue1;
$CurrentHitPoints2 = $myHitPoints->HitPointsValue2;
$CurrentHitPoints3 = $myHitPoints->HitPointsValue3;

   $TreasurePoints = rand(2, 10);

   if ($Gladiator1 == "89"){$TDamage1 = $TreasurePoints;} else{$TDamage1 = 0;}
   if ($Gladiator2 == "89"){$TDamage2 = $TreasurePoints;} else{$TDamage2 = 0;}
   if ($Gladiator3 == "89"){$TDamage3 = $TreasurePoints;} else{$TDamage3 = 0;}

    $this->TreasureDamageValue1 = $TDamage1;
    $this->TreasureDamageValue2 = $TDamage2;
    $this->TreasureDamageValue3 = $TDamage3;
}

public function getTreasureDamage()
{
    if (!isset(self::$TreasureDamage))
    {
        $class = __CLASS__;
        self::$TreasureDamage = new $class();
        self::$TreasureDamage->initialize();
    }
    return self::$TreasureDamage;
}
}

?>