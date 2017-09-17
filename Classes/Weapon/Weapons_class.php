<?php
abstract class Weapon {
      protected $minimumdamage_;
      protected $maximumdamage_;
      protected $resettime;
      protected $durability;
      //below are functions I think all weapons will have,including range weapons and melee weapons
      abstract public function setminimumdamage($minimumdamage);
      abstract public function getminimumdamage();
      abstract public function setmaximumdamage($maximumdamage);
      abstract public function getmaximumdamage();
      abstract public function setresettime($resettime);
      abstract public function getresettime();
      abstract public function setdurability($durability);
      abstract public function getdurability();
}
//So we implement an interface to attack enemy
interface Useweapon{
  public function attack();
}

?>