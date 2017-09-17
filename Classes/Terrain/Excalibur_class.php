<?php

class GladiatorGetExcalibursword 
{

private static $Excalibursword;
public $ExcaliburswordValue1;
public $ExcaliburswordValue2;
public $ExcaliburswordValue3;

private function initialize() 
{

$myPosition = GladiatorGetPosition::getPosition();
$Gladiator1 = $myPosition->Positionvalue1;
$Gladiator2 = $myPosition->Positionvalue2;
$Gladiator3 = $myPosition->Positionvalue3;

$isdead1=0;
$isdead2=0;
$isdead3=0;
$item1 =0;
$item2 =0;
$item3 =0;
$item4 =0;
$item5 =0;
$item6 =0;
$item7 =0;
$item8 =0;
$item9 =0;
$excalibureligible =0;
$glad1pickupexcalibur =0;
$glad2pickupexcalibur =0;
$glad3pickupexcalibur =0;

if(isset($_SESSION['Gladisdead1']) && !empty($_SESSION['Gladisdead1']) && $_SESSION["Gladisdead1"] == "1" ){$isdead1 =1; }
if(isset($_SESSION['Gladisdead2']) && !empty($_SESSION['Gladisdead2']) && $_SESSION["Gladisdead2"] == "1" ){$isdead2 =1; }
if(isset($_SESSION['Gladisdead3']) && !empty($_SESSION['Gladisdead3']) && $_SESSION["Gladisdead3"] == "1" ){$isdead3 =1; }
if(isset($_SESSION['Glad1BP1']) && !empty($_SESSION['Glad1BP1']) && $_SESSION["Glad1BP1"] == "Hands") {$item1 =1;}
if(isset($_SESSION['Glad1BP2']) && !empty($_SESSION['Glad1BP2']) && $_SESSION["Glad1BP2"] == "Hands") {$item2 =1;}
if(isset($_SESSION['Glad1BP3']) && !empty($_SESSION['Glad1BP3']) && $_SESSION["Glad1BP3"] == "Hands") {$item3 =1;}
if(isset($_SESSION['Gladiator2BPA']) && !empty($_SESSION['Gladiator2BPA']) && $_SESSION["Gladiator2BPA"] == "Hands") {$item4 =1;}
if(isset($_SESSION['Gladiator2BPB']) && !empty($_SESSION['Gladiator2BPB']) && $_SESSION["Gladiator2BPB"] == "Hands") {$item5 =1;}
if(isset($_SESSION['Gladiator2BPC']) && !empty($_SESSION['Gladiator2BPC']) && $_SESSION["Gladiator2BPC"] == "Hands") {$item6 =1;}
if(isset($_SESSION['Gladiator3BP1']) && !empty($_SESSION['Gladiator3BP1']) && $_SESSION["Gladiator3BP1"] == "Hands") {$item7 =1;}
if(isset($_SESSION['Gladiator3BP2']) && !empty($_SESSION['Gladiator3BP2']) && $_SESSION["Gladiator3BP2"] == "Hands") {$item8 =1;}
if(isset($_SESSION['Gladiator3BP3']) && !empty($_SESSION['Gladiator3BP3']) && $_SESSION["Gladiator3BP3"] == "Hands") {$item9 =1;}


if (($item1 == "1") && ($item2 == "1") && ($item3 == "1") && ($item4 == "1") && ($item5 == "1") && ($item6 == "1") && ($item7 == "1") &&
	($item8 == "1") && ($item9 == "1")){$excalibureligible =1;}

elseif (($isdead1 == "1") && ($item4 == "1") && ($item5 == "1") && ($item6 == "1") && ($item7 == "1") &&
	($item8 == "1") && ($item9 == "1")){$excalibureligible =1;}

elseif (($isdead2 == "1") && ($item1 == "1") && ($item2 == "1") && ($item3 == "1") && ($item7 == "1") &&
	($item8 == "1") && ($item9 == "1")){$excalibureligible =1;}

elseif (($isdead3 == "1") && ($item1 == "1") && ($item2 == "1") && ($item3 == "1") && ($item4 == "1") &&
	($item5 == "1") && ($item6 == "1")){$excalibureligible =1;}

if ($excalibureligible == "1")
echo "<style> .square:nth-child(46){background-image: url(\"images/groundexcalibur.png\");background-repeat: no-repeat;} </style>";

if (($excalibureligible == "1") && ($Gladiator1 == "46"))
	    {echo "<style> .square:nth-child(46){background-image: url(\"images/excaliburlego.png\");background-repeat: no-repeat;} </style>";
        $glad1pickupexcalibur = "1";}    

elseif (($excalibureligible == "1") && ($Gladiator2 == "46"))
	  {echo "<style> .square:nth-child(46){background-image: url(\"images/excaliburhorse.png\");background-repeat: no-repeat;} </style>";
      $glad2pickupexcalibur = "1";}   

elseif (($excalibureligible == "1") && ($Gladiator3 == "46"))
	  {echo "<style> .square:nth-child(46){background-image: url(\"images/excaliburgirl.png\");background-repeat: no-repeat;} </style>";
      $glad3pickupexcalibur = "1";}

    $this->ExcaliburswordValue1 = $glad1pickupexcalibur;
    $this->ExcaliburswordValue2 = $glad2pickupexcalibur;
    $this->ExcaliburswordValue3 = $glad3pickupexcalibur;
}

public function getExcalibursword()
{
    if (!isset(self::$Excalibursword))
    {
        $class = __CLASS__;
        self::$Excalibursword = new $class();
        self::$Excalibursword->initialize();
    }
    return self::$Excalibursword;
}
}

?>