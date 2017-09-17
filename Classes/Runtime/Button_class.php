<div class="Buttonsdiv">
	<div class="Buttons">
		<form method="post">
			<input type="submit" name="Move" id="Move" value="Move" /></br>
		</form>
		<?php

		function MoveGladiatorButton()
		{

			$myPosition = GladiatorGetPosition::getPosition();
			$Gladiator1 = $myPosition->Positionvalue1;
			$Gladiator2 = $myPosition->Positionvalue2;
			$Gladiator3 = $myPosition->Positionvalue3;
			$myFairyPosition = GettheFairyPosition::getFairyPosition();
			$Fairyspot = $myFairyPosition->FairyValue;

			$isdead1=0;
			$isdead2=0;
			$isdead3=0;
			if(isset($_SESSION['Gladisdead1']) && !empty($_SESSION['Gladisdead1']) && $_SESSION["Gladisdead1"] == "1" ){$isdead1 =1; }
			if(isset($_SESSION['Gladisdead2']) && !empty($_SESSION['Gladisdead2']) && $_SESSION["Gladisdead2"] == "1" ){$isdead2 =1; }
			if(isset($_SESSION['Gladisdead3']) && !empty($_SESSION['Gladisdead3']) && $_SESSION["Gladisdead3"] == "1" ){$isdead3 =1; }

			if($isdead1 == "1")
				{echo"<style> .square:nth-child(".$Gladiator1. "){background-image: url(\"images/ghostlego.png\");background-repeat: no-repeat;} </style>";}
			else{echo"<style> .square:nth-child(".$Gladiator1. "){background-image: url(\"images/lego.png\");background-repeat: no-repeat;} </style>";}
			if($isdead2 == "1") 
				{echo"<style> .square:nth-child(".$Gladiator2. "){background-image: url(\"images/ghosthorse.png\");background-repeat: no-repeat;} </style>";}
			else {echo"<style> .square:nth-child(".$Gladiator2. "){background-image: url(\"images/horse.png\");background-repeat: no-repeat;} </style>";}
			if($isdead3 == "1")
				{echo"<style> .square:nth-child(".$Gladiator3. "){background-image: url(\"images/ghostgirl.png\");background-repeat: no-repeat;} </style>";}
			else{echo"<style> .square:nth-child(".$Gladiator3. "){background-image: url(\"images/girl.png\");background-repeat: no-repeat;} </style>";}

			if(($isdead1 == "0") && $Gladiator1 == $Fairyspot)
				{echo"<style> .square:nth-child(". $Fairyspot ."){background-image: url(\"images/heartlego.png\");background-repeat: no-repeat;} </style>" ;}
			elseif(($isdead1 == "1") && $Gladiator1 == $Fairyspot)
				{echo"<style> .square:nth-child(".$Gladiator1. "){background-image: url(\"images/heartghostlego.png\");background-repeat: no-repeat;} </style>";}
			elseif(($isdead2 == "0") && $Gladiator2 == $Fairyspot)
				{echo"<style> .square:nth-child(". $Fairyspot ."){background-image: url(\"images/hearthorse.png\");background-repeat: no-repeat;} </style>";}
			elseif(($isdead2 == "1") && $Gladiator2 == $Fairyspot)
				{echo"<style> .square:nth-child(".$Gladiator2. "){background-image: url(\"images/heartghosthorse.png\");background-repeat: no-repeat;} </style>";}
			elseif(($isdead3 == "0") && $Gladiator3 == $Fairyspot)
				{echo"<style> .square:nth-child(". $Fairyspot ."){background-image: url(\"images/heartgirl.png\");background-repeat: no-repeat;} </style>" ;}
			elseif(($isdead3 == "1") && $Gladiator3 == $Fairyspot)
				{echo"<style> .square:nth-child(".$Gladiator3. "){background-image: url(\"images/heartghostgirl.png\");background-repeat: no-repeat;} </style>";}
			else {echo"<style> .square:nth-child(". $Fairyspot ."){background-image: url(\"images/fairy.png\");background-repeat: no-repeat;} </style>" ;}
		}

		if(array_key_exists('Move',$_POST)){
			MoveGladiatorButton();
		}

		echo"<form method=\"post\"><input type=\"submit\" value=\"Reset\" name=\"Reset\" id=\"Reset\"onclick=\"return confirm('Confirm Reset');\"</button>
	</form></div><div class=\"ResetButton\">";

	function ResetGameButton()
	{session_unset();}

	if(array_key_exists('Reset',$_POST)){
		ResetGameButton();
	}

	echo "</div></div></div>";

	?>