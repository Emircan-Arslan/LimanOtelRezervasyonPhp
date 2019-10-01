<?php
include ("baglan.php");
 
if(isset($_POST["Buton_Kaydet"])){

$sql="select * from uye WHERE kad='". $_POST["kad"]."'";


 

 $ad=$_POST["adi"];
 $soyad=$_POST["soyad"];
 $kad=$_POST["kad"];
 $sifre=$_POST["sifre"];
 $eposta=$_POST["eposta"];


$sonuc1= mysqli_query($baglan,$sql); 
$satirsay=mysqli_num_rows($sonuc1);

 
if ($satirsay>0)
{
echo "BU KULLANICI ADI VAR !!! ";
 
} else{
$sqlekle="INSERT INTO uye(ad,soyad,kad,eposta,sifre ) 
VALUES ('". $ad. "','".$soyad."','". $kad."','". $eposta."','". $sifre."')";

 $sonuc=mysqli_query($baglan,$sqlekle);
 
 
if ($sonuc==0)
echo "Eklenemedi, kontrol ediniz";
else
echo "Başarıyla eklendi";
}};
 
?>

<!DOCTYPE html>
<html>
<title>üye kayıt</title>
<link rel="stylesheet" href="css/KullaniciKayitGiris.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<body>

<div class="sayfaTamami">
   <div class="ust">
	 <div class="ustsagbaslik">
	   
	   <p align="left">Hesabın var mı? <a href="uyegiris.php">Giriş Yap</a></p>
     </div>
  </div>
	    <div class="baslik3">
	     <p>/p>
  </div>
   <div class="formKismi">
   <!--burada post işleminide aynı sayfa içerisinde yaptığım için actiona sayfa isinib yazıyoruz -->
	<form method="POST" action="uyekayit.php">
    	 <p align="left">
         AD:</p>
    	 <p align="left">   	      
    	   <input type="text" name="adi" class="txt1" />
  	   </p>
    	 <p align="left">
         SOYAD:</p>
    	 <p align="left">
    	   <input type="text" name="soyad" class="txt1" />
  	   </p>
    	 <p align="left">
         KULLANICI ADI:   	     </p>
    	 <p align="left">
    	   <input type="text" name="kad" class="txt1" />
  	   </p>
    	 <p align="left">
      ŞİFRE:</p>
    	 <p align="left">
    	   <input type="password" name="sifre" class="txt1" /> 
  	      </p>
    	 <p align="left">
      E-MAİL:</p>
    	 <p align="left">
    	   <input type="email" name="eposta" class="txt1" />
  	      </p>
    	 <p align="left">
    	   <input type="submit" name="Buton_Kaydet" class="btn1" value="Kayıt Ol"/>
   	        <input type="hidden" name="mesaj" class="txt2" value="Kayıt Edildi" disabled />
      </p>
	</form>
   </div>
</div>
</body>
</html>