<?php
class Swordsmen extends Gladiators implements weaponattack
{
    public function setMaxHitpoints($MaxHitpoints){
        $this->MaxHitpoints_ = $MaxHitpoints;}
    public function getMaxHitpoints(){
        return $this->MaxHitpoints_;}
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
    public function weaponattack(){
        echo '<br/>I use weapon BAM!!!';}
    
} 


?>