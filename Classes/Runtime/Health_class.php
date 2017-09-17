<?php

class GladiatorGetHitPoints 
{

    private static $HitPoints;
    public $HitPointsValue1;
    public $HitPointsValue2;
    public $HitPointsValue3;

    private function initialize() 
    {

        $myTakeDamage = GladiatorGetTakeDamage::getTakeDamage();
        $TotalDamage1 = $myTakeDamage->TakeDamageValue1;
        $TotalDamage2 = $myTakeDamage->TakeDamageValue2;
        $TotalDamage3 = $myTakeDamage->TakeDamageValue3;

        $isdead1=0;
        $isdead2=0;
        $isdead3=0;
        $CHP1=0;
        $CHP2=0;
        $CHP3=0;

        if(isset($_SESSION['Gladisdead1']) && !empty($_SESSION['Gladisdead1']) && $_SESSION["Gladisdead1"] == "1" ){$isdead1 =1; }
        if(isset($_SESSION['Gladisdead2']) && !empty($_SESSION['Gladisdead2']) && $_SESSION["Gladisdead2"] == "1" ){$isdead2 =1; }
        if(isset($_SESSION['Gladisdead3']) && !empty($_SESSION['Gladisdead3']) && $_SESSION["Gladisdead3"] == "1" ){$isdead3 =1; }
        if(isset($_SESSION['CurrentHitPoints1']) && !empty($_SESSION['CurrentHitPoints1'])){$CHP1 =1;}    
        if(isset($_SESSION['CurrentHitPoints2']) && !empty($_SESSION['CurrentHitPoints2'])){$CHP2 =1;} 
        if(isset($_SESSION['CurrentHitPoints3']) && !empty($_SESSION['CurrentHitPoints3'])){$CHP3 =1;} 

        if (($CHP1 == "1") && ($isdead1 == "0"))
            {$CurrentHitPoints1 = $_SESSION["CurrentHitPoints1"] - $TotalDamage1;}
        elseif (($CHP1 == "0") && ($isdead1 == "1"))
            {$CurrentHitPoints1 = 0 - $TotalDamage1;}
        elseif (($CHP1 == "1") && ($isdead1 == "1"))
            {$CurrentHitPoints1 = 0 - $TotalDamage1;}
        elseif (($CHP1 == "0") && ($isdead1 == "0"))
            {$CurrentHitPoints1 = 100 - $TotalDamage1;}

        if (($CHP2 == "1") && ($isdead2 == "0"))
            {$CurrentHitPoints2 = $_SESSION["CurrentHitPoints2"] - $TotalDamage2;}
        elseif (($CHP2 == "0") && ($isdead2 == "1"))
            {$CurrentHitPoints2 = 0 - $TotalDamage2;}
        elseif (($CHP2 == "1") && ($isdead2 == "1"))
            {$CurrentHitPoints2 = 0 - $TotalDamage2;}
        elseif (($CHP2 == "0") && ($isdead2 == "0"))
            {$CurrentHitPoints2 = 100 - $TotalDamage2;}

        if (($CHP3 == "1") && ($isdead3 == "0"))
            {$CurrentHitPoints3 = $_SESSION["CurrentHitPoints3"] - $TotalDamage3;}
        elseif (($CHP3 == "0") && ($isdead3 == "1"))
            {$CurrentHitPoints3 = 0 - $TotalDamage3;}
        elseif (($CHP3 == "1") && ($isdead3 == "1"))
            {$CurrentHitPoints3 = 0 - $TotalDamage3;}
        elseif (($CHP3 == "0") && ($isdead3 == "0"))
            {$CurrentHitPoints3 = 100 - $TotalDamage3;}

        $_SESSION['CurrentHitPoints1'] = $CurrentHitPoints1;
        $_SESSION['CurrentHitPoints2'] = $CurrentHitPoints2;
        $_SESSION['CurrentHitPoints3'] = $CurrentHitPoints3;

    }

    public function getHitPoints()
    {
        if (!isset(self::$HitPoints))
        {
            $class = __CLASS__;
            self::$HitPoints = new $class();
            self::$HitPoints->initialize();
        }
        return self::$HitPoints;
    }

}

class GladiatorGetTakeDamage 
{

    private static $TakeDamage;
    public $TakeDamageValue1;
    public $TakeDamageValue2;
    public $TakeDamageValue3;

    private function initialize() 
    {

//Damage Values for Total Damage
        $myShrubDamage = GladiatorGetShrubDamage::getShrubDamage();
        $SDamage1 = $myShrubDamage->ShrubDamageValue1;
        $SDamage2 = $myShrubDamage->ShrubDamageValue2;
        $SDamage3 = $myShrubDamage->ShrubDamageValue3;

        $myDitchDamage = GladiatorGetDitchDamage::getDitchDamage();
        $DDamage1 = $myDitchDamage->DitchDamageValue1;
        $DDamage2 = $myDitchDamage->DitchDamageValue2;
        $DDamage3 = $myDitchDamage->DitchDamageValue3;

        $myBoulderDamage = GladiatorGetBoulderDamage::getBoulderDamage();
        $BDamage1 = $myBoulderDamage->BoulderDamageValue1;
        $BDamage2 = $myBoulderDamage->BoulderDamageValue2;
        $BDamage3 = $myBoulderDamage->BoulderDamageValue3;

        $myRiverDamage = GladiatorGetRiverDamage::getRiverDamage();
        $RDamage1 = $myRiverDamage->RiverDamageValue1;
        $RDamage2 = $myRiverDamage->RiverDamageValue2;
        $RDamage3 = $myRiverDamage->RiverDamageValue3;

        $myTreasureDamage = GladiatorGetTreasureDamage::getTreasureDamage();
        $TDamage1 = $myTreasureDamage->TreasureDamageValue1;
        $TDamage2 = $myTreasureDamage->TreasureDamageValue2;
        $TDamage3 = $myTreasureDamage->TreasureDamageValue3;

        $myFightDamage = GladiatorGetFightDamage::getFightDamage();
        $FDamage1 = $myFightDamage->FightDamageValue1;
        $FDamage2 = $myFightDamage->FightDamageValue2;
        $FDamage3 = $myFightDamage->FightDamageValue3;

        $myFairyDamage = GladiatorGetFairyDamage::getFairyDamage();
        $FairyDamage1 = $myFairyDamage->FairyDamageValue1;
        $FairyDamage2 = $myFairyDamage->FairyDamageValue2;
        $FairyDamage3 = $myFairyDamage->FairyDamageValue3;

        $Hercules1=0;
        $Hercules2=0;
        $Hercules3=0;
        $KingArt1=0;
        $KingArt2=0;
        $KingArt3=0; 
        if(isset($_SESSION['GladName']) && !empty($_SESSION['GladName']) && $_SESSION["GladName"] == "Hercules"){$Hercules1 =1;}
        if(isset($_SESSION['GladName2']) && !empty($_SESSION['GladName2']) && $_SESSION["GladName2"] == "Hercules"){$Hercules2 =1;}
        if(isset($_SESSION['GladName3']) && !empty($_SESSION['GladName3']) && $_SESSION["GladName3"] == "Hercules"){$Hercules3 =1;}
        if(isset($_SESSION['GladName']) && !empty($_SESSION['GladName']) && $_SESSION["GladName"] == "King Arthur"){$KingArt1 =1;}
        if(isset($_SESSION['GladName2']) && !empty($_SESSION['GladName2']) && $_SESSION["GladName2"] == "King Arthur"){$KingArt2 =1;}
        if(isset($_SESSION['GladName3']) && !empty($_SESSION['GladName3']) && $_SESSION["GladName3"] == "King Arthur"){$KingArt3 =1;}

        //Damage dealt changes if you're a ghost or King Arthur
        if(isset($_SESSION['Gladisdead1']) && !empty($_SESSION['Gladisdead1']) && $_SESSION["Gladisdead1"] == "1" ) {
          $TotalDamage1 = 0;}
        elseif ($KingArt1 == 1) {$TotalDamage1 = (ceil($SDamage1 * .5 + $DDamage1 * .5 + $BDamage1 * .5 + $RDamage1 * .5 + $FDamage1 * .75)) 
               - $TDamage1 - $FairyDamage1;} 
        else{$TotalDamage1 = $SDamage1 + $DDamage1 + $BDamage1 + $RDamage1 + $FDamage1 - $TDamage1 - $FairyDamage1 - $Hercules1;}
         
         if(isset($_SESSION['Gladisdead2']) && !empty($_SESSION['Gladisdead2']) && $_SESSION["Gladisdead2"] == "1" ) {
            $TotalDamage2 = 0;}
         elseif ($KingArt2 == 1) {$TotalDamage2 = (ceil($SDamage2 * .5 + $DDamage2 * .5 + $BDamage2 * .5 + $RDamage2 * .5 + $FDamage2 * .75))
                   - ($TDamage2) - ($FairyDamage2);}
         else{$TotalDamage2 = $SDamage2 + $DDamage2 + $BDamage2 + $RDamage2 + $FDamage2 - $TDamage2 - $FairyDamage2 - $Hercules2;}
            
            if(isset($_SESSION['Gladisdead3']) && !empty($_SESSION['Gladisdead3']) && $_SESSION["Gladisdead3"] == "1" ) {
            $TotalDamage3 = 0;}
            elseif ($KingArt3 == 1) {$TotalDamage3 = (ceil($SDamage3 * .5 + $DDamage3 * .5 + $BDamage3 * .5 + $RDamage3 * .5 + $FDamage3 * .75))
                   - ($TDamage3) - ($FairyDamage3);}
            else{$TotalDamage3 = $SDamage3 + $DDamage3 + $BDamage3 + $RDamage3 + $FDamage3 - $TDamage3 - $FairyDamage3 - $Hercules3;}

                $this->TakeDamageValue1 = $TotalDamage1;
                $this->TakeDamageValue2 = $TotalDamage2;
                $this->TakeDamageValue3 = $TotalDamage3;

            }

            public function getTakeDamage()
            {
                if (!isset(self::$TakeDamage))
                {
                    $class = __CLASS__;
                    self::$TakeDamage = new $class();
                    self::$TakeDamage->initialize();
                }
                return self::$TakeDamage;
            }

        }

        class GladiatorGetIsNotDestroyed 
        {

            private static $IsNotDestroyed;
            public $IsNotDestroyedValue1;
            public $IsNotDestroyedValue2;
            public $IsNotDestroyedValue3;

            private function initialize() 
            {

                If ($_SESSION['CurrentHitPoints1'] >1)
                {$Gladiator1Destroyed = 0; } else {$Gladiator1Destroyed = 1;} 
                If ($_SESSION['CurrentHitPoints2'] >1)
                {$Gladiator2Destroyed = 0; } else {$Gladiator2Destroyed = 1;} 
                If ($_SESSION['CurrentHitPoints3'] >1)
                {$Gladiator3Destroyed = 0; } else {$Gladiator3Destroyed = 1;} 


                $this->IsNotDestroyedValue1 = $Gladiator1Destroyed;
                $this->IsNotDestroyedValue2 = $Gladiator2Destroyed;
                $this->IsNotDestroyedValue3 = $Gladiator3Destroyed;

                $_SESSION["Gladisdead1"] = $Gladiator1Destroyed;
                $_SESSION["Gladisdead2"] = $Gladiator2Destroyed;
                $_SESSION["Gladisdead3"] = $Gladiator3Destroyed;

            }

            public function getIsNotDestroyed()
            {
                if (!isset(self::$IsNotDestroyed))
                {
                    $class = __CLASS__;
                    self::$IsNotDestroyed = new $class();
                    self::$IsNotDestroyed->initialize();
                }
                return self::$IsNotDestroyed;
            }
        }
        ?>