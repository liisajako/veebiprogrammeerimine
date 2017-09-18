<?php
	$dirToRead = "../../pics/";
	$picFileTypes = ["jpg", "jpeg", "png", "gif"]; 
	$picFiles = [];
	$allFiles = array_slice(scandir($dirToRead),2);
	//var_dump($allFiles);
	
	foreach ($allFiles as $file){
			$fileType = pathinfo($file, PATHINFO_EXTENSION);
			if (in_array($fileType, $picFileTypes) == true) {
				array_push($picFiles, $file);
			}			
	}	
	var_dump($picFiles);
	
	$fileCount = count($picFiles);
	$picNumber = mt_rand(0, $fileCount - 1);
	$picToShow = $picFiles[$picNumber];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Liisa Jakovleva veebiprogremise asjad</title>

</head>
<body>
	<h1>veebiprogrammeerimine</h1>
	<p>See veebileht on loodud veebiprogrammeerimise kursusel ning ei sisalda mingisugust tõsiseltvõetavat sisu.</p>
	<p>Üks pilt Tallinna Ülikoolist!</p>
	<img src="<?php echo $dirToRead .$picToShow; ?>" alt="Tallinna Ülikool">
	

</body>
</html>