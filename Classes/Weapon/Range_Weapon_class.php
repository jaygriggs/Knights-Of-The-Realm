<?php
class Range_Weapon extends Weapon implements Useweapon{
      protected $name_; 

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
      public function setdurability($durability){
        $this->durability_ = $durability;}
      public function getdurability(){
        return $this->durability_;}
      public function setName($name){
         $this->name_ = $name;}
      public function getName(){
         echo 'I have a ' , $this->name_;}

      public function attack(){
         echo '<br/>I use weapon BAM!!!';
         echo '<br/>Damage is ', rand($this->minimumdamage_,$this->maximumdamage_ ) ;
       
      }

}
?>