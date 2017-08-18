<?php
abstract class Weapon {
      protected $minimumdamage_;
      protected $maximumdamage_;
      protected $resettime;
      protected $handsneeded;
      protected $durability;
      //below are functions I think all weapons will have,including range weapons and melee weapons
      abstract public function setminimumdamage($minimumdamage);
      abstract public function getminimumdamage();
      abstract public function setmaximumdamage($maximumdamage);
      abstract public function getmaximumdamage();
      abstract public function setresettime($resettime);
      abstract public function getresettime();
      abstract public function sethandsneeded($handsneeded);
      abstract public function gethandsneeded();
      abstract public function setdurability($durability);
      abstract public function getdurability();
    
     
}

//So we implement an interface to attack enemy
interface Useweapon{
  public function attack();
}


class Range_Weapon extends Weapon implements Useweapon{
      protected $name_; //Weapon's name


      public function setminimumdamage($minimumdamage){
        $this->minimumdamage_ = $minimumdamage;}
      public function getminimumdamage(){
        return $this->minimumdamage_;}
      public function setmaximumdamage($maximumdamage){
        $this->maximumdamage_ = $maximumdamage;}
      public function getmaximumdamage(){
        return $this->maximumdamage_;}

      public function setresettime($resettime){
        $this->resettime_ = $resettime;}
      public function getresettime(){
        return $this->resettime_;}
      
      public function sethandsneeded($handsneeded){
        $this->handsneeded_ = $handsneeded;}
      public function gethandsneeded(){
         return $this->handsneeded_;}

      public function setdurability($durability){
        $this->durability_ = $durability;}
      public function getdurability(){
        return $this->durability_;}



      public function setName($name){
         $this->name_ = $name;}
      public function getName(){
         echo 'I have a ' , $this->name_;}
///when using interface
      public function attack(){
         echo '<br/>I use weapon BAM!!!';
         echo '<br/>Damage is ', rand($this->minimumdamage_,$this->maximumdamage_ ) ;
       
      
      }


}



class Melee_Weapon extends Weapon implements Useweapon{

      protected $name_;//Weapon feature

      public function setminimumdamage($minimumdamage){
        $this->minimumdamage_ = $minimumdamage;}
      public function getminimumdamage(){
        return $this->minimumdamage_;}
      public function setmaximumdamage($maximumdamage){
        $this->maximumdamage_ = $maximumdamage;}
      public function getmaximumdamage(){
        return $this->maximumdamage_;}
      
      public function setresettime($resettime){
        $this->resettime_ = $resettime;}
      public function getresettime(){
        return $this->resettime_;}

      public function sethandsneeded($handsneeded){
        $this->handsneeded_ = $handsneeded;}
      public function gethandsneeded(){
         return $this->handsneeded_;}
      public function setdurability($durability){
        $this->durability_ = $durability;}
      public function getdurability(){
        return $this->durability_;}


      public function setName($name){
         $this->name_ = $name; }
      public function getName(){
         echo 'I have a ' , $this->name_; }

      //below implementations from interfaces function. (features that weapons dont do on their own).
      public function attack(){
        echo '<br/>I use weapon BAM!!!';  
        echo '<br/>Damage is ', rand($this->minimumdamage_,$this->maximumdamage_ ) ;
          
      }
}




?>