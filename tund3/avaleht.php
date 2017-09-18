<?php

	$myName = "Liisa";
	$myFamilyName = "Jakovleva";
	$myAge = 0;
	$myBirthYear;
	$myLivedYearsList = "";
	
	$monthNamesEt = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", "september", "oktoober", "november", "detsember"];
	
	//var_dump($monthNamesEt);
	//echo $monthNamesEt[8];
	
	$hourNow = date("H");
	$partOfDay = "";
	
	if ($hourNow < 8){
		$partOfDay = "varajane hommik";
	}
	if ($hourNow >= 8 and $hourNow < 16){
		$partOfDay = "koolipäev";
	}
	if ($hourNow >= 16){
		$partOfDay = "vaba aeg";
	}
	  
	if (isset($_POST["yearBirth"])){
		$myBirthYear = $_POST["yearBirthSend"];
		$myAge = date("Y") - $myBirthYear;
		
		$myLivedYearsList .= "<ol> \n";
		for ($i = $myBirthYear; $i <= date("Y"); $i++) {
			$myLivedYearsList .= "<li>" .$i ."</li> \n";	
		}
		$myLivedYearsList .= "</ol> \n";
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Liisa Jakovleva veebiprogremise asjad</title>

</head>
<body>
	<h1>
	<?php
		echo $myName ." " .$myFamilyName;
	?>
	veebiprogrammeerimine</h1>
	<p>See veebileht on loodud veebiprogrammeerimise kursusel ning ei sisalda mingisugust tõsiseltvõetavat sisu.</p>
	
	<?php
		echo "<p>See on esimene jupp PHP abil väljastatud teksti!</p>";
		echo "<p>Täna on ";
		$monthIndex = date("n") - 1;
		echo date("d. ") .$monthNamesEt[$monthIndex] .date(" Y");
		echo ".</p>";
		echo "<p>Kell lehe avamisel oli: " .date("H:i:s");
		echo ", käes on " .$partOfDay .".</p>";
	?>
	<h2>Vanus</h2>
	<p>Järgnevalt palume sisestada oma sünniaasta!</p>
	<form method="POST"> 
		<label>Teie sünniaasta: </label>
		<input id="yearBirth" name="yearBirthSend" type="number" min="1900" max="2017" value="<?php echo $myBirthYear; ?>">
		<input id="submitYearBirth" name="submitYearBirthSend" type="submit" value="Kinnita">
		</form>
		
		
		<p>Teie vanus on <?php echo $myAge; ?> aastat.</p>
		<?php
			if ($myLivedYearsList != ""){
				echo "<h3>Oled elanud järgnevatel aastatel</h3> \n";
				echo $myLivedYearsList;
			}	
		?>	
		<h2>Paar linki</h2>
		<p>Õpime <a href="http://www.tlu.ee" target="_blank">Tallinna Ülikoolis</a>.</p>
		<p>Minu esimene php leht on <a href="../esimene.php" target="_blank">siin</a></p>
		<p>Minu sõber Mikk teeb veebi <a href="../../../~pajumikk/" target="blank">siin</a>
		<p>Pilti ülikoolist näeb <a href="foto.php"> siin</a></p>

</body>
</html>