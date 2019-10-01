<?php
	// Bağlantı
	$baglan=mysqli_connect("localhost","root","","liman"); 
	mysqli_set_charset($baglan, "utf8");
		
		
		$fiyatt=mysqli_query($baglan,"select fiyat from ekle where odano='9'");
	while($sa=mysqli_fetch_array($fiyatt)){
		$yenifiyat=$sa['fiyat'];
		echo $yenifiyat ;
	}error_reporting(0);
	echo $yenifiyat;

		?>