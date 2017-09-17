<?php

 session_start(); 

require_once('style.css');
require_once('Classes/Map/Map_class.php');
require_once('Classes/Map/Mapobject_class.php');
require_once('Classes/Runtime/Runtime_class.php');
require_once('Classes/Terrain/Excalibur_class.php');
require_once('Classes/Terrain/Fairy_class.php');
require_once('Classes/Runtime/Button_class.php');
require_once('Classes/Terrain/Shrub_class.php');
require_once('Classes/Terrain/Boulder_class.php');
require_once('Classes/Terrain/Ditch_class.php');
require_once('Classes/Terrain/River_class.php');
require_once('Classes/Terrain/Treasure_class.php');
require_once('Classes/People/People_class.php');
require_once('Classes/People/Swordsmen_class.php');
require_once('Classes/People/Horsemen_class.php');
require_once('Classes/People/Ranger_class.php');
require_once('Classes/Weapon/Weapons_class.php');
require_once('Classes/Weapon/Melee_Weapon_class.php');
require_once('Classes/Weapon/Range_Weapon_class.php');
require_once('Classes/Weapon/Backpack_class.php');
require_once('Classes/Weapon/Weapon_In_Hand_class.php');
require_once('Classes/Runtime/Fight_Damage_class.php');
require_once('Classes/Weapon/Weapon_Counter_class.php');
require_once('Classes/Runtime/Health_class.php');
require_once('Classes/Runtime/Status_class.php');
$runtimes = new runtime;

?>
