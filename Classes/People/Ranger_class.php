<?php
class Ranger extends Gladiators implements weaponattack
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
    $this->GladiatorN3();
    $this->GladiatorWH3();
    $this->GladiatorW3();
    }

         function GladiatorN3()
       {
         $g3=array("Tetraites","Spiculus","Hermes","Hercules","Marcus Attilius","Carpophorus","Crixus","Commodus","King Arthur","Flamma","Spartacus","Verus");
         $random_keys3=array_rand($g3,1);
         $GladiatorkeyName3=$g3[$random_keys3];     
         if(isset($_SESSION['GladName3']) && !empty($_SESSION['GladName3'])) { $GladiatorkeyName3 = $_SESSION["GladName3"];}
         else{$GladiatorName3=$GladiatorkeyName3;}
         $GladiatorName3=$GladiatorkeyName3; 
         $_SESSION["GladName3"] = $GladiatorkeyName3;
         echo "</br>I am the mighty " . $GladiatorName3;
          if ($GladiatorkeyName3 == "Hercules"){echo"<img src=\"images/smallheart.png\"/>";}
          elseif ($GladiatorkeyName3 == "King Arthur"){echo"<img src=\"images/smallshield.png\"/>";}  
         echo "</br></br>";
       }

       function GladiatorWH3()
      {
      echo "I have a "; 
       if(isset($_SESSION["Gladiator3BP1"]) && !empty($_SESSION["Gladiator3BP1"])){echo $_SESSION["Gladiator3BP1"];}
      echo " in my hand<img src=\"images/blankicon.png\"/>"; 
       if(isset($_SESSION["Glad3WHandIMG"]) && !empty($_SESSION["Glad3WHandIMG"])){echo $_SESSION["Glad3WHandIMG"];}
      echo "</br>" ;
      }

       function GladiatorW3()
       {
       echo "I have a ";
       if(isset($_SESSION["Gladiator3BP2"]) && !empty($_SESSION["Gladiator3BP2"])){echo $_SESSION["Gladiator3BP2"];}
       echo " and ";
       if(isset($_SESSION["Gladiator3BP3"]) && !empty($_SESSION["Gladiator3BP3"])){echo $_SESSION["Gladiator3BP3"];}
       echo" in my backpack";
       }

    public function weaponattack(){
        echo '<br/>I use weapon BAM!!!';}
}       

?>