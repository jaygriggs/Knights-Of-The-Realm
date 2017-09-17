<?php

abstract class Gladiators {
  protected $MaxHitpoints_;
  protected $BackpackWeapon_;
  protected $WeaponinHand_;
  protected $BackpackWeaponAdd_;
  abstract public function setBackpackWeapon($BackpackWeapon);
  abstract public function getBackpackWeapon();
  abstract public function setWeaponinHand($WeaponinHand);
  abstract public function getWeaponinHand();
}

interface weaponattack{
  public function weaponattack();
}

?>