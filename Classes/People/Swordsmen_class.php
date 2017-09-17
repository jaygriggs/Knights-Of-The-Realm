<?php
class Swordsmen extends Gladiators implements weaponattack
{

    public function setBackpackWeapon($BackpackWeapon){
        $this->BackpackWeapon_ = $BackpackWeapon;}
    public function getBackpackWeapon(){
        return $this->BackpackWeapon_;}
    public function setBackpackWeaponAdd($BackpackWeaponAdd) { 
        $this->BackpackWeaponAdd_= $BackpackWeaponAdd;} 
    public function getBackpackWeaponAdd(){
      return $this->BackpackWeaponAdd_;} 
    public function setWeaponinHand($WeaponinHand){
        $this->WeaponinHand_ = $WeaponinHand;}
    public function getWeaponinHand(){
        return $this->WeaponinHand_;}   
 
 function __construct()
    {
    $this->GladiatorN1();
    $this->GladiatorWH1();
    $this->GladiatorW1();
    }

         function GladiatorN1()
       {
         $g1=array("Tetraites","Spiculus","Hermes","Hercules","Marcus Attilius","Carpophorus","Crixus","Commodus","Flamma","King Arthur","Spartacus","Verus");
         $random_keys1=array_rand($g1,1);
         $GladiatorkeyName=$g1[$random_keys1];
         if(isset($_SESSION['GladName']) && !empty($_SESSION['GladName'])) { $GladiatorkeyName = $_SESSION["GladName"];}
         else{$GladiatorName=$GladiatorkeyName;}
         $GladiatorName=$GladiatorkeyName; 
         $_SESSION["GladName"] = $GladiatorkeyName;
         echo "</br>I am the mighty " . $GladiatorName;
         if ($GladiatorkeyName == "Hercules"){echo"<img src=\"images/smallheart.png\"/>";} 
         elseif ($GladiatorkeyName == "King Arthur"){echo"<img src=\"images/smallshield.png\"/>";} 
         echo "</br></br>";
       }

       function GladiatorWH1()
      {
        echo "I have a "; 
          if(isset($_SESSION["Glad1BP1"]) && !empty($_SESSION["Glad1BP1"])){echo $_SESSION["Glad1BP1"];}
        echo" in my hand<img src=\"images/blankicon.png\"/>";
        if(isset($_SESSION["Gladiator1WHIMG"]) && !empty($_SESSION["Gladiator1WHIMG"])){echo $_SESSION["Gladiator1WHIMG"];}
        echo"</br>" ;
      }

       function GladiatorW1()
       {
        echo "I have a ";
        if(isset($_SESSION["Glad1BP2"]) && !empty($_SESSION["Glad1BP2"])){echo $_SESSION["Glad1BP2"];}
        echo" and ";
        if(isset($_SESSION["Glad1BP3"]) && !empty($_SESSION["Glad1BP3"])){echo $_SESSION["Glad1BP3"];}
         echo" in my backpack";
       }

    public function weaponattack(){
        echo '<br/>I use weapon BAM!!!';}
    
} 

?>