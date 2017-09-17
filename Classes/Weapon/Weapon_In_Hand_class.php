<?php

class Gladiator1GetGlad1WeaponHandstats 
{

private static $Glad1WeaponHandstats;
public $Glad1WeaponHandstatsValue1;
public $Glad1WeaponHandstatsValue2;
public $Glad1WeaponHandstatsValue3;
public $Glad1WeaponHandstatsValue4;
public $Glad1WeaponHandstatsValue5;
public $Glad1WeaponHandstatsValue6;

private function initialize() 
{

 $Glad1WeaponHand = $_SESSION["Glad1BP1"];

switch($Glad1WeaponHand) {
case "Sword":
   $Glad1WeaponMin = 4;
   $Glad1WeaponMax = 15;
   $Glad1WeaponDur = 6;
   $Glad1WeaponRes = 6;
   $Glad1WeaponRan = 0;
   $Glad1WeaponImg = "<img src=\"images/smallsword.png\"/>";
   break;
case "Mace":
   $Glad1WeaponMin = 2;
   $Glad1WeaponMax = 10;
   $Glad1WeaponDur = 4;
   $Glad1WeaponRes = 4;
   $Glad1WeaponRan = 0;
   $Glad1WeaponImg = "<img src=\"images/smallmace.png\"/>";
   break;
case "Banana":
   $Glad1WeaponMin = 2;
   $Glad1WeaponMax = 5;
   $Glad1WeaponDur = 3;
   $Glad1WeaponRes = 2;
   $Glad1WeaponRan = 0;
   $Glad1WeaponImg = "<img src=\"images/smallbanana.png\"/>";
   break;
   case "Bow and Arrow":
   $Glad1WeaponMin = 2;
   $Glad1WeaponMax = 8;
   $Glad1WeaponDur = 6;
   $Glad1WeaponRes = 4;
   $Glad1WeaponRan = 1;
   $Glad1WeaponImg = "<img src=\"images/smallbowandarrow.png\"/>";
   break;
    case "Axe":
   $Glad1WeaponMin = 5;
   $Glad1WeaponMax = 15;
   $Glad1WeaponDur = 6;
   $Glad1WeaponRes = 6;
   $Glad1WeaponRan = 0;
   $Glad1WeaponImg = "<img src=\"images/smallaxe.png\"/>";
   break;
    case "Hammer":
   $Glad1WeaponMin = 4;
   $Glad1WeaponMax = 14;
   $Glad1WeaponDur = 5;
   $Glad1WeaponRes = 4;
   $Glad1WeaponRan = 0;
   $Glad1WeaponImg = "<img src=\"images/smallhammer.png\"/>";
   break;
    case "Knife":
   $Glad1WeaponMin = 2;
   $Glad1WeaponMax = 10;
   $Glad1WeaponDur = 4;
   $Glad1WeaponRes = 2;
   $Glad1WeaponRan = 0;
   $Glad1WeaponImg = "<img src=\"images/smallknife.png\"/>";
   break;
    case "Spear":
   $Glad1WeaponMin = 3;
   $Glad1WeaponMax = 12;
   $Glad1WeaponDur = 4;
   $Glad1WeaponRes = 4;
   $Glad1WeaponRan = 1;
   $Glad1WeaponImg = "<img src=\"images/smallspear.png\"/>";
   break;
    case "Club":
   $Glad1WeaponMin = 2;
   $Glad1WeaponMax = 12;
   $Glad1WeaponDur = 3;
   $Glad1WeaponRes = 4;
   $Glad1WeaponRan = 0;
   $Glad1WeaponImg = "<img src=\"images/smallclub.png\"/>";
   break;
   case "Magic":
   $Glad1WeaponMin = 2;
   $Glad1WeaponMax = 10;
   $Glad1WeaponDur = 4;
   $Glad1WeaponRes = 2;
   $Glad1WeaponRan = 1;
   $Glad1WeaponImg = "<img src=\"images/smallmagic.png\"/>";
   break;
    case "Dagger":
   $Glad1WeaponMin = 4;
   $Glad1WeaponMax = 14;
   $Glad1WeaponDur = 4;
   $Glad1WeaponRes = 2;
   $Glad1WeaponRan = 0;
   $Glad1WeaponImg = "<img src=\"images/smalldagger.png\"/>";
   break;
 case "Excalibur":
   $Glad1WeaponMin = 6;
   $Glad1WeaponMax = 18;
   $Glad1WeaponDur = 7;
   $Glad1WeaponRes = 0;
   $Glad1WeaponRan = 0;
   $Glad1WeaponImg = "<img src=\"images/smallexcalibur.png\"/>";
   break;
 case "Hands":
   $Glad1WeaponMin = 2;
   $Glad1WeaponMax = 4;
   $Glad1WeaponDur = 5;
   $Glad1WeaponRes = 2;
   $Glad1WeaponRan = 0;
   $Glad1WeaponImg = "<img src=\"images/smallhand.png\"/>";
break;

}

if(isset($_SESSION['Gladiator1WHMIN']) && !empty($_SESSION['Gladiator1WHMIN'])) { $Glad1WeaponMin = $_SESSION["Gladiator1WHMIN"];}
         else{$this->Glad1WeaponHandstatsValue1 = $Glad1WeaponMin;}
if(isset($_SESSION['Gladiator1WHMAX']) && !empty($_SESSION['Gladiator1WHMAX'])) { $Glad1WeaponMax = $_SESSION["Gladiator1WHMAX"];}
         else{$this->Glad1WeaponHandstatsValue2 = $Glad1WeaponMax;}
if(isset($_SESSION['Gladiator1WHDUR']) && !empty($_SESSION['Gladiator1WHDUR'])) { $Glad1WeaponDur = $_SESSION["Gladiator1WHDUR"];}
         else{$this->Glad1WeaponHandstatsValue3 = $Glad1WeaponDur;}
if(isset($_SESSION['Gladiator1WHRES']) && !empty($_SESSION['Gladiator1WHRES'])) { $Glad1WeaponRes = $_SESSION["Gladiator1WHRES"];}
         else{$this->Glad1WeaponHandstatsValue4 = $Glad1WeaponRes;}
if(isset($_SESSION['Gladiator1WHRAN']) && !empty($_SESSION['Gladiator1WHRAN'])) { $Glad1WeaponRan = $_SESSION["Gladiator1WHRAN"];}
         else{$this->Glad1WeaponHandstatsValue5 = $Glad1WeaponRan;}
if(isset($_SESSION['Gladiator1WHIMG']) && !empty($_SESSION['Gladiator1WHIMG'])) { $Glad1WeaponImg = $_SESSION["Gladiator1WHIMG"];}
         else{$this->Glad1WeaponHandstatsValue6 = $Glad1WeaponImg;}


    $this->Glad1WeaponHandstatsValue1 = $Glad1WeaponMin;
    $this->Glad1WeaponHandstatsValue2 = $Glad1WeaponMax;   
    $this->Glad1WeaponHandstatsValue3 = $Glad1WeaponDur;
    $this->Glad1WeaponHandstatsValue4 = $Glad1WeaponRes;
    $this->Glad1WeaponHandstatsValue5 = $Glad1WeaponRan;
    $this->Glad1WeaponHandstatsValue6 = $Glad1WeaponImg;
    

$_SESSION["Gladiator1WHMIN"] = $Glad1WeaponMin;
$_SESSION["Gladiator1WHMAX"] = $Glad1WeaponMax;
$_SESSION["Gladiator1WHDUR"] = $Glad1WeaponDur;
$_SESSION["Gladiator1WHRES"] = $Glad1WeaponRes;
$_SESSION["Gladiator1WHRAN"] = $Glad1WeaponRan;
$_SESSION["Gladiator1WHIMG"] = $Glad1WeaponImg;


}

public function getGlad1WeaponHandstats()
{
    if (!isset(self::$Glad1WeaponHandstats))
    {
        $class = __CLASS__;
        self::$Glad1WeaponHandstats = new $class();
        self::$Glad1WeaponHandstats->initialize();
    }
    return self::$Glad1WeaponHandstats;
}
}


class Gladiator2GetGlad2WeaponHandstats 
{

private static $Glad2WeaponHandstats;
public $Glad2WeaponHandstatsValue1;
public $Glad2WeaponHandstatsValue2;
public $Glad2WeaponHandstatsValue3;
public $Glad2WeaponHandstatsValue4;
public $Glad2WeaponHandstatsValue5;
public $Glad2WeaponHandstatsValue6;

private function initialize() 
{
    $Glad2WeaponHand = $_SESSION["Gladiator2BPA"];


switch($Glad2WeaponHand) {
case "Sword":
   $Glad2WeaponMin = 4;
   $Glad2WeaponMax = 15;
   $Glad2WeaponDur = 6;
   $Glad2WeaponRes = 6;
   $Glad2WeaponRan = 0;
   $Glad2WeaponImg = "<img src=\"images/smallsword.png\"/>";
   break;
case "Mace":
   $Glad2WeaponMin = 2;
   $Glad2WeaponMax = 10;
   $Glad2WeaponDur = 4;
   $Glad2WeaponRes = 4;
   $Glad2WeaponRan = 0;
   $Glad2WeaponImg = "<img src=\"images/smallmace.png\"/>";
   break;
case "Banana":
   $Glad2WeaponMin = 2;
   $Glad2WeaponMax = 5;
   $Glad2WeaponDur = 3;
   $Glad2WeaponRes = 2;
   $Glad2WeaponRan = 0;
   $Glad2WeaponImg = "<img src=\"images/smallbanana.png\"/>";
   break;
   case "Bow and Arrow":
   $Glad2WeaponMin = 2;
   $Glad2WeaponMax = 8;
   $Glad2WeaponDur = 6;
   $Glad2WeaponRes = 4;
   $Glad2WeaponRan = 1;
   $Glad2WeaponImg = "<img src=\"images/smallbowandarrow.png\"/>";
   break;
    case "Axe":
   $Glad2WeaponMin = 5;
   $Glad2WeaponMax = 15;
   $Glad2WeaponDur = 6;
   $Glad2WeaponRes = 6;
   $Glad2WeaponRan = 0;
   $Glad2WeaponImg = "<img src=\"images/smallaxe.png\"/>";
   break;
    case "Hammer":
   $Glad2WeaponMin = 4;
   $Glad2WeaponMax = 14;
   $Glad2WeaponDur = 5;
   $Glad2WeaponRes = 4;
   $Glad2WeaponRan = 0;
   $Glad2WeaponImg = "<img src=\"images/smallhammer.png\"/>";
   break;
    case "Knife":
   $Glad2WeaponMin = 2;
   $Glad2WeaponMax = 10;
   $Glad2WeaponDur = 4;
   $Glad2WeaponRes = 2;
   $Glad2WeaponRan = 0;
   $Glad2WeaponImg = "<img src=\"images/smallknife.png\"/>";
   break;
    case "Spear":
   $Glad2WeaponMin = 3;
   $Glad2WeaponMax = 12;
   $Glad2WeaponDur = 4;
   $Glad2WeaponRes = 4;
   $Glad2WeaponRan = 1;
   $Glad2WeaponImg = "<img src=\"images/smallspear.png\"/>";
   break;
    case "Club":
   $Glad2WeaponMin = 2;
   $Glad2WeaponMax = 12;
   $Glad2WeaponDur = 3;
   $Glad2WeaponRes = 4;
   $Glad2WeaponRan = 0;
   $Glad2WeaponImg = "<img src=\"images/smallclub.png\"/>";
   break;
   case "Magic":
   $Glad2WeaponMin = 2;
   $Glad2WeaponMax = 10;
   $Glad2WeaponDur = 4;
   $Glad2WeaponRes = 2;
   $Glad2WeaponRan = 1;
   $Glad2WeaponImg = "<img src=\"images/smallmagic.png\"/>";
   break;
    case "Dagger":
   $Glad2WeaponMin = 4;
   $Glad2WeaponMax = 14;
   $Glad2WeaponDur = 4;
   $Glad2WeaponRes = 2;
   $Glad2WeaponRan = 0;
   $Glad2WeaponImg = "<img src=\"images/smalldagger.png\"/>";
   break;
 case "Excalibur":
   $Glad2WeaponMin = 6;
   $Glad2WeaponMax = 18;
   $Glad2WeaponDur = 7;
   $Glad2WeaponRes = 0;
   $Glad2WeaponRan = 0;
   $Glad2WeaponImg = "<img src=\"images/smallexcalibur.png\"/>";
   break;
 case "Hands":
   $Glad2WeaponMin = 2;
   $Glad2WeaponMax = 4;
   $Glad2WeaponDur = 5;
   $Glad2WeaponRes = 2;
   $Glad2WeaponRan = 0;
   $Glad2WeaponImg = "<img src=\"images/smallhand.png\"/>";
break;

}

if(isset($_SESSION['Glad2WHMIN']) && !empty($_SESSION['Glad2WHMIN'])) { $Glad2WeaponMin = $_SESSION["Glad2WHMIN"];}
         else{$this->Glad2WeaponHandstatsValue1 = $Glad2WeaponMin;}
if(isset($_SESSION['Glad2WHMAX']) && !empty($_SESSION['Glad2WHMAX'])) { $Glad2WeaponMax = $_SESSION["Glad2WHMAX"];}
         else{$this->Glad2WeaponHandstatsValue2 = $Glad2WeaponMax;}
if(isset($_SESSION['Glad2WHDUR']) && !empty($_SESSION['Glad2WHDUR'])) { $Glad2WeaponDur = $_SESSION["Glad2WHDUR"];}
         else{$this->Glad2WeaponHandstatsValue3 = $Glad2WeaponDur;}
if(isset($_SESSION['Glad2WHRES']) && !empty($_SESSION['Glad2WHRES'])) { $Glad2WeaponRes = $_SESSION["Glad2WHRES"];}
         else{$this->Glad2WeaponHandstatsValue4 = $Glad2WeaponRes;}
if(isset($_SESSION['Glad2WHRAN']) && !empty($_SESSION['Glad2WHRAN'])) { $Glad2WeaponRan = $_SESSION["Glad2WHRAN"];}
         else{$this->Glad2WeaponHandstatsValue5 = $Glad2WeaponRan;}
if(isset($_SESSION['Glad2WHIMG']) && !empty($_SESSION['Glad2WHIMG'])) { $Glad2WeaponImg = $_SESSION["Glad2WHIMG"];}
         else{$this->Glad2WeaponHandstatsValue6 = $Glad2WeaponImg;}

    $this->Glad2WeaponHandstatsValue1 = $Glad2WeaponMin;
    $this->Glad2WeaponHandstatsValue2 = $Glad2WeaponMax;
    $this->Glad2WeaponHandstatsValue3 = $Glad2WeaponDur;
    $this->Glad2WeaponHandstatsValue4 = $Glad2WeaponRes;
    $this->Glad2WeaponHandstatsValue5 = $Glad2WeaponRan;
    $this->Glad2WeaponHandstatsValue6 = $Glad2WeaponImg;
    

$_SESSION["Glad2WHMIN"] = $Glad2WeaponMin;
$_SESSION["Glad2WHMAX"] = $Glad2WeaponMax;
$_SESSION["Glad2WHDUR"] = $Glad2WeaponDur;
$_SESSION["Glad2WHRES"] = $Glad2WeaponRes;
$_SESSION["Glad2WHRAN"] = $Glad2WeaponRan;
$_SESSION["Glad2WHIMG"] = $Glad2WeaponImg;

    
}

public function getGlad2WeaponHandstats()
{
    if (!isset(self::$Glad2WeaponHandstats))
    {
        $class = __CLASS__;
        self::$Glad2WeaponHandstats = new $class();
        self::$Glad2WeaponHandstats->initialize();
    }
    return self::$Glad2WeaponHandstats;
}
}

class Gladiator3GetGlad3WeaponHandstats 
{

private static $Glad3WeaponHandstats;
public $Glad3WeaponHandstatsValue1;
public $Glad3WeaponHandstatsValue2;
public $Glad3WeaponHandstatsValue3;
public $Glad3WeaponHandstatsValue4;
public $Glad3WeaponHandstatsValue5;
public $Glad3WeaponHandstatsValue6;

private function initialize() 
{
   
$Glad3WeaponHand = $_SESSION["Gladiator3BP1"];

switch($Glad3WeaponHand) {
case "Sword":
   $Glad3WeaponMin = 4;
   $Glad3WeaponMax = 15;
   $Glad3WeaponDur = 6;
   $Glad3WeaponRes = 6;
   $Glad3WeaponRan = 0;
   $Glad3WeaponImg = "<img src=\"images/smallsword.png\"/>";
   break;
case "Mace":
   $Glad3WeaponMin = 2;
   $Glad3WeaponMax = 10;
   $Glad3WeaponDur = 4;
   $Glad3WeaponRes = 4;
   $Glad3WeaponRan = 0;
   $Glad3WeaponImg = "<img src=\"images/smallmace.png\"/>";
   break;
case "Banana":
   $Glad3WeaponMin = 2;
   $Glad3WeaponMax = 5;
   $Glad3WeaponDur = 3;
   $Glad3WeaponRes = 2;
   $Glad3WeaponRan = 0;
   $Glad3WeaponImg = "<img src=\"images/smallbanana.png\"/>";
   break;
   case "Bow and Arrow":
   $Glad3WeaponMin = 2;
   $Glad3WeaponMax = 8;
   $Glad3WeaponDur = 6;
   $Glad3WeaponRes = 4;
   $Glad3WeaponRan = 1;
   $Glad3WeaponImg = "<img src=\"images/smallbowandarrow.png\"/>";
   break;
    case "Axe":
   $Glad3WeaponMin = 5;
   $Glad3WeaponMax = 15;
   $Glad3WeaponDur = 6;
   $Glad3WeaponRes = 6;
   $Glad3WeaponRan = 0;
   $Glad3WeaponImg = "<img src=\"images/smallaxe.png\"/>";
   break;
    case "Hammer":
   $Glad3WeaponMin = 4;
   $Glad3WeaponMax = 14;
   $Glad3WeaponDur = 5;
   $Glad3WeaponRes = 4;
   $Glad3WeaponRan = 0;
   $Glad3WeaponImg = "<img src=\"images/smallhammer.png\"/>";
   break;
    case "Knife":
   $Glad3WeaponMin = 2;
   $Glad3WeaponMax = 10;
   $Glad3WeaponDur = 4;
   $Glad3WeaponRes = 2;
   $Glad3WeaponRan = 0;
   $Glad3WeaponImg = "<img src=\"images/smallknife.png\"/>";
   break;
    case "Spear":
   $Glad3WeaponMin = 3;
   $Glad3WeaponMax = 12;
   $Glad3WeaponDur = 4;
   $Glad3WeaponRes = 4;
   $Glad3WeaponRan = 1;
   $Glad3WeaponImg = "<img src=\"images/smallspear.png\"/>";
   break;
    case "Club":
   $Glad3WeaponMin = 2;
   $Glad3WeaponMax = 12;
   $Glad3WeaponDur = 3;
   $Glad3WeaponRes = 4;
   $Glad3WeaponRan = 0;
   $Glad3WeaponImg = "<img src=\"images/smallclub.png\"/>";
   break;
   case "Magic":
   $Glad3WeaponMin = 2;
   $Glad3WeaponMax = 10;
   $Glad3WeaponDur = 4;
   $Glad3WeaponRes = 2;
   $Glad3WeaponRan = 1;
   $Glad3WeaponImg = "<img src=\"images/smallmagic.png\"/>";
   break;
    case "Dagger":
   $Glad3WeaponMin = 4;
   $Glad3WeaponMax = 14;
   $Glad3WeaponDur = 4;
   $Glad3WeaponRes = 2;
   $Glad3WeaponRan = 0;
   $Glad3WeaponImg = "<img src=\"images/smalldagger.png\"/>";
   break;
 case "Excalibur":
   $Glad3WeaponMin = 6;
   $Glad3WeaponMax = 18;
   $Glad3WeaponDur = 7;
   $Glad3WeaponRes = 0;
   $Glad3WeaponRan = 0;
   $Glad3WeaponImg = "<img src=\"images/smallexcalibur.png\"/>";
   break;
 case "Hands":
   $Glad3WeaponMin = 2;
   $Glad3WeaponMax = 4;
   $Glad3WeaponDur = 5;
   $Glad3WeaponRes = 2;
   $Glad3WeaponRan = 0;
   $Glad3WeaponImg = "<img src=\"images/smallhand.png\"/>";
break;

}

if(isset($_SESSION['Glad3WHandMIN']) && !empty($_SESSION['Glad3WHandMIN'])) { $Glad3WeaponMin = $_SESSION["Glad3WHandMIN"];}
         else{$this->Glad3WeaponHandstatsValue1 = $Glad3WeaponMin;}
if(isset($_SESSION['Glad3WHandMAX']) && !empty($_SESSION['Glad3WHandMAX'])) { $Glad3WeaponMax = $_SESSION["Glad3WHandMAX"];}
         else{$this->Glad3WeaponHandstatsValue2 = $Glad3WeaponMax;}
if(isset($_SESSION['Glad3WHandDUR']) && !empty($_SESSION['Glad3WHandDUR'])) { $Glad3WeaponDur = $_SESSION["Glad3WHandDUR"];}
         else{$this->Glad3WeaponHandstatsValue3 = $Glad3WeaponDur;}
if(isset($_SESSION['Glad3WHandRES']) && !empty($_SESSION['Glad3WHandRES'])) { $Glad3WeaponRes = $_SESSION["Glad3WHandRES"];}
         else{$this->Glad3WeaponHandstatsValue4 = $Glad3WeaponRes;}
if(isset($_SESSION['Glad3WHandRAN']) && !empty($_SESSION['Glad3WHandRAN'])) { $Glad3WeaponRan = $_SESSION["Glad3WHandRAN"];}
         else{$this->Glad3WeaponHandstatsValue5 = $Glad3WeaponRan;}
if(isset($_SESSION['Glad3WHandIMG']) && !empty($_SESSION['Glad3WHandIMG'])) { $Glad3WeaponImg = $_SESSION["Glad3WHandIMG"];}
         else{$this->Glad3WeaponHandstatsValue6 = $Glad3WeaponImg;}

    $this->Glad3WeaponHandstatsValue1 = $Glad3WeaponMin;
    $this->Glad3WeaponHandstatsValue2 = $Glad3WeaponMax;
    $this->Glad3WeaponHandstatsValue3 = $Glad3WeaponDur;
    $this->Glad3WeaponHandstatsValue4 = $Glad3WeaponRes;
    $this->Glad3WeaponHandstatsValue5 = $Glad3WeaponRan;
    $this->Glad3WeaponHandstatsValue6 = $Glad3WeaponImg;


$_SESSION["Glad3WHandMIN"] = $Glad3WeaponMin;
$_SESSION["Glad3WHandMAX"] = $Glad3WeaponMax;
$_SESSION["Glad3WHandDUR"] = $Glad3WeaponDur;
$_SESSION["Glad3WHandRES"] = $Glad3WeaponRes;
$_SESSION["Glad3WHandRAN"] = $Glad3WeaponRan;
$_SESSION["Glad3WHandIMG"] = $Glad3WeaponImg;

    
}

public function getGlad3WeaponHandstats()
{
    if (!isset(self::$Glad3WeaponHandstats))
    {
        $class = __CLASS__;
        self::$Glad3WeaponHandstats = new $class();
        self::$Glad3WeaponHandstats->initialize();
    }
    return self::$Glad3WeaponHandstats;
}
}

?>