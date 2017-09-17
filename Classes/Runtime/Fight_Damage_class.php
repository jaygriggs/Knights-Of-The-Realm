<?php

class GladiatorGetfarFighting 
{

private static $farFighting;
public $FarFightingValue1;
public $FarFightingValue2;
public $FarFightingValue3;
public $FarFightingValue4;
public $FarFightingValue5;
public $FarFightingValue6;

private function initialize() 
{

$myPosition = GladiatorGetPosition::getPosition();
$Gladiator1 = $myPosition->Positionvalue1;
$Gladiator2 = $myPosition->Positionvalue2;
$Gladiator3 = $myPosition->Positionvalue3;

$fight12 = 0;
$fight13 = 0;
$fight21 = 0;
$fight23 = 0;
$fight31 = 0;
$fight32 = 0;
$ffar12 = 0;
$ffar13 = 0;
$ffar21 = 0;
$ffar23 = 0;
$ffar31 = 0;
$ffar32 = 0;
$isdead1=0;
$isdead2=0;
$isdead3=0;
$Gladcanattack1=0;
$Gladcanattack2=0;
$Gladcanattack3=0;
if(isset($_SESSION['Gladisdead1']) && !empty($_SESSION['Gladisdead1']) && $_SESSION["Gladisdead1"] == "1" ){$isdead1 =1; }
if(isset($_SESSION['Gladisdead2']) && !empty($_SESSION['Gladisdead2']) && $_SESSION["Gladisdead2"] == "1" ){$isdead2 =1; }
if(isset($_SESSION['Gladisdead3']) && !empty($_SESSION['Gladisdead3']) && $_SESSION["Gladisdead3"] == "1" ){$isdead3 =1; }
if(isset($_SESSION['ResetW1']) && !empty($_SESSION['ResetW1']) && $_SESSION["ResetW1"] == "1" ){$Gladcanattack1 =1;}
if(isset($_SESSION['ResetW2']) && !empty($_SESSION['ResetW2']) && $_SESSION["ResetW2"] == "1" ){$Gladcanattack2 =1;}
if(isset($_SESSION['ResetW3']) && !empty($_SESSION['ResetW3']) && $_SESSION["ResetW3"] == "1" ){$Gladcanattack3 =1;}

if (($_SESSION["Glad1BP1"] == "Magic" && $isdead1 == 0) || ($_SESSION["Glad1BP1"] == "Spear" && $isdead1 == 0) || ($_SESSION["Glad1BP1"] == "Bow and Arrow" && $isdead1 == 0 ))
{$Iseligible1 = "1";} else {$Iseligible1 = "0";}
if (($_SESSION["Gladiator2BPA"] == "Magic" && $isdead2 == 0) || ($_SESSION["Gladiator2BPA"] == "Spear" && $isdead2 == 0) || ($_SESSION["Gladiator2BPA"] == "Bow and Arrow" &&  $isdead2 == 0))
{$Iseligible2 = "1";} else {$Iseligible2 = "0";}
if (($_SESSION["Gladiator3BP1"] == "Magic" && $isdead3 == 0) || ($_SESSION["Gladiator3BP1"] == "Spear" && $isdead3 == 0) || ($_SESSION["Gladiator3BP1"] == "Bow and Arrow" 
    && $isdead3 == 0))
{$Iseligible3 = "1";} else {$Iseligible3 = "0";}


if (($Gladiator1 - 2 ==  $Gladiator2) || ($Gladiator1 + 2 ==  $Gladiator2) || ($Gladiator1 - 20 ==  $Gladiator2) || ($Gladiator1 + 20 ==  $Gladiator2))
{$ffar12 = "1";} else {$ffar12 = "0";}
if (($Gladiator1 - 2 ==  $Gladiator3) || ($Gladiator1 + 2 ==  $Gladiator3) || ($Gladiator1 - 20 ==  $Gladiator3) || ($Gladiator1 + 20 ==  $Gladiator3))
{$ffar13 = "1";} else {$ffar13 = "0";}
if (($Gladiator2 - 2 ==  $Gladiator1) || ($Gladiator2 + 2 ==  $Gladiator1) || ($Gladiator2 - 20 ==  $Gladiator1) || ($Gladiator2 + 20 ==  $Gladiator1))
{$ffar21 = "1";} else {$ffar21 = "0";}
if (($Gladiator2 - 2 ==  $Gladiator3) || ($Gladiator2 + 2 ==  $Gladiator3) || ($Gladiator2 - 20 ==  $Gladiator3) || ($Gladiator2 + 20 ==  $Gladiator3))
{$ffar23 = "1";} else {$ffar23 = "0";}
if (($Gladiator3 - 2 ==  $Gladiator1) || ($Gladiator3 + 2 ==  $Gladiator1) || ($Gladiator3 - 20 ==  $Gladiator1) || ($Gladiator3 + 20 ==  $Gladiator1))
{$ffar31 = "1";} else {$ffar31 = "0";}
if (($Gladiator3 - 2 ==  $Gladiator2) || ($Gladiator3 + 2 ==  $Gladiator2) || ($Gladiator3 - 20 ==  $Gladiator2) || ($Gladiator3 + 20 ==  $Gladiator2))
{$ffar32 = "1";} else {$ffar32 = "0";}


if (($Iseligible1 == "1") && ($ffar12 == "1") && ($Gladcanattack1 == "1")) {$fight12 = "1"; 
unset($_SESSION['ResetW1']); unset($_SESSION['resetturns1']);}  
elseif (($Iseligible1 == "0") && ($ffar12 == "1") && ($Gladcanattack1 == "1")) {$fight12 = "0";} 
else {$fight12 = "0";} 
if (($Iseligible1 == "1") && ($ffar13 == "1") && ($Gladcanattack1 == "1")) {$fight13 = "1";
 unset($_SESSION['ResetW1']); unset($_SESSION['resetturns1']);}
elseif (($Iseligible1 == "0") && ($ffar13 == "1") && ($Gladcanattack1 == "1")) {$fight13 = "0";} 
else {$fight13 = "0";} 

if (($Iseligible2 == "1") && ($ffar21 == "1") && ($Gladcanattack2 == "1")) {$fight21 = "1"; 
unset($_SESSION['ResetW2']); unset($_SESSION['resetturns2']);}
elseif (($Iseligible2 == "0") && ($ffar21 == "1") && ($Gladcanattack2 == "1")) {$fight21 = "0";} 
else {$fight21 = "0";} 
if (($Iseligible2 == "1") && ($ffar23 == "1") && ($Gladcanattack2 == "1")) {$fight23 = "1"; 
unset($_SESSION['ResetW2']); unset($_SESSION['resetturns2']);}
elseif (($Iseligible2 == "0") && ($ffar23 == "1") && ($Gladcanattack2 == "1")) {$fight23 = "0";} 
else {$fight23 = "0";} 

if (($Iseligible3 == "1") && ($ffar31 == "1") && ($Gladcanattack3 == "1")) {$fight31 = "1"; 
unset($_SESSION['ResetW3']); unset($_SESSION['resetturns3']);} 
elseif (($Iseligible3 == "0") && ($ffar31 == "1") && ($Gladcanattack3 == "1")) {$fight31 = "0";} 
else {$fight31 = "0";} 
if (($Iseligible3 == "1") && ($ffar32 == "1") && ($Gladcanattack3 == "1")) {$fight32 = "1"; 
unset($_SESSION['ResetW3']); unset($_SESSION['resetturns3']);}    
elseif (($Iseligible3 == "0") && ($ffar32 == "1") && ($Gladcanattack3 == "1")) {$fight32 = "0";} 
else {$fight32 = "0";} 

    $this->FarFightingValue1 = $fight12;
    $this->FarFightingValue2 = $fight13;
    $this->FarFightingValue3 = $fight21;
    $this->FarFightingValue4 = $fight23;
    $this->FarFightingValue5 = $fight31;
    $this->FarFightingValue6 = $fight32;
}

public function getfarFighting()
{
    if (!isset(self::$farFighting))
    {
        $class = __CLASS__;
        self::$farFighting = new $class();
        self::$farFighting->initialize();
    }
    return self::$farFighting;
}
}

$myfarFighting = GladiatorGetfarFighting::getfarFighting();
$ffighting12 = $myfarFighting->FarFightingValue1;
$ffighting13 = $myfarFighting->FarFightingValue2;
$ffighting21 = $myfarFighting->FarFightingValue3;
$ffighting23 = $myfarFighting->FarFightingValue4;
$ffighting31 = $myfarFighting->FarFightingValue5;
$ffighting32 = $myfarFighting->FarFightingValue6;

class GladiatorGetcloseBDFighting 
{

private static $closeBDFighting;
public $CloseBDFightingValue1;
public $CloseBDFightingValue2;
public $CloseBDFightingValue3;
public $CloseBDFightingValue4;
public $CloseBDFightingValue5;
public $CloseBDFightingValue6;

private function initialize() 
{

$myPosition = GladiatorGetPosition::getPosition();
$Gladiator1 = $myPosition->Positionvalue1;
$Gladiator2 = $myPosition->Positionvalue2;
$Gladiator3 = $myPosition->Positionvalue3;

$IsEligible12 = 0;  
$IsEligible13 = 0;
$IsEligible21 = 0;
$IsEligible23 = 0;  
$IsEligible31 = 0;
$IsEligible32 = 0;
$cbdfighting12 = 0;  
$cbdfighting13 = 0;
$cbdfighting21 = 0;
$cbdfighting23 = 0;  
$cbdfighting31 = 0;
$cbdfighting32 = 0;
$Gladcanattack1=0;
$Gladcanattack2=0;
$Gladcanattack3=0;

if(isset($_SESSION['ResetW1']) && !empty($_SESSION['ResetW1']) && $_SESSION["ResetW1"] == "1" ){$Gladcanattack1 =1;}
if(isset($_SESSION['ResetW2']) && !empty($_SESSION['ResetW2']) && $_SESSION["ResetW2"] == "1" ){$Gladcanattack2 =1;}
if(isset($_SESSION['ResetW3']) && !empty($_SESSION['ResetW3']) && $_SESSION["ResetW3"] == "1" ){$Gladcanattack3 =1;}


if (($Gladiator1 - 1 ==  $Gladiator2) || ($Gladiator1 + 1 ==  $Gladiator2) || ($Gladiator1 - 10 ==  $Gladiator2) || ($Gladiator1 + 10 ==  $Gladiator2))
{$IsEligible12 = "1";} else {$IsEligible12 = "0";}
if (($Gladiator1 - 1 ==  $Gladiator3) || ($Gladiator1 + 1 ==  $Gladiator3) || ($Gladiator1 - 10 ==  $Gladiator3) || ($Gladiator1 + 10 ==  $Gladiator3))
{$IsEligible13 = "1";} else {$IsEligible13 = "0";}

if (($Gladiator2 - 1 ==  $Gladiator1) || ($Gladiator2 + 1 ==  $Gladiator1) || ($Gladiator2 - 10 ==  $Gladiator1) || ($Gladiator2 + 10 ==  $Gladiator1))
{$IsEligible21 = "1";} else {$IsEligible21 = "0";}
if (($Gladiator2 - 1 ==  $Gladiator3) || ($Gladiator2 + 1 ==  $Gladiator3) || ($Gladiator2 - 10 ==  $Gladiator3) || ($Gladiator2 + 10 ==  $Gladiator3))
{$IsEligible23 = "1";} else {$IsEligible23 = "0";}

if (($Gladiator3 - 1 ==  $Gladiator1) || ($Gladiator3 + 1 ==  $Gladiator1) || ($Gladiator3 - 10 ==  $Gladiator1) || ($Gladiator3 + 10 ==  $Gladiator1))
{$IsEligible31 = "1";} else {$IsEligible31 = "0";}
if (($Gladiator3 - 1 ==  $Gladiator2) || ($Gladiator3 + 1 ==  $Gladiator2) || ($Gladiator3 - 10 ==  $Gladiator2) || ($Gladiator3 + 10 ==  $Gladiator2))
{$IsEligible32 = "1";} else {$IsEligible32 = "0";}

//unneccesary elseifs
if (($IsEligible12 == "1") && ($Gladcanattack1 == "1"))   
{$cbdfighting12 = "1";
unset($_SESSION['ResetW1']);
 unset($_SESSION['resetturns1']);} 
 elseif (($IsEligible12 == "1") && ($Gladcanattack1 == "0"))   
{$cbdfighting12 = "0";}
elseif (($IsEligible12 == "0") && ($Gladcanattack1 == "1"))   
{$cbdfighting12 = "0";}
else {$cbdfighting12 = "0";}


if (($IsEligible13 == "1") && ($Gladcanattack1 == "1"))   
{$cbdfighting13 = "1";
unset($_SESSION['ResetW1']); 
unset($_SESSION['resetturns1']);} 
 elseif (($IsEligible13 == "1") && ($Gladcanattack1 == "0"))   
{$cbdfighting13 = "0";}
elseif (($IsEligible13 == "0") && ($Gladcanattack1 == "1"))   
{$cbdfighting13 = "0";}
else {$cbdfighting13 = "0";}


if (($IsEligible21 == "1") && ($Gladcanattack2 == "1"))   
{$cbdfighting21 = "1";
unset($_SESSION['ResetW2']); 
unset($_SESSION['resetturns2']);} 
 elseif (($IsEligible21 == "1") && ($Gladcanattack2 == "0"))   
{$cbdfighting21 = "0";}
 elseif (($IsEligible21 == "0") && ($Gladcanattack2 == "1"))   
{$cbdfighting21 = "0";}
else {$cbdfighting21 = "0";}


if (($IsEligible23 == "1") && ($Gladcanattack2 == "1"))   
{$cbdfighting23 = "1";
unset($_SESSION['ResetW2']); 
unset($_SESSION['resetturns2']);} 
 elseif (($IsEligible23 == "1") && ($Gladcanattack2 == "0"))   
{$cbdfighting23 = "0";}
 elseif (($IsEligible23 == "0") && ($Gladcanattack2 == "1"))   
{$cbdfighting23 = "0";}
else {$cbdfighting23 = "0";}


if (($IsEligible31 == "1") && ($Gladcanattack3 == "1"))   
{$cbdfighting31 = "1";
unset($_SESSION['ResetW3']); 
unset($_SESSION['resetturns3']);} 
 elseif (($IsEligible31 == "1") && ($Gladcanattack3 == "0"))   
{$cbdfighting31 = "0";}
elseif (($IsEligible31 == "0") && ($Gladcanattack3 == "1"))   
{$cbdfighting31 = "0";}
else {$cbdfighting31 = "0";}


if (($IsEligible32 == "1") && ($Gladcanattack3 == "1"))   
{$cbdfighting32 = "1";
unset($_SESSION['ResetW3']);
 unset($_SESSION['resetturns3']);} 
  elseif (($IsEligible32 == "1") && ($Gladcanattack3 == "0"))   
{$cbdfighting32 = "0";}
elseif (($IsEligible32 == "0") && ($Gladcanattack3 == "1"))   
{$cbdfighting32 = "0";}
else {$cbdfighting32 = "0";}

    $this->CloseBDFightingValue1 = $cbdfighting12;
    $this->CloseBDFightingValue2 = $cbdfighting13;
    $this->CloseBDFightingValue3 = $cbdfighting21;
    $this->CloseBDFightingValue4 = $cbdfighting23;
    $this->CloseBDFightingValue5 = $cbdfighting31;
    $this->CloseBDFightingValue6 = $cbdfighting32;

}

public function getcloseBDFighting()
{
    if (!isset(self::$closeBDFighting))
    {
        $class = __CLASS__;
        self::$closeBDFighting = new $class();
        self::$closeBDFighting->initialize();
    }
    return self::$closeBDFighting;
}

}

$mycloseBDFighting = GladiatorGetcloseBDFighting::getcloseBDFighting();
$cbdfighting12 = $mycloseBDFighting->CloseBDFightingValue1;
$cbdfighting13 = $mycloseBDFighting->CloseBDFightingValue2;
$cbdfighting21 = $mycloseBDFighting->CloseBDFightingValue3;
$cbdfighting23 = $mycloseBDFighting->CloseBDFightingValue4;
$cbdfighting31 = $mycloseBDFighting->CloseBDFightingValue5;
$cbdfighting32 = $mycloseBDFighting->CloseBDFightingValue6;

// two rules dont tell anyone about fight club
class GladiatorGetFightDamage 
{

private static $FightDamage;
public $FightDamageValue1;
public $FightDamageValue2;
public $FightDamageValue3;

private function initialize() 
{

$mycloseBDFighting = GladiatorGetcloseBDFighting::getcloseBDFighting();
$cbdfighting12 = $mycloseBDFighting->CloseBDFightingValue1;
$cbdfighting13 = $mycloseBDFighting->CloseBDFightingValue2;
$cbdfighting21 = $mycloseBDFighting->CloseBDFightingValue3;
$cbdfighting23 = $mycloseBDFighting->CloseBDFightingValue4;
$cbdfighting31 = $mycloseBDFighting->CloseBDFightingValue5;
$cbdfighting32 = $mycloseBDFighting->CloseBDFightingValue6;

$myfarFighting = GladiatorGetfarFighting::getfarFighting();
$ffighting12 = $myfarFighting->FarFightingValue1;
$ffighting13 = $myfarFighting->FarFightingValue2;
$ffighting21 = $myfarFighting->FarFightingValue3;
$ffighting23 = $myfarFighting->FarFightingValue4;
$ffighting31 = $myfarFighting->FarFightingValue5;
$ffighting32 = $myfarFighting->FarFightingValue6;

$myGlad1WeaponHandstats = Gladiator1GetGlad1WeaponHandstats::getGlad1WeaponHandstats();
$Gladiator1WHandstatsVal1 = $myGlad1WeaponHandstats->Glad1WeaponHandstatsValue1;
$Gladiator1WHandstatsVal2 = $myGlad1WeaponHandstats->Glad1WeaponHandstatsValue2;
$Gladiator1WHandstatsVal3 = $myGlad1WeaponHandstats->Glad1WeaponHandstatsValue3;
$Gladiator1WHandstatsVal4 = $myGlad1WeaponHandstats->Glad1WeaponHandstatsValue4;
$Gladiator1WHandstatsVal5 = $myGlad1WeaponHandstats->Glad1WeaponHandstatsValue5;
$Gladiator1WHandstatsVal6 = $myGlad1WeaponHandstats->Glad1WeaponHandstatsValue6;

$myGlad2WeaponHandstats = Gladiator2GetGlad2WeaponHandstats::getGlad2WeaponHandstats();
$Gladiator2WHandstatsVal1 = $myGlad2WeaponHandstats->Glad2WeaponHandstatsValue1;
$Gladiator2WHandstatsVal2 = $myGlad2WeaponHandstats->Glad2WeaponHandstatsValue2;
$Gladiator2WHandstatsVal3 = $myGlad2WeaponHandstats->Glad2WeaponHandstatsValue3;
$Gladiator2WHandstatsVal4 = $myGlad2WeaponHandstats->Glad2WeaponHandstatsValue4;
$Gladiator2WHandstatsVal5 = $myGlad2WeaponHandstats->Glad2WeaponHandstatsValue5;
$Gladiator2WHandstatsVal6 = $myGlad2WeaponHandstats->Glad2WeaponHandstatsValue6;

$myGlad3WeaponHandstats = Gladiator3GetGlad3WeaponHandstats::getGlad3WeaponHandstats();
$Gladiator3WHandstatsVal1 = $myGlad3WeaponHandstats->Glad3WeaponHandstatsValue1;
$Gladiator3WHandstatsVal2 = $myGlad3WeaponHandstats->Glad3WeaponHandstatsValue2;
$Gladiator3WHandstatsVal3 = $myGlad3WeaponHandstats->Glad3WeaponHandstatsValue3;
$Gladiator3WHandstatsVal4 = $myGlad3WeaponHandstats->Glad3WeaponHandstatsValue4;
$Gladiator3WHandstatsVal5 = $myGlad3WeaponHandstats->Glad3WeaponHandstatsValue5;
$Gladiator3WHandstatsVal6 = $myGlad3WeaponHandstats->Glad3WeaponHandstatsValue6;

$weapon1damage = (rand($Gladiator1WHandstatsVal1 ,$Gladiator1WHandstatsVal2));
$weapon4damage = (rand($Gladiator2WHandstatsVal1  ,$Gladiator2WHandstatsVal2));
$weapon7damage = (rand($Gladiator3WHandstatsVal1 ,$Gladiator3WHandstatsVal2));

$FCLDamage1 = 0;
$FCLDamage2 = 0;
$FCLDamage3 = 0;
$FRADamage1 = 0;
$FRADamage2 = 0;
$FRADamage3 = 0;

if ($cbdfighting12 == "1"){$FCLDamage2 = $weapon1damage;}
if ($cbdfighting13 == "1"){$FCLDamage3 = $weapon1damage;}
if ($cbdfighting21 == "1"){$FCLDamage1 = $weapon4damage;}
if ($cbdfighting23 == "1"){$FCLDamage3 = $weapon4damage;}
if ($cbdfighting31 == "1"){$FCLDamage1 = $weapon7damage;}
if ($cbdfighting32 == "1"){$FCLDamage2 = $weapon7damage;} 

if ($ffighting12 == "1"){$FRADamage2 = $weapon1damage;}
if ($ffighting13 == "1"){$FRADamage3 = $weapon1damage;}
if ($ffighting21 == "1"){$FRADamage1 = $weapon4damage;}
if ($ffighting23 == "1"){$FRADamage3 = $weapon4damage;}
if ($ffighting31 == "1"){$FRADamage1 = $weapon7damage;}
if ($ffighting32 == "1"){$FRADamage2 = $weapon7damage;}   

$FALLDamage1 = $FCLDamage1 + $FRADamage1;
$FALLDamage2 = $FCLDamage2 + $FRADamage2;
$FALLDamage3 = $FCLDamage3 + $FRADamage3;

//code going over ghosts hitting for only 2hp
if(isset($_SESSION['Gladisdead2']) && !empty($_SESSION['Gladisdead2']) && ($_SESSION["Gladisdead2"] == "1")  && ($cbdfighting12 == "1") ||
(isset($_SESSION['Gladisdead3']) && !empty($_SESSION['Gladisdead3']) &&
 ($_SESSION["Gladisdead3"] == "1") && ($cbdfighting13 == "1")))
{$FDamage1 = 2;}
else {$FDamage1 = $FALLDamage1;}


if(isset($_SESSION['Gladisdead1']) && !empty($_SESSION['Gladisdead1']) && ($_SESSION["Gladisdead1"] == "1")  && ($cbdfighting12 == "1") ||
(isset($_SESSION['Gladisdead3']) && !empty($_SESSION['Gladisdead3']) &&
 ($_SESSION["Gladisdead3"] == "1") && ($cbdfighting23 == "1")))
{$FDamage2 = 2;}
else {$FDamage2 = $FALLDamage2;}


if(isset($_SESSION['Gladisdead1']) && !empty($_SESSION['Gladisdead1']) && ($_SESSION["Gladisdead1"] == "1")  && ($cbdfighting13 == "1") ||
(isset($_SESSION['Gladisdead2']) && !empty($_SESSION['Gladisdead2']) &&
 ($_SESSION["Gladisdead2"] == "1") && ($cbdfighting23 == "1")))
{$FDamage3 = 2;}
else {$FDamage3 = $FALLDamage3;}

    $this->FightDamageValue1 = $FDamage1;
    $this->FightDamageValue2 = $FDamage2;
    $this->FightDamageValue3 = $FDamage3;
}

public function getFightDamage()
{
    if (!isset(self::$FightDamage))
    {
        $class = __CLASS__;
        self::$FightDamage = new $class();
        self::$FightDamage->initialize();
    }
    return self::$FightDamage;
}

}

$myFightDamage = GladiatorGetFightDamage::getFightDamage();
$FDamage1 = $myFightDamage->FightDamageValue1;
$FDamage2 = $myFightDamage->FightDamageValue2;
$FDamage3 = $myFightDamage->FightDamageValue3;

$myPosition = GladiatorGetPosition::getPosition();
$Gladiator1 = $myPosition->Positionvalue1;
$Gladiator2 = $myPosition->Positionvalue2;
$Gladiator3 = $myPosition->Positionvalue3;


/////////////weapon stats probaly useless
print_r( get_class_methods('Magic'));

$Magic = new Range_Weapon();
$Magic->setminimumdamage(2);
$Magic->setmaximumdamage(10);
$Magic->setresettime(1);
$Magic->setdurability(4);
$Magic->setName('Magic');
print_r( get_class_methods('Spear'));

$Spear = new Range_Weapon();
$Spear->setminimumdamage(3);
$Spear->setmaximumdamage(12);
$Spear->setresettime(2);
$Spear->setdurability(4);
$Spear->setName('Spear');
print_r( get_class_methods('Bow'));

$Bow = new Range_Weapon();
$Bow->setminimumdamage(2);
$Bow->setmaximumdamage(8);
$Bow->setresettime(2);
$Bow->setdurability(6);
$Bow->setName('Bow and Arrow');
print_r( get_class_methods('Sword'));

$Sword = new Melee_Weapon();
$Sword->setminimumdamage(4);
$Sword->setmaximumdamage(15);
$Sword->setresettime(2);
$Sword->setdurability(4);
$Sword->setName('Sword');
print_r( get_class_methods('Axe'));

$Axe = new Melee_Weapon();
$Axe->setminimumdamage(5);
$Axe->setmaximumdamage(15);
$Axe->setresettime(3);
$Axe->setdurability(6);
$Axe->setName('Axe');
print_r( get_class_methods('Excalibur'));

$Excalibur = new Melee_Weapon();
$Excalibur->setminimumdamage(6);
$Excalibur->setmaximumdamage(18);
$Excalibur->setresettime(0);
$Excalibur->setdurability(7);
$Excalibur->setName('Excalibur');
print_r( get_class_methods('Dagger'));

$Dagger = new Melee_Weapon();
$Dagger->setminimumdamage(4);
$Dagger->setmaximumdamage(14);
$Dagger->setresettime(1);
$Dagger->setdurability(4);
$Dagger->setName('Dagger');
print_r( get_class_methods('Banana'));

$Banana = new Melee_Weapon();
$Banana->setminimumdamage(2);
$Banana->setmaximumdamage(5);
$Banana->setresettime(1);
$Banana->setdurability(2);
$Banana->setName('Banana');
print_r( get_class_methods('Knife'));

$Knife = new Melee_Weapon();
$Knife->setminimumdamage(2);
$Knife->setmaximumdamage(10);
$Knife->setresettime(1);
$Knife->setdurability(4);
$Knife->setName('Knife');
print_r( get_class_methods('Hammer'));

$Hammer = new Melee_Weapon();
$Hammer->setminimumdamage(4);
$Hammer->setmaximumdamage(14);
$Hammer->setresettime(2);
$Hammer->setdurability(5);
$Hammer->setName('Hammer');
print_r( get_class_methods('Mace'));

$Mace = new Melee_Weapon();
$Mace->setminimumdamage(4);
$Mace->setmaximumdamage(14);
$Mace->setresettime(2);
$Mace->setdurability(4);
$Mace->setName('Mace');
print_r( get_class_methods('Club'));

$Club = new Melee_Weapon();
$Club->setminimumdamage(2);
$Club->setmaximumdamage(12);
$Club->setresettime(2);
$Club->setdurability(3);
$Club->setName('Club');

print_r( get_class_methods('Hands'));
$Hands = new Melee_Weapon();
$Hands->setminimumdamage(1);
$Hands->setmaximumdamage(1);
$Hands->setresettime(0);
$Hands->setdurability(100);
$Hands->setName('Hands');

?>