<?php
require_once('People_class.php');
require_once('Weapons_class.php');





echo '<pre>';
print_r( get_class_methods('swords'));
echo '</pre>';

$swords = new Swordsmen;
$swords->setMaxHitpoints(100);
$swords->setBackpackWeapon(1);
$swords->setWeaponinHand(1);
echo "I have ", $swords->getMaxHitpoints() ," Max Hitpoints<br/>";
echo "I have ", $swords->getBackpackWeapon() ," Weapons in my backpack</br>";
echo "I have ", $swords->getWeaponinHand() ," Weapon in my hand</br>";
$swords->weaponattack();

echo '<pre>';
print_r( get_class_methods('rangers'));
echo '</pre>';
$rangers = new Ranger;
$rangers->setMaxHitpoints(100);
$rangers->setBackpackWeapon(1);
$rangers->setWeaponinHand(0);
echo "I have ", $rangers->getMaxHitpoints() ," Max Hitpoints<br/>";
echo "I have ", $rangers->getBackpackWeapon() ," Weapon in my backpack</br>";
echo "I have ", $rangers->getWeaponinHand() ," Weapon in my hand</br>";
$rangers->weaponattack();

echo '<pre>';
print_r( get_class_methods('horsemens'));
echo '</pre>';

$horsemens = new Horsemen;
$horsemens->setMaxHitpoints(100);
$horsemens->setBackpackWeapon(2);
$horsemens->setWeaponinHand(1);
echo "I have ", $horsemens->getMaxHitpoints() ," Max Hitpoints<br/>";
echo "I have ", $horsemens->getBackpackWeapon() ," Weapon in my backpack</br>";
echo "I have ", $horsemens->getWeaponinHand() ," Weapon in my hand</br>";
$horsemens->weaponattack();

echo '<pre>';
print_r( get_class_methods('Spear'));
echo '</pre>';

$Spear = new Range_Weapon();
$Spear->setminimumdamage(29);
$Spear->setmaximumdamage(50);
$Spear->setresettime(60);
$Spear->sethandsneeded(2);
$Spear->setdurability(4);
$Spear->setName('spear');

echo $Spear->getName(),"<br/>I'm using ";
echo $Spear->gethandsneeded()," hands to hold my weapon<br/>My weapons durability is ";
echo $Spear->getdurability();
$Spear->attack();
echo"<br/>";
echo $Spear->getresettime()," seconds before I can use my weapon again!<br/>";


echo '<pre>';
print_r( get_class_methods('Axe'));
echo '</pre>';

$Axe = new Melee_Weapon();
$Axe->setminimumdamage(40);
$Axe->setmaximumdamage(100);
$Axe->setresettime(15);
$Axe->sethandsneeded(1);
$Axe->setdurability(2);
$Axe->setName('axe');

echo $Axe->getName(),"<br/>I'm using ";
echo $Axe->gethandsneeded()," hands to hold my weapon<br/>My weapons durability is ";
echo $Axe->getdurability();
$Axe->attack();
echo"<br/>";
echo $Axe->getresettime()," seconds before I can use my weapon again!";


?>