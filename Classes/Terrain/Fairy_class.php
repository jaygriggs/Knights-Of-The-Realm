<?php

class Fairy extends Mapobject_class
{
  
   protected function getValue() {
        return "true";
    }

}

class GettheFairyPosition 
{

private static $FairyPosition;
public $FairyValue;

private function initialize() 
{

$Fairyspot =  range(0,100);
$FairyRandom =array_rand($Fairyspot,1);

    $this->FairyValue = $FairyRandom;

}

public function getFairyPosition()
{
    if (!isset(self::$FairyPosition))
    {
        $class = __CLASS__;
        self::$FairyPosition = new $class();
        self::$FairyPosition->initialize();
    }
    return self::$FairyPosition;
}
}

class GladiatorGetFairyDamage 
{

private static $FairyDamage;
public $FairyDamageValue1;
public $FairyDamageValue2;
public $FairyDamageValue3;

private function initialize() 
{

$myPosition = GladiatorGetPosition::getPosition();
$Gladiator1 = $myPosition->Positionvalue1;
$Gladiator2 = $myPosition->Positionvalue2;
$Gladiator3 = $myPosition->Positionvalue3;
$myFairyPosition = GettheFairyPosition::getFairyPosition();
$Fairyspot = $myFairyPosition->FairyValue;

   $FairyPoints = rand(5, 30);

   if ($Gladiator1 == $Fairyspot){$FairyDamageValue1 = $FairyPoints;} else{$FairyDamageValue1 = 0;}
   if ($Gladiator2 == $Fairyspot){$FairyDamageValue2 = $FairyPoints;} else{$FairyDamageValue2 = 0;}
   if ($Gladiator3 == $Fairyspot){$FairyDamageValue3 = $FairyPoints;} else{$FairyDamageValue3 = 0;}

    $this->FairyDamageValue1 = $FairyDamageValue1;
    $this->FairyDamageValue2 = $FairyDamageValue2;
    $this->FairyDamageValue3 = $FairyDamageValue3;
}

public function getFairyDamage()
{
    if (!isset(self::$FairyDamage))
    {
        $class = __CLASS__;
        self::$FairyDamage = new $class();
        self::$FairyDamage->initialize();
    }
    return self::$FairyDamage;
}
}

?>