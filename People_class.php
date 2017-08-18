<?php
abstract class Gladiators {
    protected $MaxHitpoints_;
    protected $BackpackWeapon_;
    protected $WeaponinHand_;
    protected $BackpackWeaponAdd_;
    abstract public function setMaxHitpoints($MaxHitpoints);
    abstract public function getMaxHitpoints();
    abstract public function setBackpackWeapon($BackpackWeapon);
    abstract public function getBackpackWeapon();
    abstract public function setWeaponinHand($WeaponinHand);
    abstract public function getWeaponinHand();
    }
   interface weaponattack{
  public function weaponattack();

}
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
class Ranger extends Gladiators implements weaponattack
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


class Horsemen extends Gladiators implements weaponattack
{
    public function setMaxHitpoints($MaxHitpoints){
        $this->MaxHitpoints_ = $MaxHitpoints;}
    public function getMaxHitpoints(){
        return $this->MaxHitpoints_;}
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
    public function weaponattack(){
        echo '<br/>I use weapon BAM!!!';}
}       

 

echo '<pre>';
print_r( get_class_methods('swords'));
echo '</pre>';

$swords = new Swordsmen;
$swords->setMaxHitpoints(100);
$swords->setBackpackWeapon(1);
$swords->setWeaponinHand(1);
$swords->setBackpackWeaponAdd(['Excaliber ']);
echo "I have ", $swords->getMaxHitpoints() ," Max Hitpoints<br/>";
echo "I have ", $swords->getBackpackWeapon() ," Weapons in my backpack</br>";
echo "I have ", $swords->getWeaponinHand() ," Weapon in my hand</br>";
echo "I have ", implode('', $swords->getBackpackWeaponAdd())," in my backpack!";
$swords->weaponattack();

echo '<pre>';
print_r( get_class_methods('rangers'));
echo '</pre>';
$rangers = new Ranger;
$rangers->setMaxHitpoints(100);
$rangers->setBackpackWeapon(5);
$rangers->setWeaponinHand(0);
$rangers->setBackpackWeaponAdd(['sword, ','axe, ','spear, ','dagger, ','bow and arrows']);
echo "I have ", $rangers->getMaxHitpoints() ," Max Hitpoints<br/>";
echo "I have ", $rangers->getBackpackWeapon() ," Weapon in my backpack</br>";
echo "I have ", $rangers->getWeaponinHand() ," Weapon in my hand</br>";
echo "I have ", implode('', $rangers->getBackpackWeaponAdd())," in my backpack!";
$rangers->weaponattack();

echo '<pre>';
print_r( get_class_methods('horsemens'));
echo '</pre>';

$horsemens = new Horsemen;
$horsemens->setMaxHitpoints(100);
$horsemens->setBackpackWeapon(2);
$horsemens->setWeaponinHand(1);
$horsemens->setBackpackWeaponAdd(['sword, ','axe']);
echo "I have ", $horsemens->getMaxHitpoints() ," Max Hitpoints<br/>";
echo "I have ", $horsemens->getBackpackWeapon() ," Weapon in my backpack</br>";
echo "I have ", $horsemens->getWeaponinHand() ," Weapon in my hand</br>";
echo "I have ", implode('', $horsemens->getBackpackWeaponAdd())," in my backpack!";
$horsemens->weaponattack();

?>