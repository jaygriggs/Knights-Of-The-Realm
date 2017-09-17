<?php

class GladiatorGetPosition 
{

private static $Position;
public $Positionvalue1;
public $Positionvalue2;
public $Positionvalue3;

private function initialize() 
{

    $Gladspot =  range(1,100);
    $Gladspotrandom =array_rand($Gladspot,3);
    shuffle($Gladspotrandom);

      $Gladspot[$Gladspotrandom[0]];
     if(!isset($_SESSION['startgame']) && empty($_SESSION['startgame']))
        {$Gladiator1 = "1";}
     else{ $Gladiator1 = $Gladspot[$Gladspotrandom[0]];} 
    $Gladspot[$Gladspotrandom[1]];
     if(!isset($_SESSION['startgame']) && empty($_SESSION['startgame']))
        {$Gladiator2 = "10";}
     else{ $Gladiator2 = $Gladspot[$Gladspotrandom[1]];}
    $Gladspot[$Gladspotrandom[2]];
     if(!isset($_SESSION['startgame']) && empty($_SESSION['startgame']))
        {$Gladiator3 = "100";}    
     else{$Gladiator3 = $Gladspot[$Gladspotrandom[2]];}

    $this->Positionvalue1 = $Gladiator1;
    $this->Positionvalue2 = $Gladiator2;
    $this->Positionvalue3 = $Gladiator3;
  
}

public function getPosition()
{
    if (!isset(self::$Position))
    {
        $class = __CLASS__;
        self::$Position = new $class();
        self::$Position->initialize();
    }
    return self::$Position;
}
}

$_SESSION["startgame"] = "yes";

class runtime

{

      function __construct()
    {
           $this->makegladiators(); 
          
    }

      function makegladiators()
      {

echo "<div class=\"row\"><div class=\"Column1\"><b>Swordsman</b></br>";
print_r( get_class_methods('swords'));

$myResetCounter = GladiatorGetResetCounter::getResetCounter();
$ResetCounterVal4 = $myResetCounter->ResetCounterValue4;
$ResetCounterVal5 = $myResetCounter->ResetCounterValue5;
$ResetCounterVal6 = $myResetCounter->ResetCounterValue6;

            $isdead1=0;
            $isdead2=0;
            $isdead3=0;
            if(isset($_SESSION['Gladisdead1']) && !empty($_SESSION['Gladisdead1']) && $_SESSION["Gladisdead1"] == "1" ){$isdead1 =1; }
            if(isset($_SESSION['Gladisdead2']) && !empty($_SESSION['Gladisdead2']) && $_SESSION["Gladisdead2"] == "1" ){$isdead2 =1; }
            if(isset($_SESSION['Gladisdead3']) && !empty($_SESSION['Gladisdead3']) && $_SESSION["Gladisdead3"] == "1" ){$isdead3 =1; }

$swords = new Swordsmen;
$swords->setBackpackWeapon(1);
$swords->setWeaponinHand(1);

if ($isdead1 =="0" ){
echo "</br>My ";
 if(isset($_SESSION["Glad1BP1"]) && !empty($_SESSION["Glad1BP1"])){echo $_SESSION["Glad1BP1"];} 
echo" has a Durability of" . "<img src=\"images/blankicon.png\"/>";
if(isset($_SESSION['Gladiator1WHDUR']) && !empty($_SESSION['Gladiator1WHDUR'])){echo $_SESSION['Gladiator1WHDUR'];} 
echo "</br>My ";
if(isset($_SESSION["Glad1BP1"]) && !empty($_SESSION["Glad1BP1"])){echo $_SESSION["Glad1BP1"];} 
echo " has a Reset Time of" . "<img src=\"images/blankicon.png\"/>" . $ResetCounterVal4 ;
}

echo "</div></br><div class=\"Column2\"><b>Horseman</b></br>";
print_r( get_class_methods('horsemens'));

$horsemens = new Horsemen;
$horsemens->setBackpackWeapon(2);
$horsemens->setWeaponinHand(1);

if ($isdead2 =="0" ){
echo "</br>My "; 
if(isset($_SESSION["Gladiator2BPA"]) && !empty($_SESSION["Gladiator2BPA"])){echo $_SESSION["Gladiator2BPA"];}
echo" has a Durability of" . "<img src=\"images/blankicon.png\"/>";
if(isset($_SESSION["Glad2WHDUR"]) && !empty($_SESSION["Glad2WHDUR"])){echo $_SESSION["Glad2WHDUR"];}
echo "</br>My ";
if(isset($_SESSION["Gladiator2BPA"]) && !empty($_SESSION["Gladiator2BPA"])){echo $_SESSION["Gladiator2BPA"];}
echo " has a Reset Time of" . "<img src=\"images/blankicon.png\"/>" . $ResetCounterVal5;
}
echo "</div></br><div class=\"Column3\"><b>Ranger</b></br>";

print_r( get_class_methods('rangers'));

$rangers = new Ranger;
$rangers->setBackpackWeapon(1);
$rangers->setWeaponinHand(0);
if ($isdead3 =="0" ){
echo "</br>My ";
if(isset($_SESSION["Gladiator3BP1"]) && !empty($_SESSION["Gladiator3BP1"])){echo $_SESSION["Gladiator3BP1"];} 
 echo " has a Durability of" . "<img src=\"images/blankicon.png\"/>";
if(isset($_SESSION["Glad3WHandDUR"]) && !empty($_SESSION["Glad3WHandDUR"])){echo $_SESSION["Glad3WHandDUR"];} 
echo "</br>My ";
if(isset($_SESSION["Gladiator2BPA"]) && !empty($_SESSION["Gladiator2BPA"])){echo $_SESSION["Gladiator2BPA"];} 
 echo " has a Reset Time of" . "<img src=\"images/blankicon.png\"/>" . $ResetCounterVal6;
 } 

echo "</div></div></br><div class\"stuff\"><center>";

if(isset($_SESSION['turns']))
    $_SESSION['turns'] = $_SESSION['turns']+ 1;
else
    $_SESSION['turns'] = 0;

echo "Turns = ". $_SESSION['turns']; 

echo "</br></br>Created By Jay Griggs 2017";
echo"</center></div><br/>";

 }
}

?>