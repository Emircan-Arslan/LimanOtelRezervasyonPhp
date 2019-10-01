<?php
$baglan=mysqli_connect("localhost","root","","liman");
	mysqli_set_charset($baglan, "utf8");
	
	$tur="engelliodasi";
$komut = "SELECT * FROM ekle where tur='".$tur."'";

 $sorgu = mysqli_query($baglan,$komut);

 		foreach($sorgu as $satir)
         {
					 echo '<div class="duzenle" style="float:left; margin-left:200px; margin-bottom:50px; margin-top:50px;">';
					 echo '<img height="200" width="200" src="'.$satir["resim"].'"/>';
					echo '<img height="200" width="200" src="'.$satir["resim2"].'"/>';
					 echo '</br>';
					 echo 'ÇEPHE : '. $satir["cephe"].''; echo '</br>';
					 echo 'ODA TÜRÜ : '. $satir["tur"].''; echo '</br>';
					 echo 'ODA NO : '. $satir["odano"].''; echo '</br>';
				     echo 'FİYAT: '. $satir["fiyat"].''; echo '</br>';
				     echo 'WİFİ: '. $satir["wifi"].''; echo '</br>';
					 echo 'TV: '. $satir["tv"].''; echo '</br>';
					 echo 'ODA SERVİSİ: '. $satir["odaservisi"].''; echo '</br>';
					 echo 'MİBİ BAR : '. $satir["minibar"].''; echo '</br>';
					 echo 'ÇALIŞMA MASASI: '. $satir["calismamasasi"].''; echo '</br>';
					 echo 'GÜVENLİK KASASI: '. $satir["guvenlikkasasi"].''; echo '</br>';
					 
					 echo '</div>';

        }



?>
