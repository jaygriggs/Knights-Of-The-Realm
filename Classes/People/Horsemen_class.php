<?php
class Horsemen extends Gladiators implements weaponattack
{
    
    public function setBackpackWeapon($BackpackWeapon){
        $this->BackpackWeapon_ = $BackpackWeapon;}
    public function getBackpackWeapon() {  
        return $this->BackpackWeapon_; }
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
    $this->GladiatorN2();
    $this->GladiatorWH2();
    $this->GladiatorW2();
    }
       function GladiatorN2()
       {
         $g2=array("Tetraites","Spiculus","Hermes","King Arthur","Hercules","Marcus Attilius","Carpophorus","Crixus","Commodus","Flamma","Spartacus","Verus");
         $random_keys2=array_rand($g2,1);
         $GladiatorkeyName2=$g2[$random_keys2];
         if(isset($_SESSION['GladName2']) && !empty($_SESSION['GladName2'])) { $GladiatorkeyName2 = $_SESSION["GladName2"];}
         else{$GladiatorName2=$GladiatorkeyName2;}
         $GladiatorName2=$GladiatorkeyName2; 
         $_SESSION["GladName2"] = $GladiatorkeyName2;
         echo "</br>I am the mighty " . $GladiatorName2;
        if ($GladiatorkeyName2 == "Hercules"){echo"<img src=\"images/smallheart.png\"/>";} 
        elseif ($GladiatorkeyName2 == "King Arthur"){echo"<img src=\"images/smallshield.png\"/>";} 
         echo "</br></br>";
       }

       function GladiatorWH2()
       {
        echo "I have a ";
          if(isset($_SESSION["Gladiator2BPA"]) && !empty($_SESSION["Gladiator2BPA"])){echo $_SESSION["Gladiator2BPA"];}
        echo " in my hand<img src=\"images/blankicon.png\"/>"; 
          if(isset($_SESSION["Glad2WHIMG"]) && !empty($_SESSION["Glad2WHIMG"])){echo $_SESSION["Glad2WHIMG"];}
        echo"</br>" ;}
       function GladiatorW2()
       {
       echo "I have a ";
        if(isset($_SESSION["Gladiator2BPB"]) && !empty($_SESSION["Gladiator2BPB"])){echo $_SESSION["Gladiator2BPB"];}
       echo " and ";
        if(isset($_SESSION["Gladiator2BPC"]) && !empty($_SESSION["Gladiator2BPC"])){echo $_SESSION["Gladiator2BPC"];}
       echo " in my backpack";}
       
    public function weaponattack(){
        echo '<br/>I use weapon BAM!!!';}

}       
?>