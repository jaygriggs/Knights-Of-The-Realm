<?php
class GladiatorGetBreakCounter 
{

private static $BreakCounter;
public $BreakCounterValue1;
public $BreakCounterValue2;
public $BreakCounterValue3;

private function initialize() 
{

$myfarFighting = GladiatorGetfarFighting::getfarFighting();
$ffighting12 = $myfarFighting->FarFightingValue1;
$ffighting13 = $myfarFighting->FarFightingValue2;
$ffighting21 = $myfarFighting->FarFightingValue3;
$ffighting23 = $myfarFighting->FarFightingValue4;
$ffighting31 = $myfarFighting->FarFightingValue5;
$ffighting32 = $myfarFighting->FarFightingValue6;

$mycloseBDFighting = GladiatorGetcloseBDFighting::getcloseBDFighting();
$cbdfighting12 = $mycloseBDFighting->CloseBDFightingValue1;
$cbdfighting13 = $mycloseBDFighting->CloseBDFightingValue2;
$cbdfighting21 = $mycloseBDFighting->CloseBDFightingValue3;
$cbdfighting23 = $mycloseBDFighting->CloseBDFightingValue4;
$cbdfighting31 = $mycloseBDFighting->CloseBDFightingValue5;
$cbdfighting32 = $mycloseBDFighting->CloseBDFightingValue6;

$Weapon1DURsub = 0;
$Weapon2DURsub = 0;
$Weapon3DURsub = 0;
$Weapon1break = 0;
$Weapon2break = 0;
$Weapon3break = 0;

if (($ffighting12 == "1")  ||  ($ffighting13 == "1" ) || ($cbdfighting12 == "1")  ||  ($cbdfighting13 == "1" )) 
    {$Weapon1DURsub = "1";}
if (($ffighting21 == "1")  ||  ($ffighting23 == "1" )  || ($cbdfighting21 == "1")  ||  ($cbdfighting23 == "1" )) 
    {$Weapon2DURsub = "1";}
if (($ffighting31 == "1")  ||  ($ffighting32 == "1" )   || ($cbdfighting31 == "1")  ||  ($cbdfighting32 == "1" )) 
    {$Weapon3DURsub = "1";}

if(isset($_SESSION["Gladiator1WHDUR"]) && !empty($_SESSION["Gladiator1WHDUR"]) && ($Weapon1DURsub == "1"))
{$_SESSION["Gladiator1WHDUR"] = $_SESSION["Gladiator1WHDUR"] - 1;}
if(isset($_SESSION["Glad2WHDUR"]) && !empty($_SESSION["Glad2WHDUR"]) && ($Weapon2DURsub == "1"))
{$_SESSION["Glad2WHDUR"] = $_SESSION["Glad2WHDUR"] - 1;}
if(isset($_SESSION["Glad3WHandDUR"]) && !empty($_SESSION["Glad3WHandDUR"]) && ($Weapon3DURsub == "1"))
{$_SESSION["Glad3WHandDUR"] = $_SESSION["Glad3WHandDUR"] - 1;}

if(isset($_SESSION["Gladiator1WHDUR"]) && (empty($_SESSION["Gladiator1WHDUR"])))
{$Weapon1break = "1";}
if(isset($_SESSION["Glad2WHDUR"]) && (empty($_SESSION["Glad2WHDUR"])))
{$Weapon2break = "1";}
if(isset($_SESSION["Glad3WHandDUR"]) && (empty($_SESSION["Glad3WHandDUR"])))
{$Weapon3break = "1";}

    $this->BreakCounterValue1 = $Weapon1break;
    $this->BreakCounterValue2 = $Weapon2break;
    $this->BreakCounterValue3 = $Weapon3break;
}

public function getBreakCounter()
{
    if (!isset(self::$BreakCounter))
    {
        $class = __CLASS__;
        self::$BreakCounter = new $class();
        self::$BreakCounter->initialize();
    }
    return self::$BreakCounter;
}
}

$myBreakCounter = GladiatorGetBreakCounter::getBreakCounter();
$BreakCounterVal1 = $myBreakCounter->BreakCounterValue1;
$BreakCounterVal2 = $myBreakCounter->BreakCounterValue2;
$BreakCounterVal3 = $myBreakCounter->BreakCounterValue3;

class GladiatorGetNextWeapon 
{

private static $NextWeapon;
public $NextWeaponValue1;
public $NextWeaponValue2;
public $NextWeaponValue3;

private function initialize() 
{

$myBreakCounter = GladiatorGetBreakCounter::getBreakCounter();
$BreakCounterVal1 = $myBreakCounter->BreakCounterValue1;
$BreakCounterVal2 = $myBreakCounter->BreakCounterValue2;
$BreakCounterVal3 = $myBreakCounter->BreakCounterValue3;

$myExcalibursword = GladiatorGetExcalibursword::getExcalibursword();
$glad1gotexcalibur = $myExcalibursword->ExcaliburswordValue1;
$glad2gotexcalibur = $myExcalibursword->ExcaliburswordValue2;
$glad3gotexcalibur = $myExcalibursword->ExcaliburswordValue3;

//code that switches to next weapon after break

if ($BreakCounterVal1 == "1")
{

$_SESSION["Glad1BP1"] = $_SESSION["Glad1BP2"];
$_SESSION["Glad1BP2"] = $_SESSION["Glad1BP3"];
$_SESSION["Glad1BP3"] = "Hands";
unset($_SESSION['Gladiator1WHMIN']); 
unset($_SESSION['Gladiator1WHMAX']); 
unset($_SESSION['Gladiator1WHDUR']); 
unset($_SESSION['Gladiator1WHRES']); 
unset($_SESSION['Gladiator1WHRAN']); 
unset($_SESSION['Gladiator1WHIMG']); 
} 

elseif (($BreakCounterVal1 == "0") && ($glad1gotexcalibur == "1"))
{

$_SESSION["Glad1BP1"] = $_SESSION["Glad1BP1"];
$_SESSION["Glad1BP2"] = $_SESSION["Glad1BP2"];
$_SESSION["Glad1BP3"] = "Excalibur";
unset($_SESSION['Gladiator1WHMIN']); 
unset($_SESSION['Gladiator1WHMAX']); 
unset($_SESSION['Gladiator1WHDUR']); 
unset($_SESSION['Gladiator1WHRES']); 
unset($_SESSION['Gladiator1WHRAN']); 
unset($_SESSION['Gladiator1WHIMG']); 
} 

elseif (($BreakCounterVal1 == "1") && ($glad1gotexcalibur == "1"))
{

$_SESSION["Glad1BP1"] = $_SESSION["Glad1BP2"];
$_SESSION["Glad1BP2"] = "Hands";
$_SESSION["Glad1BP3"] = "Excalibur";
unset($_SESSION['Gladiator1WHMIN']); 
unset($_SESSION['Gladiator1WHMAX']); 
unset($_SESSION['Gladiator1WHDUR']); 
unset($_SESSION['Gladiator1WHRES']); 
unset($_SESSION['Gladiator1WHRAN']); 
unset($_SESSION['Gladiator1WHIMG']); 
} 

if ($BreakCounterVal2 == "1")
{

$_SESSION["Gladiator2BPA"] = $_SESSION["Gladiator2BPB"];
$_SESSION["Gladiator2BPB"] = $_SESSION["Gladiator2BPC"];
$_SESSION["Gladiator2BPC"] = "Hands";
unset($_SESSION['Glad2WHMIN']); 
unset($_SESSION['Glad2WHMAX']); 
unset($_SESSION['Glad2WHDUR']); 
unset($_SESSION['Glad2WHRES']); 
unset($_SESSION['Glad2WHRAN']); 
unset($_SESSION['Glad2WHIMG']); 
} 

elseif (($BreakCounterVal2 == "0") && ($glad2gotexcalibur == "1"))
{

$_SESSION["Gladiator2BPA"] = $_SESSION["Gladiator2BPA"];
$_SESSION["Gladiator2BPB"] = $_SESSION["Gladiator2BPB"];
$_SESSION["Gladiator2BPC"] = "Excalibur";
unset($_SESSION['Glad2WHMIN']); 
unset($_SESSION['Glad2WHMAX']); 
unset($_SESSION['Glad2WHDUR']); 
unset($_SESSION['Glad2WHRES']); 
unset($_SESSION['Glad2WHRAN']); 
unset($_SESSION['Glad2WHIMG']); 
} 

elseif (($BreakCounterVal2 == "1") && ($glad2gotexcalibur == "1"))
{

$_SESSION["Gladiator2BPA"] = $_SESSION["Gladiator2BPB"];
$_SESSION["Gladiator2BPB"] = "Hands";
$_SESSION["Gladiator2BPC"] = "Excalibur";
unset($_SESSION['Glad2WHMIN']); 
unset($_SESSION['Glad2WHMAX']); 
unset($_SESSION['Glad2WHDUR']); 
unset($_SESSION['Glad2WHRES']); 
unset($_SESSION['Glad2WHRAN']); 
unset($_SESSION['Glad2WHIMG']); 
} 

if ($BreakCounterVal3 == "1")
{

$_SESSION["Gladiator3BP1"] = $_SESSION["Gladiator3BP2"];
$_SESSION["Gladiator3BP2"] = $_SESSION["Gladiator3BP3"];
$_SESSION["Gladiator3BP3"] = "Hands";
unset($_SESSION['Glad3WHandMIN']); 
unset($_SESSION['Glad3WHandMAX']); 
unset($_SESSION['Glad3WHandDUR']); 
unset($_SESSION['Glad3WHandRES']); 
unset($_SESSION['Glad3WHandRAN']); 
unset($_SESSION['Glad3WHandIMG']); 
} 

elseif (($BreakCounterVal3 == "0") && ($glad3gotexcalibur == "1"))
{

$_SESSION["Gladiator3BP1"] = $_SESSION["Gladiator3BP1"];
$_SESSION["Gladiator3BP2"] = $_SESSION["Gladiator3BP2"];
$_SESSION["Gladiator3BP3"] = "Excalibur";
unset($_SESSION['Glad3WHandMIN']); 
unset($_SESSION['Glad3WHandMAX']); 
unset($_SESSION['Glad3WHandDUR']); 
unset($_SESSION['Glad3WHandRES']); 
unset($_SESSION['Glad3WHandRAN']); 
unset($_SESSION['Glad3WHandIMG']); 
} 

elseif (($BreakCounterVal3 == "1") && ($glad3gotexcalibur == "1"))
{

$_SESSION["Gladiator3BP1"] = $_SESSION["Gladiator3BP2"];
$_SESSION["Gladiator3BP2"] = "Hands";
$_SESSION["Gladiator3BP3"] = "Excalibur";
unset($_SESSION['Glad3WHandMIN']); 
unset($_SESSION['Glad3WHandMAX']); 
unset($_SESSION['Glad3WHandDUR']); 
unset($_SESSION['Glad3WHandRES']); 
unset($_SESSION['Glad3WHandRAN']); 
unset($_SESSION['Glad3WHandIMG']); 
} 

    $this->NextWeaponValue1 = '1';
    $this->NextWeaponValue2 = '2';
    $this->NextWeaponValue3 = '3';

}

public function getNextWeapon()
{
    if (!isset(self::$NextWeapon))
    {
        $class = __CLASS__;
        self::$NextWeapon = new $class();
        self::$NextWeapon->initialize();
    }
    return self::$NextWeapon;
}

}

$myNextWeapon = GladiatorGetNextWeapon::getNextWeapon();
$NextWeaponVal1 = $myNextWeapon->NextWeaponValue1;
$NextWeaponVal2 = $myNextWeapon->NextWeaponValue2;
$NextWeaponVal3 = $myNextWeapon->NextWeaponValue3;

class GladiatorGetResetCounter 
{

private static $ResetCounter;
public $ResetCounterValue1;
public $ResetCounterValue2;
public $ResetCounterValue3;
public $ResetCounterValue4;
public $ResetCounterValue5;
public $ResetCounterValue6;

private function initialize() 
{

$myfarFighting = GladiatorGetfarFighting::getfarFighting();
$ffighting12 = $myfarFighting->FarFightingValue1;
$ffighting13 = $myfarFighting->FarFightingValue2;
$ffighting21 = $myfarFighting->FarFightingValue3;
$ffighting23 = $myfarFighting->FarFightingValue4;
$ffighting31 = $myfarFighting->FarFightingValue5;
$ffighting32 = $myfarFighting->FarFightingValue6;

$mycloseBDFighting = GladiatorGetcloseBDFighting::getcloseBDFighting();
$cbdfighting12 = $mycloseBDFighting->CloseBDFightingValue1;
$cbdfighting13 = $mycloseBDFighting->CloseBDFightingValue2;
$cbdfighting21 = $mycloseBDFighting->CloseBDFightingValue3;
$cbdfighting23 = $mycloseBDFighting->CloseBDFightingValue4;
$cbdfighting31 = $mycloseBDFighting->CloseBDFightingValue5;
$cbdfighting32 = $mycloseBDFighting->CloseBDFightingValue6;


$resetnum1 = 0;
$resetturns1 = 0;
$Glad1fighting = 0;
$canattack1 = 0;
$resetnum2 = 0;
$resetturns2 = 0;
$Glad2fighting = 0;
$canattack2 = 0;
$resetnum3 = 0;
$resetturns3 = 0;
$Glad3fighting = 0;
$canattack3 = 0;
$resetstatus1 = 0;
$resetstatus2 = 0;
$resetstatus3 = 0;

if(isset($_SESSION['Gladiator1WHRES']) && !empty($_SESSION['Gladiator1WHRES']))
{$resetnum1 = $_SESSION["Gladiator1WHRES"];}
if(isset($_SESSION['Glad2WHRES']) && !empty($_SESSION['Glad2WHRES']))
{$resetnum2 = $_SESSION["Glad2WHRES"];}
if(isset($_SESSION['Glad3WHandRES']) && !empty($_SESSION['Glad3WHandRES']))
{$resetnum3 = $_SESSION["Glad3WHandRES"];}


if(isset($_SESSION['resetturns1']))
    $_SESSION['resetturns1'] = $_SESSION['resetturns1']+ 1;
else
    $_SESSION['resetturns1'] = 0;
if(isset($_SESSION['resetturns2']))
    $_SESSION['resetturns2'] = $_SESSION['resetturns2']+ 1;
else
    $_SESSION['resetturns2'] = 0;
if(isset($_SESSION['resetturns3']))
    $_SESSION['resetturns3'] = $_SESSION['resetturns3']+ 1;
else
    $_SESSION['resetturns3'] = 0;

if(isset($_SESSION['resetturns1']) && !empty($_SESSION['resetturns1']))
{$resetturns1 = $_SESSION['resetturns1'];}
if(isset($_SESSION['resetturns1']) && !empty($_SESSION['resetturns1']))
{$resetstatus1 = $_SESSION['resetturns1'];}

if(isset($_SESSION['resetturns2']) && !empty($_SESSION['resetturns2']))
{$resetturns2 = $_SESSION['resetturns2'];}
if(isset($_SESSION['resetturns2']) && !empty($_SESSION['resetturns2']))
{$resetstatus2 = $_SESSION['resetturns2'];}

if(isset($_SESSION['resetturns3']) && !empty($_SESSION['resetturns3']))
{$resetturns3 = $_SESSION['resetturns3'];}
if(isset($_SESSION['resetturns3']) && !empty($_SESSION['resetturns3']))
{$resetstatus3 = $_SESSION['resetturns3'];}

$isdead1=0;
$isdead2=0;
$isdead3=0;
if(isset($_SESSION['Gladisdead1']) && !empty($_SESSION['Gladisdead1']) && $_SESSION["Gladisdead1"] == "1" ){$isdead1 =1; }
if(isset($_SESSION['Gladisdead2']) && !empty($_SESSION['Gladisdead2']) && $_SESSION["Gladisdead2"] == "1" ){$isdead2 =1; }
if(isset($_SESSION['Gladisdead3']) && !empty($_SESSION['Gladisdead3']) && $_SESSION["Gladisdead3"] == "1" ){$isdead3 =1; }

$newresetstatus1 = ($resetnum1 - $resetstatus1)>1?($resetnum1 - $resetstatus1):1;
$newresetstatus2 = ($resetnum2 - $resetstatus2)>1?($resetnum2 - $resetstatus2):1;
$newresetstatus3 = ($resetnum3 - $resetstatus3)>1?($resetnum3 - $resetstatus3):1;


$newstat1 = ($resetnum1 - $resetstatus1)>0?($resetnum1 - $resetstatus1):0;
$newstat2 = ($resetnum2 - $resetstatus2)>0?($resetnum2 - $resetstatus2):0;
$newstat3 = ($resetnum3 - $resetstatus3)>0?($resetnum3 - $resetstatus3):0;


//Dead can always attack extra elseif 
if ($newresetstatus1 == "1" && $isdead1 == "0"){$canattack1 = "1";}
elseif ($newresetstatus1 > 1 && $isdead1 == "0"){$canattack1 = "0";}
elseif ($newresetstatus1 == "" && $isdead1 == "0"){$canattack1 = "0";}
elseif ($isdead1 == "1"){$canattack1 = "1";}
else{$this->ResetCounterValue1 = $canattack1;}

if ($newresetstatus2 == "1" && $isdead2 == "0"){$canattack2 = "1";}
elseif ($newresetstatus2 > 1 && $isdead2 == "0"){$canattack2 = "0";}
elseif ($newresetstatus2 == "" && $isdead2 == "0"){$canattack2 = "0";}
elseif ($isdead2 == "1"){$canattack2 = "1";}
else{$this->ResetCounterValue2 = $canattack2;}

if ($newresetstatus3 == "1" && $isdead3 == "0"){$canattack3 = "1";}
elseif ($newresetstatus3 > 1 && $isdead3 == "0"){$canattack3 = "0";}
if ($newresetstatus3 == "" && $isdead3 == "0"){$canattack3 = "0";}
elseif ($newresetstatus3 == "0" && $isdead3 == "0"){$canattack3 = "0";}
elseif ($isdead3 == "1"){$canattack3 = "1";}
else{$this->ResetCounterValue3 = $canattack3;}


$this->ResetCounterValue4 = $newstat1;
$this->ResetCounterValue5 = $newstat2;
$this->ResetCounterValue6 = $newstat3;

$_SESSION["ResetW1"] = $canattack1;
$_SESSION["ResetW2"] = $canattack2;
$_SESSION["ResetW3"] = $canattack3;

}

public function getResetCounter()
{
    if (!isset(self::$ResetCounter))
    {
        $class = __CLASS__;
        self::$ResetCounter = new $class();
        self::$ResetCounter->initialize();
    }
    return self::$ResetCounter;
}
}

$myResetCounter = GladiatorGetResetCounter::getResetCounter();
$ResetCounterVal1 = $myResetCounter->ResetCounterValue1;
$ResetCounterVal2 = $myResetCounter->ResetCounterValue2;
$ResetCounterVal3 = $myResetCounter->ResetCounterValue3;
$ResetCounterVal4 = $myResetCounter->ResetCounterValue4;
$ResetCounterVal5 = $myResetCounter->ResetCounterValue5;
$ResetCounterVal6 = $myResetCounter->ResetCounterValue6;

?>