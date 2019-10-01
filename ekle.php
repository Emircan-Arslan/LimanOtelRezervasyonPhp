<?php
$baglan=mysqli_connect("localhost","root","","liman"); 
	mysqli_set_charset($baglan, "utf8");

 
if(isset($_POST["button"])){
$sql="select * from ekle WHERE odano='". $_POST["odano"]."'";
 
 $cephe=$_POST["cephe"];
 $tur=$_POST["tur"];
 $odano=$_POST["odano"];
 $fıyat=$_POST["fıyat"];
 $wifi=$_POST["wifi"];
 $sicaksu=$_POST["sicaksu"];
 $tv=$_POST["tv"];
 $odaservısı=$_POST["odaservısı"];
 $mınıbar=$_POST["mınıbar"];
  $calismamasası=$_POST["calismamasası"];
   $guvenlıkkasası=$_POST["guvenlıkkasası"];

 
$sonuc1= mysqli_query($baglan,$sql);
$satirsay=mysqli_num_rows($sonuc1);
 
if ($satirsay>0)
{
echo "BU ODA  VAR  !!! ";
 
} else{mysqli_set_charset($baglan, "utf8");
 move_uploaded_file($_FILES["resim"]["tmp_name"],"odaresim/".$_FILES["resim"]["name"]);
      $resimyolu = "odaresim/".$_FILES["resim"]["name"];
	     echo "Resim yuklendi : "."odaresim/".$_FILES["resim"]["name"];
		 //
		 move_uploaded_file($_FILES["resim2"]["tmp_name"],"odaresim/".$_FILES["resim2"]["name"]);
      $resimyolu2 = "odaresim/".$_FILES["resim2"]["name"];
	     echo "Resim yuklendi : "."odaresim/".$_FILES["resim2"]["name"];
		 
$sqlekle="INSERT INTO ekle(cephe,tur,odano,fiyat,wifi,sicaksu,tv,odaservisi,minibar,calismamasasi,guvenlikkasasi,resim,resim2) 
VALUES ('". $cephe. "','".$tur."','".$odano."','". $fıyat."','". $wifi."','". $sicaksu."','". $tv."','". $odaservısı."','". $mınıbar."','". $calismamasası."','". $guvenlıkkasası."','". $resimyolu."','". $resimyolu2."')";
 $sonuc=mysqli_query($baglan,$sqlekle);
 
if ($sonuc==0)
echo "Eklenemedi, kontrol ediniz";
else
echo "Başarıyla eklendi";
}};
 
?>

<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>

<div id="apDiv1" style="position:absolute; left:32px; top:13px; width:999px; height:779px; z-index:1;">
  <label></label>
  <p>&nbsp;</p>
<table width="898" border="0" align="left">
                      <tr>
                        <th width="110" height="69" scope="col"><a href="ekle.php" target="fram">EKLE</a></th>
                        <th width="100" scope="col"><a href="silme.php" target="fram">SİL</a></th>
                        <th width="231" scope="col"><a href="guncel.php">GÜNCELLE</a></th>
                        <th width="250" scope="col">&nbsp;</th>
                        <th width="173" scope="col"><a href="cikis.php">ÇIKIŞ</a></th>
                      </tr>
                    </table>
  
  
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <p align="center">ODA EKLEME</p>
    <blockquote>
      <p>***ÖZELLİKLER ***</p>
      <p>CEPHE :
        <select name="cephe" id="cephe">
          <option value="kuzey">KUZEY</option>
          <option value="guney">GÜNEY</option>
        </select>
      </p>
      <p>TÜR : 
        <select name="tur" id="tur">
          <option value="tekkisilik">TEK KİŞİLİK</option>
          <option value="ciftkisilik">ÇİFT KİŞİLİK</option>
          <option value="aileodasi">AİLE ODASI</option>
          <option value="engelliodasi">ENGELLİ ODASI</option>
        </select>
      </p>
      <p>FİYAT: 
        <label>
        <input type="text" name="fıyat" id="fıyat" />
        </label>
      </p>
      <p>ODA NUMARASI:
        <label>
        <input type="text" name="odano" id="no" />
        </label>
      </p>
    </blockquote>
    <p>
    <label></label>
    <label></label>
    </p>
    <blockquote>
      <p>***ODA İÇERİĞİ***</p>
      <p>
      <p>WİFİ : 
          <select name="wifi">
            <option value="var">var</option>
            <option value="yok">yok</option>
          </select>
          <label> 
          
      
         
    
        
      
          <p>
    
      <p>
          SICAK SU  : 
          <select name="sicaksu">
            <option value="var">var</option>
            <option value="yok">yok</option>
        </select>
      
          
         
        
    
      </p>
      <p>TV  : 
          <select name="tv">
             <option value="var">var</option>
             <option value="yok">yok</option>
          </select>
      
    </p>
         
           <p>ODA SERVİSİ : 
          <select name="odaservısı">
             <option value="var">var</option>
             <option value="yok">yok</option>
           </select>
      
         </p>
         
          <p>MİNİ BAR  : 
          <select name="mınıbar">
             <option value="var">var</option>
             <option value="yok">yok</option>
           </select>
      
         </p>
      
      
      <p>ÇALIŞMA MASASI  : 
          <select name="calismamasası">
             <option value="var">var</option>
             <option value="yok">yok</option>
        </select>
      
    </p>
     
    <p>GÜVENLİK KASASI : 
          <select name="guvenlıkkasası">
             <option value="var">var</option>
             <option value="yok">yok</option>
      </select>
      
    </p> 
      
      
      
     
     <p>RESİM 1 : 
      <input type="file" name="resim"  class="resim" />
    </p>
    <p>RESİM 2 : 
      <input type="file" name="resim2"  class="resim2" />
    </p>
     <p>
       <label>
       <input type="submit" name="button"  value="KAYDET" />
       </label>
     </p>
  </form>
</div>
