<?php

class status {
  
public function status()
{

$myPosition = GladiatorGetPosition::getPosition();
$Gladiator1 = $myPosition->Positionvalue1;
$Gladiator2 = $myPosition->Positionvalue2;
$Gladiator3 = $myPosition->Positionvalue3;

$myHitPoints = GladiatorGetHitPoints::getHitPoints();
$CurrentHitPoints1 = $myHitPoints->HitPointsValue1;
$CurrentHitPoints2 = $myHitPoints->HitPointsValue2;
$CurrentHitPoints3 = $myHitPoints->HitPointsValue3;

$myIsNotDestroyed = GladiatorGetIsNotDestroyed::getIsNotDestroyed();
$Gladiator1IsNotDestroyed = $myIsNotDestroyed->IsNotDestroyedValue1;
$Gladiator2IsNotDestroyed = $myIsNotDestroyed->IsNotDestroyedValue2;
$Gladiator3IsNotDestroyed = $myIsNotDestroyed->IsNotDestroyedValue3;

$myFairyPosition = GettheFairyPosition::getFairyPosition();
$Fairyspot = $myFairyPosition->FairyValue;

$myfarFighting = GladiatorGetfarFighting::getfarFighting();
$ffighting12 = $myfarFighting->FarFightingValue1;
$ffighting13 = $myfarFighting->FarFightingValue2;
$ffighting21 = $myfarFighting->FarFightingValue3;
$ffighting23 = $myfarFighting->FarFightingValue4;
$ffighting31 = $myfarFighting->FarFightingValue5;
$ffighting32 = $myfarFighting->FarFightingValue6;

$myBreakCounter = GladiatorGetBreakCounter::getBreakCounter();
$BreakCounterVal1 = $myBreakCounter->BreakCounterValue1;
$BreakCounterVal2 = $myBreakCounter->BreakCounterValue2;
$BreakCounterVal3 = $myBreakCounter->BreakCounterValue3;

$myBackpack = Gladiator1GetBackpack::getBackpack();
$Glad1BP1 = $myBackpack->BackpackValueA1;
$Glad1BP2 = $myBackpack->BackpackValueA2;
$Glad1BP3 = $myBackpack->BackpackValueA3;
	
$mycloseBDFighting = GladiatorGetcloseBDFighting::getcloseBDFighting();
$cbdfighting12 = $mycloseBDFighting->CloseBDFightingValue1;
$cbdfighting13 = $mycloseBDFighting->CloseBDFightingValue2;
$cbdfighting21 = $mycloseBDFighting->CloseBDFightingValue3;
$cbdfighting23 = $mycloseBDFighting->CloseBDFightingValue4;
$cbdfighting31 = $mycloseBDFighting->CloseBDFightingValue5;
$cbdfighting32 = $mycloseBDFighting->CloseBDFightingValue6;

$myResetCounter = GladiatorGetResetCounter::getResetCounter();
$ResetCounterVal4 = $myResetCounter->ResetCounterValue4;
$ResetCounterVal5 = $myResetCounter->ResetCounterValue5;
$ResetCounterVal6 = $myResetCounter->ResetCounterValue6;

$myExcalibursword = GladiatorGetExcalibursword::getExcalibursword();
$glad1gotexcalibur = $myExcalibursword->ExcaliburswordValue1;
$glad2gotexcalibur = $myExcalibursword->ExcaliburswordValue2;
$glad3gotexcalibur = $myExcalibursword->ExcaliburswordValue3;


 echo "<div class=\"Status\"><div class=\"Statuswords\"><div class=\"Statuswordsstat\">";
 
  //could be put in for loops 

 //if statements declaring a fight based on position
 //If Gladiators are next to eachother and cant attack 
  if (($Gladiator1 - 1 ==  $Gladiator2) && ($cbdfighting12 == "0")   && ($cbdfighting21 == "0" )) 
{ echo "<style>.Column1{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";
 echo "<style>.Column2{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";}
if (($Gladiator1 + 1 ==  $Gladiator2) && ($cbdfighting12 == "0")   && ($cbdfighting21 == "0" )) 
{ echo "<style>.Column1{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";
 echo "<style>.Column2{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";}
if (($Gladiator1 - 10 ==  $Gladiator2) && ($cbdfighting12 == "0")   && ($cbdfighting21 == "0" )) 
{ echo "<style>.Column1{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";
 echo "<style>.Column2{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";}
if (($Gladiator1 + 10 ==  $Gladiator2) && ($cbdfighting12 == "0")   && ($cbdfighting21 == "0" )) 
{ echo "<style>.Column1{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";
 echo "<style>.Column2{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";}

if (($Gladiator1 - 1 ==  $Gladiator3) && ($cbdfighting13 == "0")   && ($cbdfighting31 == "0" )) 
{ echo "<style>.Column1{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";
 echo "<style>.Column3{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";}
if (($Gladiator1 + 1 ==  $Gladiator3) && ($cbdfighting13 == "0")   && ($cbdfighting31 == "0" )) 
{ echo "<style>.Column1{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";
 echo "<style>.Column3{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";}
if (($Gladiator1 - 10 ==  $Gladiator3) && ($cbdfighting13 == "0")   && ($cbdfighting31 == "0" )) 
{ echo "<style>.Column1{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";
 echo "<style>.Column3{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";}
if (($Gladiator1 + 10 ==  $Gladiator3) && ($cbdfighting13 == "0")   && ($cbdfighting31 == "0" )) 
{ echo "<style>.Column1{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";
 echo "<style>.Column3{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";}

 if (($Gladiator2 - 1 ==  $Gladiator3) && ($cbdfighting23 == "0")   && ($cbdfighting32 == "0" )) 
{ echo "<style>.Column2{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";
 echo "<style>.Column3{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";}
if (($Gladiator2 + 1 ==  $Gladiator3) && ($cbdfighting23 == "0")   && ($cbdfighting32 == "0" )) 
{ echo "<style>.Column2{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";
 echo "<style>.Column3{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";}
if (($Gladiator2 - 10 ==  $Gladiator3) && ($cbdfighting23 == "0")   && ($cbdfighting32 == "0" )) 
{ echo "<style>.Column2{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";
 echo "<style>.Column3{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";}
if (($Gladiator2 + 10 ==  $Gladiator3) && ($cbdfighting23 == "0")   && ($cbdfighting32 == "0" )) 
{ echo "<style>.Column2{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";
 echo "<style>.Column3{background-image: url(\"images/bigresetclock.png\");background-repeat: no-repeat;background-position:center;} </style>";}


//Close attacks
if (($cbdfighting12 == "1") && ($cbdfighting21 == "1" ) && ($Gladiator1IsNotDestroyed == "0" ) && ($Gladiator2IsNotDestroyed == "0" ))
 {echo "Swordsman and Horseman FIGHT!!!" . '<img src="images/pow.png"/></br>';
 echo "<style>.Column1{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";
 echo "<style>.Column2{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($cbdfighting12 == "1") && ($cbdfighting21 == "1" ) && ($Gladiator1IsNotDestroyed == "1" ) && ($Gladiator2IsNotDestroyed == "0" ))
 {echo "Horseman and <span class=\"Ghost\">Ghost</span> FIGHT!!!" . '<img src="images/pow.png"/></br>';
 echo "<style>.Column2{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($cbdfighting12 == "1") && ($cbdfighting21 == "1" ) && ($Gladiator1IsNotDestroyed == "0" ) && ($Gladiator2IsNotDestroyed == "1" ))
 {echo "Swordsman and <span class=\"Ghost\">Ghost</span> FIGHT!!!" . '<img src="images/pow.png"/></br>';
 echo "<style>.Column1{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($cbdfighting12 == "1") && ($cbdfighting21 == "0" ) && ($Gladiator1IsNotDestroyed == "0" ) && ($Gladiator2IsNotDestroyed == "0" ))
  {echo "Swordsman ATTACKS!!! Horseman Unable!" . '<img src="images/pow.png"/></br>';
 echo "<style>.Column2{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($cbdfighting21 == "1") && ($cbdfighting12 == "0" ) && ($Gladiator1IsNotDestroyed == "0" ) && ($Gladiator2IsNotDestroyed == "0" ))
  {echo "Horseman ATTACKS!!! Swordsman Unable!" . '<img src="images/pow.png"/></br>';
 echo "<style>.Column1{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($cbdfighting12 == "1") && ($cbdfighting21 == "0" ) && ($Gladiator1IsNotDestroyed == "1" ) && ($Gladiator2IsNotDestroyed == "0" ))
  {echo "<span class=\"Ghost\">Ghost</span> ATTACKS!!! Horseman Unable!" . '<img src="images/pow.png"/></br>';
 echo "<style>.Column2{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";}

if (($cbdfighting23 == "1") && ($cbdfighting32 == "1" ) && ($Gladiator2IsNotDestroyed == "0" ) && ($Gladiator3IsNotDestroyed == "0" ))
 {echo "Horseman and Ranger FIGHT!!!" . '<img src="images/pow.png"/></br>';
 echo "<style>.Column2{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";
 echo "<style>.Column3{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif  (($cbdfighting23 == "1") && ($cbdfighting32 == "1" ) && ($Gladiator2IsNotDestroyed == "1" ) && ($Gladiator3IsNotDestroyed == "0" ))
 {echo "Ranger and <span class=\"Ghost\">Ghost</span> FIGHT!!!" . '<img src="images/pow.png"/></br>';
 echo "<style>.Column3{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif  (($cbdfighting23 == "1") && ($cbdfighting32 == "1" ) && ($Gladiator2IsNotDestroyed == "0" ) && ($Gladiator3IsNotDestroyed == "1" ))
 {echo "Horseman and <span class=\"Ghost\">Ghost</span> FIGHT!!!" . '<img src="images/pow.png"/></br>';
 echo "<style>.Column2{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($cbdfighting23 == "1")  && ($cbdfighting32 == "0" ) && ($Gladiator2IsNotDestroyed == "0" ) && ($Gladiator3IsNotDestroyed == "0" ))
  {echo "Horseman ATTACKS!!! Ranger Unable!" . '<img src="images/pow.png"/></br>';
 echo "<style>.Column3{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($cbdfighting32 == "1")  && ($cbdfighting23 == "0" ) && ($Gladiator2IsNotDestroyed == "0" ) && ($Gladiator3IsNotDestroyed == "0" ))
  {echo "Ranger ATTACKS!!! Horseman Unable!" . '<img src="images/pow.png"/></br>';
 echo "<style>.Column2{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($cbdfighting23 == "1")  && ($cbdfighting32 == "0" ) && ($Gladiator2IsNotDestroyed == "1" ) && ($Gladiator3IsNotDestroyed == "0" ))
  {echo "<span class=\"Ghost\">Ghost</span> ATTACKS!!! Ranger Unable!" . '<img src="images/pow.png"/></br>';
 echo "<style>.Column3{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";}

if (($cbdfighting13 == "1") && ($cbdfighting31 == "1" ) && ($Gladiator1IsNotDestroyed == "0" ) && ($Gladiator3IsNotDestroyed == "0" ))
 {echo "Swordsman and Ranger FIGHT!!!" . '<img src="images/pow.png"/></br>';
 echo "<style>.Column1{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";
 echo "<style>.Column3{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif  (($cbdfighting13 == "1") && ($cbdfighting31 == "1" ) && ($Gladiator1IsNotDestroyed == "1" ) && ($Gladiator3IsNotDestroyed == "0" ))
 {echo "Ranger and <span class=\"Ghost\">Ghost</span> FIGHT!!!" . '<img src="images/pow.png"/></br>';
 echo "<style>.Column3{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif  (($cbdfighting13 == "1") && ($cbdfighting31 == "1" ) && ($Gladiator1IsNotDestroyed == "0" ) && ($Gladiator3IsNotDestroyed == "1" ))
 {echo "Swordsman and <span class=\"Ghost\">Ghost</span> FIGHT!!!" . '<img src="images/pow.png"/></br>';
 echo "<style>.Column1{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($cbdfighting13 == "1")  && ($cbdfighting31 == "0" ) && ($Gladiator1IsNotDestroyed == "0" ) && ($Gladiator3IsNotDestroyed == "0" ))
  {echo "Swordsman ATTACKS!!! Ranger Unable!" . '<img src="images/pow.png"/></br>';
 echo "<style>.Column3{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($cbdfighting31 == "1")  && ($cbdfighting13 == "0" ) && ($Gladiator1IsNotDestroyed == "0" ) && ($Gladiator3IsNotDestroyed == "0" ))
  {echo "Ranger ATTACKS!!! Swordsman Unable!" . '<img src="images/pow.png"/></br>';
 echo "<style>.Column1{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($cbdfighting13 == "1")  && ($cbdfighting31 == "0" ) && ($Gladiator1IsNotDestroyed == "1" ) && ($Gladiator3IsNotDestroyed == "0" ))
  {echo "<span class=\"Ghost\">Ghost</span> ATTACKS!!! Ranger Unable!" . '<img src="images/pow.png"/></br>';
 echo "<style>.Column3{background-image: url(\"images/bigpow.png\");background-repeat: no-repeat;background-position:center;} </style>";}

     //Farrange attacks BANG!
   if (($ffighting12 == "1") && ($Gladiator2IsNotDestroyed == "0" ))
{echo "Swordsman hits Horseman BANG!!!" . '<img src="images/bang.png"/></br>';
 echo "<style>.Column2{background-image: url(\"images/bigbang.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($ffighting12 == "1") && ($Gladiator2IsNotDestroyed == "1" ))
{echo "Swordsman hits <span class=\"Ghost\">Ghost</span> BANG!!!" . '<img src="images/bang.png"/></br>';}
    if (($ffighting13 == "1") && ($Gladiator3IsNotDestroyed == "0" )) 
{echo "Swordsman hits Ranger BANG!!!" . '<img src="images/bang.png"/></br>';
 echo "<style>.Column3{background-image: url(\"images/bigbang.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($ffighting13 == "1") && ($Gladiator3IsNotDestroyed == "1" ))
{echo "Swordsman hits <span class=\"Ghost\">Ghost</span> BANG!!!" . '<img src="images/bang.png"/></br>';}
 if (($ffighting21 == "1") && ($Gladiator1IsNotDestroyed == "0" ))  
{echo "Horseman hits Swordsman BANG!!!" . '<img src="images/bang.png"/></br>';
 echo "<style>.Column1{background-image: url(\"images/bigbang.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($ffighting21 == "1") && ($Gladiator1IsNotDestroyed == "1" ))
{echo "Horseman hits <span class=\"Ghost\">Ghost</span> BANG!!!" . '<img src="images/bang.png"/></br>';}    
    if (($ffighting23 == "1") && ($Gladiator3IsNotDestroyed == "0")) 
{echo "Horseman hits Ranger BANG!!!" . '<img src="images/bang.png"/></br>';
 echo "<style>.Column3{background-image: url(\"images/bigbang.png\");background-repeat: no-repeat;background-position:center;} </style>";}
  elseif (($ffighting23 == "1") && ($Gladiator3IsNotDestroyed == "1" ))
{echo "Horseman hits <span class=\"Ghost\">Ghost</span> BANG!!!" . '<img src="images/bang.png"/></br>';} 
  if (($ffighting31 == "1") && ($Gladiator1IsNotDestroyed == "0")) 
{echo "Ranger hits Swordsman BANG!!!" . '<img src="images/bang.png"/></br>';
 echo "<style>.Column1{background-image: url(\"images/bigbang.png\");background-repeat: no-repeat;background-position:center;} </style>";}
    elseif (($ffighting31 == "1") && ($Gladiator1IsNotDestroyed == "1" ))
{echo "Ranger hits <span class=\"Ghost\">Ghost</span> BANG!!!" . '<img src="images/bang.png"/></br>';} 
    if (($ffighting32 == "1") && ($Gladiator2IsNotDestroyed == "0")) 
{echo "Ranger hits Horseman BANG!!!" . '<img src="images/bang.png"/></br>';
 echo "<style>.Column2{background-image: url(\"images/bigbang.png\");background-repeat: no-repeat;background-position:center;} </style>";}
 elseif (($ffighting32 == "1") && ($Gladiator2IsNotDestroyed == "1" ))
{echo "Ranger hits <span class=\"Ghost\">Ghost</span> BANG!!!" . '<img src="images/bang.png"/></br>';} 

//if statements declaring terrain
if (($Gladiator1 == "13") && ($Gladiator1IsNotDestroyed == "0")) {echo "Swordsman fell in a ditch!!!" . '<img src="images/bam.png"/></br>';
echo "<style>.Column1{background-image: url(\"images/bigbam.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($Gladiator1 == "13") && ($Gladiator1IsNotDestroyed == "1")) {echo "<span class=\"Ghost\">Ghost</span> fell in a ditch!!!" . '<img src="images/bam.png"/></br>';}
if (($Gladiator2 == "13") && ($Gladiator2IsNotDestroyed == "0")) {echo "Horseman fell in a ditch!!!" . '<img src="images/bam.png"/></br>';
echo "<style>.Column2{background-image: url(\"images/bigbam.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($Gladiator2 == "13") && ($Gladiator2IsNotDestroyed == "1")) {echo "<span class=\"Ghost\">Ghost</span> fell in a ditch!!!" . '<img src="images/bam.png"/></br>';}
if (($Gladiator3 == "13") && ($Gladiator3IsNotDestroyed == "0")) {echo "Ranger fell in a ditch!!!" . '<img src="images/bam.png"/></br>';
echo "<style>.Column3{background-image: url(\"images/bigbam.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($Gladiator3 == "13") && ($Gladiator3IsNotDestroyed == "1")) {echo "<span class=\"Ghost\">Ghost</span> fell in a ditch!!!" . '<img src="images/bam.png"/></br>';}

if (($Gladiator1 == "28") && ($Gladiator1IsNotDestroyed == "0")){echo "Swordsman got hit by a boulder!!!" . '<img src="images/bam.png"/></br>';
echo "<style>.Column1{background-image: url(\"images/bigbam.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($Gladiator1 == "28") && ($Gladiator1IsNotDestroyed == "1")) {echo "<span class=\"Ghost\">Ghost</span> got hit by a boulder!!!" . '<img src="images/bam.png"/></br>';}
if (($Gladiator2 == "28") && ($Gladiator2IsNotDestroyed == "0")){echo "Horseman got hit by a boulder!!!" . '<img src="images/bam.png"/></br>';
echo "<style>.Column2{background-image: url(\"images/bigbam.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($Gladiator2 == "28") && ($Gladiator2IsNotDestroyed == "1")) {echo "<span class=\"Ghost\">Ghost</span> got hit by a boulder!!!" . '<img src="images/bam.png"/></br>';}
if (($Gladiator3 == "28") && ($Gladiator3IsNotDestroyed == "0")){echo "Ranger got hit by a boulder!!!" . '<img src="images/bam.png"/></br>';
echo "<style>.Column3{background-image: url(\"images/bigbam.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($Gladiator3 == "28") && ($Gladiator3IsNotDestroyed == "1")) {echo "<span class=\"Ghost\">Ghost</span> got hit by a boulder!!!" . '<img src="images/bam.png"/></br>';}

if (($Gladiator1 == "64") && ($Gladiator1IsNotDestroyed == "0")) {echo "Swordsman ran into a shrub!!!" . '<img src="images/bam.png"/></br>';
echo "<style>.Column1{background-image: url(\"images/bigbam.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($Gladiator1 == "64") && ($Gladiator1IsNotDestroyed == "1")) {echo "<span class=\"Ghost\">Ghost</span> ran into a shrub!!!" . '<img src="images/bam.png"/></br>';}
if (($Gladiator2 == "64") && ($Gladiator2IsNotDestroyed == "0")) {echo "Horseman ran into a shrub!!!" . '<img src="images/bam.png"/></br>';
echo "<style>.Column2{background-image: url(\"images/bigbam.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($Gladiator2 == "64") && ($Gladiator2IsNotDestroyed == "1")) {echo "<span class=\"Ghost\">Ghost</span> ran into a shrub!!!" . '<img src="images/bam.png"/></br>';}
if (($Gladiator3 == "64") && ($Gladiator3IsNotDestroyed == "0")) {echo "Ranger ran into a shrub!!!" . '<img src="images/bam.png"/></br>';
echo "<style>.Column3{background-image: url(\"images/bigbam.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($Gladiator3 == "64") && ($Gladiator3IsNotDestroyed == "1")) {echo "<span class=\"Ghost\">Ghost</span> ran into a shrub!!!" . '<img src="images/bam.png"/></br>';}

if (($Gladiator1 == "89")  && ($Gladiator1IsNotDestroyed == "0")) {echo "Swordsman found the gold!!!" . '<img src="images/treasure.png"/></br>';
echo "<style>.Column1{background-image: url(\"images/bigtreasure.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($Gladiator1 == "89") && ($Gladiator1IsNotDestroyed == "1")) {echo "<span class=\"Ghost\">Ghost</span> found the gold!!!" . '<img src="images/treasure.png"/></br>';}
if (($Gladiator2 == "89") && ($Gladiator2IsNotDestroyed == "0")) {echo "Horseman found the gold!!!" . '<img src="images/treasure.png"/></br>';
echo "<style>.Column2{background-image: url(\"images/bigtreasure.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($Gladiator2 == "89") && ($Gladiator2IsNotDestroyed == "1")) {echo "<span class=\"Ghost\">Ghost</span> found the gold!!!" . '<img src="images/treasure.png"/></br>';}
if (($Gladiator3 == "89") && ($Gladiator3IsNotDestroyed == "0")){echo "Ranger found the gold!!!" . '<img src="images/treasure.png"/></br>';
echo "<style>.Column3{background-image: url(\"images/bigtreasure.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($Gladiator3 == "89") && ($Gladiator3IsNotDestroyed == "1")) {echo "<span class=\"Ghost\">Ghost</span> found the gold!!!" . '<img src="images/treasure.png"/></br>';}

if (($Gladiator1 == "92") && ($Gladiator1IsNotDestroyed == "0")){echo "Swordsman went in a river!!!" . '<img src="images/bam.png"/></br>';
echo "<style>.Column1{background-image: url(\"images/bigbam.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($Gladiator1 == "92") && ($Gladiator1IsNotDestroyed == "1")) {echo "<span class=\"Ghost\">Ghost</span> went in a river!!!" . '<img src="images/bam.png"/></br>';}
if (($Gladiator2 == "92")&& ($Gladiator2IsNotDestroyed == "0")) {echo "Horseman went in a river!!!" . '<img src="images/bam.png"/></br>';
echo "<style>.Column2{background-image: url(\"images/bigbam.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($Gladiator2 == "92") && ($Gladiator2IsNotDestroyed == "1")) {echo "<span class=\"Ghost\">Ghost</span> went in a river!!!" . '<img src="images/bam.png"/></br>';}
if (($Gladiator3 == "92")&& ($Gladiator3IsNotDestroyed == "0")) {echo "Ranger went in a river!!!" . '<img src="images/bam.png"/></br>';
echo "<style>.Column3{background-image: url(\"images/bigbam.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($Gladiator2 == "92") && ($Gladiator3IsNotDestroyed == "1")) {echo "<span class=\"Ghost\">Ghost</span> went in a river!!!" . '<img src="images/bam.png"/></br>';}

if (($Gladiator1 == $Fairyspot) && ($Gladiator1IsNotDestroyed == "0")) {echo "Swordsman found the fairy!!!" . '<img src="images/fairy.png"/></br>';
echo "<style>.Column1{background-image: url(\"images/bigfairy.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($Gladiator1 == $Fairyspot) && ($Gladiator1IsNotDestroyed == "1")) {echo "<span class=\"Ghost\">Ghost</span> found the fairy!!!" .
 '<img src="images/fairy.png"/></br>';}
if (($Gladiator2 == $Fairyspot) && ($Gladiator2IsNotDestroyed == "0")){echo "Horseman found the fairy!!!" . '<img src="images/fairy.png"/></br>';
echo "<style>.Column2{background-image: url(\"images/bigfairy.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($Gladiator2 == $Fairyspot) && ($Gladiator2IsNotDestroyed == "1")) {echo "<span class=\"Ghost\">Ghost</span> found the fairy!!!" .
 '<img src="images/fairy.png"/></br>';}
if (($Gladiator3 == $Fairyspot) && ($Gladiator3IsNotDestroyed == "0")){echo "Ranger found the fairy!!!" . '<img src="images/fairy.png"/></br>';
echo "<style>.Column3{background-image: url(\"images/bigfairy.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($Gladiator3 == $Fairyspot) && ($Gladiator3IsNotDestroyed == "1")) {echo "<span class=\"Ghost\">Ghost</span> found the fairy!!!" .
 '<img src="images/fairy.png"/></br>';}

if (($glad1gotexcalibur == "1") && ($Gladiator1IsNotDestroyed == "0")) {echo "Swordsman found Excalibur!!!" . '<img src="images/groundexcalibur.png"/></br>';
echo "<style>.Column1{background-image: url(\"images/biggroundexcalibur.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($glad1gotexcalibur == "1") && ($Gladiator1IsNotDestroyed == "1"))  {echo "Silly <span class=\"Ghost\">Ghost</span> swords are for people!!!";}
if (($glad2gotexcalibur == "1") && ($Gladiator2IsNotDestroyed == "0")) {echo "Horseman found Excalibur!!!" . '<img src="images/groundexcalibur.png"/></br>';
echo "<style>.Column2{background-image: url(\"images/biggroundexcalibur.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($glad2gotexcalibur == "1") && ($Gladiator2IsNotDestroyed == "1"))  {echo "Silly <span class=\"Ghost\">Ghost</span> swords are for people!!!";}
if (($glad3gotexcalibur == "1") && ($Gladiator3IsNotDestroyed == "0")) {echo "Ranger found Excalibur!!!" . '<img src="images/groundexcalibur.png"/></br>';
echo "<style>.Column3{background-image: url(\"images/biggroundexcalibur.png\");background-repeat: no-repeat;background-position:center;} </style>";}
elseif (($glad3gotexcalibur == "1") && ($Gladiator3IsNotDestroyed == "1"))  {echo "Silly <span class=\"Ghost\">Ghost</span> swords are for people!!!";}

//If weapon breaks
if (($BreakCounterVal1 == "1") && ($Gladiator1IsNotDestroyed == "0" ))
  {echo "Swordsman's " .   $_SESSION["Weaponbroke1stat"]  . " broke!!!" . '<img src="images/boom.png"/></br>';
echo "<style>.Column1{background-image: url(\"images/bigbackpack.png\");background-repeat: no-repeat;background-position:center;} </style>";}
if (($BreakCounterVal2 == "1") && ($Gladiator2IsNotDestroyed == "0" ))
  {echo "Horseman's " . $_SESSION["Weaponbroke2stat"] .  " broke!!!" . '<img src="images/boom.png"/></br>';
echo "<style>.Column2{background-image: url(\"images/bigbackpack.png\");background-repeat: no-repeat;background-position:center;} </style>";}
if (($BreakCounterVal3 == "1") && ($Gladiator3IsNotDestroyed == "0" ))
  {echo "Ranger's "  . $_SESSION["Weaponbroke3stat"]. " broke!!!" . '<img src="images/boom.png"/></br>';
echo "<style>.Column3{background-image: url(\"images/bigbackpack.png\");background-repeat: no-repeat;background-position:center;} </style>";}

//Begins Status Words
echo "</div><div class=\"Statuswordsglad1\">";

//HealthIcon for StatusWords
if ($Gladiator1IsNotDestroyed == "0" ){$Healthicon1 = "<img src=\"images/smallheart.png\"/>";}
else {$Healthicon1 = "<img src=\"images/smallghost.png\"/>";}	
if ($Gladiator2IsNotDestroyed == "0" ){$Healthicon2 = "<img src=\"images/smallheart.png\"/>";}
else {$Healthicon2 = "<img src=\"images/smallghost.png\"/>";}
if ($Gladiator3IsNotDestroyed == "0" ){$Healthicon3 = "<img src=\"images/smallheart.png\"/>";}
else {$Healthicon3 = "<img src=\"images/smallghost.png\"/>";}

//WeaponIcon for StatusWords
$Weaponicon1 = $_SESSION["Glad1BP1"];
$Weaponicon2 = $_SESSION["Glad1BP2"];
$Weaponicon3 = $_SESSION["Glad1BP3"];
$Weaponicon4 = $_SESSION["Gladiator2BPA"];
$Weaponicon5 = $_SESSION["Gladiator2BPB"];
$Weaponicon6 = $_SESSION["Gladiator2BPC"];
$Weaponicon7 = $_SESSION["Gladiator3BP1"];
$Weaponicon8 = $_SESSION["Gladiator3BP2"];
$Weaponicon9 = $_SESSION["Gladiator3BP3"];
$Backpackicon = "<img src=\"images/blankicon.png\"/><img src=\"images/smallbackpack.png\"/>";

//need a for loop
switch($Weaponicon1) {
case "Sword":
   $Weaponiconpic1 = "<img src=\"images/smallsword.png\"/>";
   break;
case "Mace":
   $Weaponiconpic1 = "<img src=\"images/smallmace.png\"/>";
   break;
case "Banana":
  $Weaponiconpic1 = "<img src=\"images/smallbanana.png\"/>";
   break;
   case "Bow and Arrow":
  $Weaponiconpic1 = "<img src=\"images/smallbowandarrow.png\"/>";
   break;
    case "Axe":
  $Weaponiconpic1 = "<img src=\"images/smallaxe.png\"/>";
   break;
    case "Hammer":
  $Weaponiconpic1 = "<img src=\"images/smallhammer.png\"/>";
   break;
    case "Knife":
  $Weaponiconpic1 = "<img src=\"images/smallknife.png\"/>";
   break;
    case "Spear":
  $Weaponiconpic1 = "<img src=\"images/smallspear.png\"/>";
   break;
    case "Club":
  $Weaponiconpic1 = "<img src=\"images/smallclub.png\"/>";
   break;
   case "Magic":
  $Weaponiconpic1 = "<img src=\"images/smallmagic.png\"/>";
   break;
    case "Dagger":
  $Weaponiconpic1 = "<img src=\"images/smalldagger.png\"/>";
   break;
 case "Excalibur":
  $Weaponiconpic1 = "<img src=\"images/smallexcalibur.png\"/>";
   break;
default:
 $Weaponiconpic1 =  "<img src=\"images/smallhand.png\"/>"; 
break;
}
switch($Weaponicon2) {
case "Sword":
   $Weaponiconpic2 = "<img src=\"images/smallsword.png\"/>";
   break;
case "Mace":
   $Weaponiconpic2 = "<img src=\"images/smallmace.png\"/>";
   break;
case "Banana":
  $Weaponiconpic2 = "<img src=\"images/smallbanana.png\"/>";
   break;
   case "Bow and Arrow":
  $Weaponiconpic2 = "<img src=\"images/smallbowandarrow.png\"/>";
   break;
    case "Axe":
  $Weaponiconpic2 = "<img src=\"images/smallaxe.png\"/>";
   break;
    case "Hammer":
  $Weaponiconpic2 = "<img src=\"images/smallhammer.png\"/>";
   break;
    case "Knife":
  $Weaponiconpic2 = "<img src=\"images/smallknife.png\"/>";
   break;
    case "Spear":
  $Weaponiconpic2 = "<img src=\"images/smallspear.png\"/>";
   break;
    case "Club":
  $Weaponiconpic2 = "<img src=\"images/smallclub.png\"/>";
   break;
   case "Magic":
  $Weaponiconpic2 = "<img src=\"images/smallmagic.png\"/>";
   break;
    case "Dagger":
  $Weaponiconpic2 = "<img src=\"images/smalldagger.png\"/>";
   break;
 case "Excalibur":
  $Weaponiconpic2 = "<img src=\"images/smallexcalibur.png\"/>";
   break;
default:
 $Weaponiconpic2 =  "<img src=\"images/smallhand.png\"/>"; 
break;
}
switch($Weaponicon3) {
case "Sword":
   $Weaponiconpic3 = "<img src=\"images/smallsword.png\"/>";
   break;
case "Mace":
   $Weaponiconpic3 = "<img src=\"images/smallmace.png\"/>";
   break;
case "Banana":
  $Weaponiconpic3 = "<img src=\"images/smallbanana.png\"/>";
   break;
   case "Bow and Arrow":
  $Weaponiconpic3 = "<img src=\"images/smallbowandarrow.png\"/>";
   break;
    case "Axe":
  $Weaponiconpic3 = "<img src=\"images/smallaxe.png\"/>";
   break;
    case "Hammer":
  $Weaponiconpic3 = "<img src=\"images/smallhammer.png\"/>";
   break;
    case "Knife":
  $Weaponiconpic3 = "<img src=\"images/smallknife.png\"/>";
   break;
    case "Spear":
  $Weaponiconpic3 = "<img src=\"images/smallspear.png\"/>";
   break;
    case "Club":
  $Weaponiconpic3 = "<img src=\"images/smallclub.png\"/>";
   break;
   case "Magic":
  $Weaponiconpic3 = "<img src=\"images/smallmagic.png\"/>";
   break;
    case "Dagger":
  $Weaponiconpic3 = "<img src=\"images/smalldagger.png\"/>";
   break;
 case "Excalibur":
  $Weaponiconpic3 = "<img src=\"images/smallexcalibur.png\"/>";
   break;
default:
 $Weaponiconpic3 =  "<img src=\"images/smallhand.png\"/>"; 
break;
}
switch($Weaponicon4) {
case "Sword":
   $Weaponiconpic4 = "<img src=\"images/smallsword.png\"/>";
   break;
case "Mace":
   $Weaponiconpic4 = "<img src=\"images/smallmace.png\"/>";
   break;
case "Banana":
  $Weaponiconpic4 = "<img src=\"images/smallbanana.png\"/>";
   break;
   case "Bow and Arrow":
  $Weaponiconpic4 = "<img src=\"images/smallbowandarrow.png\"/>";
   break;
    case "Axe":
  $Weaponiconpic4 = "<img src=\"images/smallaxe.png\"/>";
   break;
    case "Hammer":
  $Weaponiconpic4 = "<img src=\"images/smallhammer.png\"/>";
   break;
    case "Knife":
  $Weaponiconpic4 = "<img src=\"images/smallknife.png\"/>";
   break;
    case "Spear":
  $Weaponiconpic4 = "<img src=\"images/smallspear.png\"/>";
   break;
    case "Club":
  $Weaponiconpic4 = "<img src=\"images/smallclub.png\"/>";
   break;
   case "Magic":
  $Weaponiconpic4 = "<img src=\"images/smallmagic.png\"/>";
   break;
    case "Dagger":
  $Weaponiconpic4 = "<img src=\"images/smalldagger.png\"/>";
   break;
 case "Excalibur":
  $Weaponiconpic4 = "<img src=\"images/smallexcalibur.png\"/>";
   break;
default:
 $Weaponiconpic4 =  "<img src=\"images/smallhand.png\"/>"; 
break;
}
switch($Weaponicon5) {
case "Sword":
   $Weaponiconpic5 = "<img src=\"images/smallsword.png\"/>";
   break;
case "Mace":
   $Weaponiconpic5 = "<img src=\"images/smallmace.png\"/>";
   break;
case "Banana":
  $Weaponiconpic5 = "<img src=\"images/smallbanana.png\"/>";
   break;
   case "Bow and Arrow":
  $Weaponiconpic5 = "<img src=\"images/smallbowandarrow.png\"/>";
   break;
    case "Axe":
  $Weaponiconpic5 = "<img src=\"images/smallaxe.png\"/>";
   break;
    case "Hammer":
  $Weaponiconpic5 = "<img src=\"images/smallhammer.png\"/>";
   break;
    case "Knife":
  $Weaponiconpic5 = "<img src=\"images/smallknife.png\"/>";
   break;
    case "Spear":
  $Weaponiconpic5 = "<img src=\"images/smallspear.png\"/>";
   break;
    case "Club":
  $Weaponiconpic5 = "<img src=\"images/smallclub.png\"/>";
   break;
   case "Magic":
  $Weaponiconpic5 = "<img src=\"images/smallmagic.png\"/>";
   break;
    case "Dagger":
  $Weaponiconpic5 = "<img src=\"images/smalldagger.png\"/>";
   break;
 case "Excalibur":
  $Weaponiconpic5 = "<img src=\"images/smallexcalibur.png\"/>";
   break;
default:
 $Weaponiconpic5 =  "<img src=\"images/smallhand.png\"/>"; 
break;
}
switch($Weaponicon6) {
case "Sword":
   $Weaponiconpic6 = "<img src=\"images/smallsword.png\"/>";
   break;
case "Mace":
   $Weaponiconpic6 = "<img src=\"images/smallmace.png\"/>";
   break;
case "Banana":
  $Weaponiconpic6 = "<img src=\"images/smallbanana.png\"/>";
   break;
   case "Bow and Arrow":
  $Weaponiconpic6 = "<img src=\"images/smallbowandarrow.png\"/>";
   break;
    case "Axe":
  $Weaponiconpic6 = "<img src=\"images/smallaxe.png\"/>";
   break;
    case "Hammer":
  $Weaponiconpic6 = "<img src=\"images/smallhammer.png\"/>";
   break;
    case "Knife":
  $Weaponiconpic6 = "<img src=\"images/smallknife.png\"/>";
   break;
    case "Spear":
  $Weaponiconpic6 = "<img src=\"images/smallspear.png\"/>";
   break;
    case "Club":
  $Weaponiconpic6 = "<img src=\"images/smallclub.png\"/>";
   break;
   case "Magic":
  $Weaponiconpic6 = "<img src=\"images/smallmagic.png\"/>";
   break;
    case "Dagger":
  $Weaponiconpic6 = "<img src=\"images/smalldagger.png\"/>";
   break;
 case "Excalibur":
  $Weaponiconpic6 = "<img src=\"images/smallexcalibur.png\"/>";
   break;
default:
 $Weaponiconpic6 =  "<img src=\"images/smallhand.png\"/>"; 
break;
}
switch($Weaponicon7) {
case "Sword":
   $Weaponiconpic7 = "<img src=\"images/smallsword.png\"/>";
   break;
case "Mace":
   $Weaponiconpic7 = "<img src=\"images/smallmace.png\"/>";
   break;
case "Banana":
  $Weaponiconpic7 = "<img src=\"images/smallbanana.png\"/>";
   break;
   case "Bow and Arrow":
  $Weaponiconpic7 = "<img src=\"images/smallbowandarrow.png\"/>";
   break;
    case "Axe":
  $Weaponiconpic7 = "<img src=\"images/smallaxe.png\"/>";
   break;
    case "Hammer":
  $Weaponiconpic7 = "<img src=\"images/smallhammer.png\"/>";
   break;
    case "Knife":
  $Weaponiconpic7 = "<img src=\"images/smallknife.png\"/>";
   break;
    case "Spear":
  $Weaponiconpic7 = "<img src=\"images/smallspear.png\"/>";
   break;
    case "Club":
  $Weaponiconpic7 = "<img src=\"images/smallclub.png\"/>";
   break;
   case "Magic":
  $Weaponiconpic7 = "<img src=\"images/smallmagic.png\"/>";
   break;
    case "Dagger":
  $Weaponiconpic7 = "<img src=\"images/smalldagger.png\"/>";
   break;
 case "Excalibur":
  $Weaponiconpic7 = "<img src=\"images/smallexcalibur.png\"/>";
   break;
default:
 $Weaponiconpic7 =  "<img src=\"images/smallhand.png\"/>"; 
break;
}
switch($Weaponicon8) {
case "Sword":
   $Weaponiconpic8 = "<img src=\"images/smallsword.png\"/>";
   break;
case "Mace":
   $Weaponiconpic8 = "<img src=\"images/smallmace.png\"/>";
   break;
case "Banana":
  $Weaponiconpic8 = "<img src=\"images/smallbanana.png\"/>";
   break;
   case "Bow and Arrow":
  $Weaponiconpic8 = "<img src=\"images/smallbowandarrow.png\"/>";
   break;
    case "Axe":
  $Weaponiconpic8 = "<img src=\"images/smallaxe.png\"/>";
   break;
    case "Hammer":
  $Weaponiconpic8 = "<img src=\"images/smallhammer.png\"/>";
   break;
    case "Knife":
  $Weaponiconpic8 = "<img src=\"images/smallknife.png\"/>";
   break;
    case "Spear":
  $Weaponiconpic8 = "<img src=\"images/smallspear.png\"/>";
   break;
    case "Club":
  $Weaponiconpic8 = "<img src=\"images/smallclub.png\"/>";
   break;
   case "Magic":
  $Weaponiconpic8 = "<img src=\"images/smallmagic.png\"/>";
   break;
    case "Dagger":
  $Weaponiconpic8 = "<img src=\"images/smalldagger.png\"/>";
   break;
 case "Excalibur":
  $Weaponiconpic8 = "<img src=\"images/smallexcalibur.png\"/>";
   break;
default:
 $Weaponiconpic8 =  "<img src=\"images/smallhand.png\"/>"; 
break;
}
switch($Weaponicon9) {
case "Sword":
   $Weaponiconpic9 = "<img src=\"images/smallsword.png\"/>";
   break;
case "Mace":
   $Weaponiconpic9 = "<img src=\"images/smallmace.png\"/>";
   break;
case "Banana":
  $Weaponiconpic9 = "<img src=\"images/smallbanana.png\"/>";
   break;
   case "Bow and Arrow":
  $Weaponiconpic9 = "<img src=\"images/smallbowandarrow.png\"/>";
   break;
    case "Axe":
  $Weaponiconpic9 = "<img src=\"images/smallaxe.png\"/>";
   break;
    case "Hammer":
  $Weaponiconpic9 = "<img src=\"images/smallhammer.png\"/>";
   break;
    case "Knife":
  $Weaponiconpic9 = "<img src=\"images/smallknife.png\"/>";
   break;
    case "Spear":
  $Weaponiconpic9 = "<img src=\"images/smallspear.png\"/>";
   break;
    case "Club":
  $Weaponiconpic9 = "<img src=\"images/smallclub.png\"/>";
   break;
   case "Magic":
  $Weaponiconpic9 = "<img src=\"images/smallmagic.png\"/>";
   break;
    case "Dagger":
  $Weaponiconpic9 = "<img src=\"images/smalldagger.png\"/>";
   break;
 case "Excalibur":
  $Weaponiconpic9 = "<img src=\"images/smallexcalibur.png\"/>";
   break;
default:
 $Weaponiconpic9 =  "<img src=\"images/smallhand.png\"/>"; 
break;
}


//Statuswords
if ($_SESSION['CurrentHitPoints1'] <16 && $Gladiator1IsNotDestroyed == "0")
{echo"<style>.Statuswordsglad1{color:red;}</style>Swordsman   " . $Weaponiconpic1 ."<img src=\"images/blankicon.png\"/>
<img src=\"images/smallresetclock.png\"/>" . $ResetCounterVal4 . "<img src=\"images/smallcompass.png\"/>" .$Gladiator1 . 
 $Healthicon1 . $_SESSION['CurrentHitPoints1']. $Backpackicon .$Weaponiconpic2 .$Weaponiconpic3 . "</br>";
 }elseif ($_SESSION['CurrentHitPoints1'] <16 && $Gladiator1IsNotDestroyed == "1"){
echo"<style>.Statuswordsglad1{color:#888;}</style>Ghost   " . "<img src=\"images/blankicon.png\"/><img src=\"images/blankicon.png\"/>
 <img src=\"images/smallresetclock.png\"/>0<img src=\"images/smallcompass.png\"/>" .$Gladiator1 .  
$Healthicon1 . "</br>";} 
else{echo"<style>.Statuswordsglad1{color:#000;}</style>Swordsman  " . $Weaponiconpic1  ."<img src=\"images/blankicon.png\"/>
<img src=\"images/smallresetclock.png\"/>" . $ResetCounterVal4 . "<img src=\"images/smallcompass.png\"/> " .$Gladiator1 . 
$Healthicon1 .$_SESSION['CurrentHitPoints1']. $Backpackicon .$Weaponiconpic2 .$Weaponiconpic3 . "</br>";}
echo "</div><div class=\"Statuswordsglad2\">";

if ($_SESSION['CurrentHitPoints2'] < 16 && $Gladiator2IsNotDestroyed == "0")
{echo"<style>.Statuswordsglad2{color:red;</style>Horseman   " . $Weaponiconpic4 ."<img src=\"images/blankicon.png\"/>
<img src=\"images/smallresetclock.png\"/>" . $ResetCounterVal5 . "<img src=\"images/smallcompass.png\"/>" .$Gladiator2 . 
$Healthicon2 . $_SESSION['CurrentHitPoints2']. $Backpackicon .$Weaponiconpic5 .$Weaponiconpic6 . "</br>";
 }elseif ($_SESSION['CurrentHitPoints2'] < 16 && $Gladiator2IsNotDestroyed == "1"){
echo"<style>.Statuswordsglad2{color:#888;</style>Ghost   " . "<img src=\"images/blankicon.png\"/><img src=\"images/blankicon.png\"/>
 <img src=\"images/smallresetclock.png\"/>0<img src=\"images/smallcompass.png\"/>" .$Gladiator2 . 
$Healthicon2 . "</br>";}
 else {echo"<style>.Statuswordsglad2{color:#000;}</style>Horseman  " . $Weaponiconpic4 ."<img src=\"images/blankicon.png\"/>
 <img src=\"images/smallresetclock.png\"/>" . $ResetCounterVal5 . " <img src=\"images/smallcompass.png\"/> ".$Gladiator2 .
  $Healthicon2 .$_SESSION['CurrentHitPoints2']. $Backpackicon .$Weaponiconpic5 .$Weaponiconpic6 . "</br>";}
echo "</div><div class=\"Statuswordsglad3\">";

if ($_SESSION['CurrentHitPoints3'] <16 && $Gladiator3IsNotDestroyed == "0")
{echo"<style>.Statuswordsglad3{color:red;</style>Ranger   " . $Weaponiconpic7 ."<img src=\"images/blankicon.png\"/>
<img src=\"images/smallresetclock.png\"/>" . $ResetCounterVal6 . "<img src=\"images/smallcompass.png\"/>" .$Gladiator3 . 
 $Healthicon3 . $_SESSION['CurrentHitPoints3']. $Backpackicon .$Weaponiconpic8 .$Weaponiconpic9 . "</br>";
 }elseif ($_SESSION['CurrentHitPoints3'] <16 && $Gladiator3IsNotDestroyed == "1") {
echo"<style>.Statuswordsglad3{color:#888;</style>Ghost   " . "<img src=\"images/blankicon.png\"/><img src=\"images/blankicon.png\"/>
 <img src=\"images/smallresetclock.png\"/>0<img src=\"images/smallcompass.png\"/>" .$Gladiator3 .  
$Healthicon3 . "</br>";    
 }else {echo"<style>.Statuswordsglad3{color:#000;}</style>Ranger  " . $Weaponiconpic7 ."<img src=\"images/blankicon.png\"/>
 <img src=\"images/smallresetclock.png\"/>"  . $ResetCounterVal6. "<img src=\"images/smallcompass.png\"/> ".$Gladiator3 . 
 $Healthicon3 .$_SESSION['CurrentHitPoints3']. $Backpackicon .$Weaponiconpic8 .$Weaponiconpic9 . "</br>";}

//death status
echo "</div><div class=\"Statuswordsdead\">";

if ($Gladiator1IsNotDestroyed == "1"){echo "Swordsman has Fallen!!!" . '<img src="images/smalltombstone.png"/></br>';
echo "<style>.Column1{background-image: url(\"images/bigtombstone.png\");background-repeat: no-repeat;background-position:center;background-color:#FFF;} </style>";}
if ($Gladiator2IsNotDestroyed == "1"){echo "Horseman has Fallen!!!" . '<img src="images/smalltombstone.png"/></br>';
echo "<style>.Column2{background-image: url(\"images/bigtombstone.png\");background-repeat: no-repeat;background-position:center;background-color:#FFF;} </style>";}
if ($Gladiator3IsNotDestroyed == "1"){echo "Ranger has Fallen!!!" . '<img src="images/smalltombstone.png"/></br>';
echo "<style>.Column3{background-image: url(\"images/bigtombstone.png\");background-repeat: no-repeat;background-position:center;background-color:#FFF;} </style>";}
echo"</div>";

//gameover code
if ($Gladiator1IsNotDestroyed == "1" && $Gladiator2IsNotDestroyed == "1" || $Gladiator1IsNotDestroyed == "1" && $Gladiator3IsNotDestroyed == "1" || $Gladiator2IsNotDestroyed == "1" && $Gladiator3IsNotDestroyed == "1")
{echo "<style>.Status{background-image: url(\"images/gameover.png\");background-repeat: no-repeat;background-position:center;}
.square{color:#000;}.dark{background-color:#FFF;}.light{background-color:#FFF;}.square:nth-child(89){background-color:#FFF;}.square:nth-child(92){background-color:#FFF;}</style>";session_unset();
} 

echo "</div></center>";

}}

$status = new status;

?>