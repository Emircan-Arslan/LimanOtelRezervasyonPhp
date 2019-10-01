<?php
	// Bağlantı
	$baglan=mysqli_connect("localhost","root","","liman"); 
	mysqli_set_charset($baglan, "utf8");
	
	
		
		
	// Kayıt post
	if(isset($_POST["KaydetButton"])){
		
		
 
 		$adsoyad = $_POST["adsoyad"];
		$eposta = $_POST["eposta"];
		$odano=$_POST["odano"];
		$tel=$_POST["tel"];
		$oda=$_POST["oda"];
		$bastarih=$_POST["bastarih"];
		$bastarih_str = strtotime($bastarih); //strtotime belirlediğimiz tarihe bir sayı veriyor 
		
		$bistarih=$_POST["bistarih"];
		$bistarih_str = strtotime($bistarih);
		
			
			
			
		$sql="SELECT odano FROM rezervasyon WHERE bastarih_str <= '$bistarih_str' AND bistarih_str >= '$bastarih_str' OR odano = '$oda'";
		$sonuc1= mysqli_query($baglan,$sql);
		$satirsay=mysqli_num_rows($sonuc1);
		
		if ($satirsay>0 ){
			echo "BU TARİH ALINMIŞ   !!! ";
		}else{
		
		$fiyatt=mysqli_query($baglan,"select fiyat from ekle where odano='$odano'");
			while($sa=mysqli_fetch_array($fiyatt)){
				$yenifiyat=$sa['fiyat'];
				echo $yenifiyat ;
			}error_reporting(0);

			
			$gunfarki = ($bistarih_str-$bastarih_str)/86400 ;
			$fiyat=$yenifiyat*$gunfarki;


		
			
			$sqlekle="INSERT INTO rezervasyon( odano,adsoyad,eposta,tel,oda,yenifiyat,bastarih,bistarih,bastarih_str,bistarih_str ) 
			VALUES ('". $odano. "','". $adsoyad. "','".$eposta."','". $tel."','". $oda."','". $fiyat."','". $bastarih."','". $bistarih."','". $bastarih_str."','". $bistarih_str."')";
			 $sonuc=mysqli_query($baglan,$sqlekle);
 		
			if ($sonuc==0){
				echo "Eklenemedi, kontrol ediniz";
			}else{
				echo "Başarıyla eklendi";
			}
			
		}
		
		
	}

	
	echo '<table border="2" ><tr>';
		echo '<td  width="120">Oda No</td>';
		echo '<td width="120">Ad Soyad</td>';
		echo '<td width="120">e-posta</td>';
		echo '<td width="100">tel</td>';
		echo '<td width="120">Oda</td>';
		echo '<td width="120">Fiyat</td>';
		echo '<td width="120">Başlangıç Tarihi</td>';
		echo '<td width="120">Bitiş Tarihi</td>';
		echo '</tr></table>';
	
	

	$sonu=mysqli_query($baglan,"select * from rezervasyon"); 
	while($sa=mysqli_fetch_array($sonu)){
		echo '<table border="2" ><tr>';
		
		echo '<td  width="120">'.$sa['odano'].'</td>';
		echo '<td width="120">'.$sa['adsoyad'].'</td>';
		echo '<td width="120">'.$sa['eposta'].'</td>';
		echo '<td width="100">'.$sa['tel'].'</td>';
		echo '<td width="120">'.$sa['oda'].'</td>';
		echo '<td width="120">'.$sa['yenifiyat'].'</td>';
		echo '<td width="120">'.$sa['bastarih'].'</td>';
		echo '<td width="120">'.$sa['bistarih'].'</td>';
		echo '</tr></table>';
	}error_reporting(0);

?>

<style type="text/css">
<!--
.style1 {color: #FF0000}
.style3 {color: #FF0000; font-weight: bold; }
-->
</style>
<html>
<body style='background-image:url(img/aaa.jpg); background-size:100% 100%;'>
<form id="form1" name="form1" method="post" action="">
  <label></label>
  
  <p align="left">&nbsp;</p>
  <p align="left"><strong>AD SOYAD </strong>
    <input type="text" name="adsoyad" id="textfield2" />
</p>

<p align="left"><strong>ODA NO  </strong>
    <input type="text" name="odano" id="textfield2" />
</p>
  <label> </label>
  <label></label> 
  <p align="left"><strong>E-POSTA  </strong>
    <input type="text" name="eposta" id="textfield3" />
  </p>
  <label></label>
  <strong>TEL NO </strong>
  <input type="text" name="tel" id="textfield4" />
  <label>
  <br>
  <br />
  </label>
  <p align="left"><strong>ODA SEÇİNİZ</strong>
    <label></label>
    <select name="oda" size="1">
      <option>AİLE ODASI</option>
      <option>ENGELLİ ODASI </option>
      <option>KUZEY ODASI </option>
      <option>GÜNEY ODASI</option>
      <option>TEK KİŞİLİK </option>
      <option>ÇİFT KİŞİLİK</option>
    </select>
  </p>
  <label>
  <div align="left"><br />
    </label>
  </div>
  <label></label>
  <label></label>
  <p align="left"><span class="style3">BAŞLANGIÇ TARİHİ</span>
    <input type="date" name="bastarih" />
  </p>
  <p align="left"><span class="style3">BİTİŞ TARİHİ </span>
    <input type="date" name="bistarih" />
  </p>
  <p align="left" class="style1">
    <input type="submit" name="KaydetButton" id="button" value="Rezerve Yap" />
  </p>
  <p align="center" class="style1">&nbsp;</p>
</form>
</body>
</html>

