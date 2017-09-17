<?php

class Gladiator1GetBackpack 
{

private static $Backpack;
public $BackpackValueA1;
public $BackpackValueA2;
public $BackpackValueA3;

private function initialize() 
{

// array to pick 3 random weapons
 $Weapons=array("Spear","Axe","Sword","Mace","Hammer","Excalibur","Bow and Arrow","Knife","Banana","Club","Dagger","Magic");
                  $random_keys1=array_rand($Weapons,3);
                  shuffle ($random_keys1);
               
if(isset($_SESSION['Glad1BP1']) && !empty($_SESSION['Glad1BP1'])) {
    $Weapons[$random_keys1[0]] = $_SESSION["Glad1BP1"];}
 else{ $this->BackpackValueA1 = $Weapons[$random_keys1[0]];}

   if(isset($_SESSION['Glad1BP2']) && !empty($_SESSION['Glad1BP2'])) {
    $Weapons[$random_keys1[1]] = $_SESSION["Glad1BP2"];}
    else{ $this->BackpackValueA2 = $Weapons[$random_keys1[1]];}

   if(isset($_SESSION['Glad1BP3']) && !empty($_SESSION['Glad1BP3'])) {
    $Weapons[$random_keys1[2]] = $_SESSION["Glad1BP3"];}
    else{ $this->BackpackValueA3 = $Weapons[$random_keys1[2]];}
   

$_SESSION["Glad1BP1"] = $Weapons[$random_keys1[0]];
unset($_SESSION["Weaponbroke1stat"]); 
$_SESSION["Weaponbroke1stat"] = $Weapons[$random_keys1[0]];
$_SESSION["Glad1BP2"] = $Weapons[$random_keys1[1]];
$_SESSION["Glad1BP3"] = $Weapons[$random_keys1[2]];

}

public function getBackpack()
{
    if (!isset(self::$Backpack))
    {
        $class = __CLASS__;
        self::$Backpack = new $class();
        self::$Backpack->initialize();
    }
    return self::$Backpack;
}
}

$myBackpack = Gladiator1GetBackpack::getBackpack();
$Glad1BP1 = $myBackpack->BackpackValueA1;
$Glad1BP2 = $myBackpack->BackpackValueA2;
$Glad1BP3 = $myBackpack->BackpackValueA3;

class Gladiator2GetBackPack2nd 
{

private static $BackPack2nd;
public $Backpack2ndValue1;
public $Backpack2ndValue2;
public $Backpack2ndValue3;
private function initialize() 
{


$Weaponsglad2=array("Spear","Excalibur","Mace","Hammer","Club","Dagger","Magic","Bow and Arrow","Knife","Banana","Axe","Sword");
                  $random_keysB=array_rand($Weaponsglad2,3);
                  shuffle ($random_keysB);

              
if(isset($_SESSION['Gladiator2BPA']) && !empty($_SESSION['Gladiator2BPA'])) {
    $Weaponsglad2[$random_keysB[0]] = $_SESSION["Gladiator2BPA"];}
    else{ $this->Backpack2ndValue1 = $Weaponsglad2[$random_keysB[0]];}

   if(isset($_SESSION['Gladiator2BPB']) && !empty($_SESSION['Gladiator2BPB'])) {
    $Weaponsglad2[$random_keysB[1]] = $_SESSION["Gladiator2BPB"];}
    else{ $this->Backpack2ndValue2 = $Weaponsglad2[$random_keysB[1]];}

   if(isset($_SESSION['Gladiator2BPC']) && !empty($_SESSION['Gladiator2BPC'])) {
    $Weaponsglad2[$random_keysB[2]] = $_SESSION["Gladiator2BPC"];}
    else{ $this->Backpack2ndValue3 = $Weaponsglad2[$random_keysB[2]];}
   
  
$_SESSION["Gladiator2BPA"] = $Weaponsglad2[$random_keysB[0]];
unset($_SESSION["Weaponbroke2stat"]); 
$_SESSION["Weaponbroke2stat"] = $Weaponsglad2[$random_keysB[0]];
$_SESSION["Gladiator2BPB"] = $Weaponsglad2[$random_keysB[1]];
$_SESSION["Gladiator2BPC"] = $Weaponsglad2[$random_keysB[2]];

}


public function getBackPack2nd()
{
    if (!isset(self::$BackPack2nd))
    {
        $class = __CLASS__;
        self::$BackPack2nd = new $class();
        self::$BackPack2nd->initialize();
    }
    return self::$BackPack2nd;
}
}

$myBackPack2nd = Gladiator2GetBackPack2nd::getBackPack2nd();
$Gladiator2BPA = $myBackPack2nd->Backpack2ndValue1;
$Gladiator2BPB = $myBackPack2nd->Backpack2ndValue2;
$Gladiator2BPC = $myBackPack2nd->Backpack2ndValue3;


class GladiatorGetGladiator3bp 
{

private static $Gladiator3bp;
public $Glad3BPValue1;
public $Glad3BPValue2;
public $Glad3BPValue3;

private function initialize() 
{

$Weaponglad3=array("Bow and Arrow","Sword","Spear","Excalibur","Mace","Hammer","Club","Knife","Banana","Axe","Dagger","Magic");
                  $random_keysC=array_rand($Weaponglad3,3);
                  shuffle ($random_keysC);

if(isset($_SESSION['Gladiator3BP1']) && !empty($_SESSION['Gladiator3BP1'])) {
    $Weaponglad3[$random_keysC[0]] = $_SESSION["Gladiator3BP1"];}
    else{ $this->Glad3BPValue1 = $Weaponglad3[$random_keysC[0]];}

   if(isset($_SESSION['Gladiator3BP2']) && !empty($_SESSION['Gladiator3BP2'])) {
    $Weaponglad3[$random_keysC[1]] = $_SESSION["Gladiator3BP2"];}
    else{ $this->Glad3BPValue2 = $Weaponglad3[$random_keysC[1]];}

   if(isset($_SESSION['Gladiator3BP3']) && !empty($_SESSION['Gladiator3BP3'])) {
    $Weaponglad3[$random_keysC[2]] = $_SESSION["Gladiator3BP3"];}
    else{ $this->Glad3BPValue3 = $Weaponglad3[$random_keysC[2]];}
   

$_SESSION["Gladiator3BP1"] = $Weaponglad3[$random_keysC[0]];
unset($_SESSION["Weaponbroke3stat"]); 
$_SESSION["Weaponbroke3stat"] = $Weaponglad3[$random_keysC[0]];
$_SESSION["Gladiator3BP2"] = $Weaponglad3[$random_keysC[1]];
$_SESSION["Gladiator3BP3"] = $Weaponglad3[$random_keysC[2]];

}

public function getGladiator3bp()
{
    if (!isset(self::$Gladiator3bp))
    {
        $class = __CLASS__;
        self::$Gladiator3bp = new $class();
        self::$Gladiator3bp->initialize();
    }
    return self::$Gladiator3bp;
}
}

$myGladiator3bp = GladiatorGetGladiator3bp::getGladiator3bp();
$Gladiator3BPValue1 = $myGladiator3bp->Glad3BPValue1;
$Gladiator3BPValue2 = $myGladiator3bp->Glad3BPValue2;
$Gladiator3BPValue3 = $myGladiator3bp->Glad3BPValue3;

?>