<table width="898" border="0" align="left">
                      <tr>
                        <th width="110" scope="col"><a href="ekle.php" target="fram">EKLE</a></th>
                        <th width="100" scope="col"><a href="silme.php" target="fram">SİL</a></th>
                        <th width="231" scope="col"><a href="guncel.php">GÜNCELLE</a></th>
                        <th width="250" scope="col">&nbsp;</th>
                        <th width="173" scope="col"><a href="cikis.php">ÇIKIŞ</a></th>
                      </tr>
                    </table>
  
  
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  
  
<?php

$baglan=mysqli_connect("localhost","root","","liman");
mysqli_set_charset($baglan, "utf8");
$sonuc=mysqli_query($baglan,"select * from ekle");

echo '<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">';
 echo '   <p align="center">ODA EKLEME</p>';
  echo '  <blockquote>';
    echo '  <p>***ÖZELLİKLER ***</p>';
  echo '    <p>CEPHE :';
   echo '     <select name="cephe" id="cephe">';
  echo '        <option value="kuzey">KUZEY</option>';
   echo '       <option value="guney">GÜNEY</option>';
   echo '     </select>';
  echo '    </p>';
   echo '   <p>TÜR : ';
    echo '    <select name="tur" id="tur">';
    echo '      <option value="tekkisilik">TEK KİŞİLİK</option>';
      echo '    <option value="ciftkisilik">ÇİFT KİŞİLİK</option>';
       echo '   <option value="aileodasi">AİLE ODASI</option>';
        echo '  <option value="engelliodasi">ENGELLİ ODASI</option>';
     echo '   </select>';
     echo ' </p>';
    echo '  <p>FİYAT: ';
      echo '  <label>';
     echo '   <input type="text" name="fıyat" id="fıyat" />';
     echo '   </label>';
   echo '   </p>';
    echo '  <p>ODA NUMARASI:';
     echo '   <label>';
     echo '   <input type="text" name="odano" id="no" />';
      echo '  </label>';
     echo ' </p>';
   echo ' </blockquote>';
   echo ' <p>';
   echo ' <label></label>';
   echo ' <label></label>';
   echo ' </p>';
  echo '  <blockquote>';
     echo ' <p>***ODA İÇERİĞİ***</p>';
     echo ' <p>';
     echo ' <p>WİFİ : ';
         echo ' <select name="wifi">';
          echo '  <option value="var">var</option>';
          echo '  <option value="yok">yok</option>';
         echo ' </select>';
        echo '  <label> ';
          
      
         
    
        
      
         echo ' <p>';
    
    echo '  <p>';
         echo ' SICAK SU  : ';
         echo ' <select name="sicaksu">';
           echo ' <option value="var">var</option>';
          echo '  <option value="yok">yok</option>';
       echo ' </select>';
      
          
         
        
    
    echo '  </p>';
    echo '  <p>TV  :'; 
     echo '     <select name="tv">';
           echo '  <option value="var">var</option>';
        echo '     <option value="yok">yok</option>';
         echo ' </select>';
      
   echo ' </p>';
         
         echo '  <p>ODA SERVİSİ : ';
        echo '  <select name="odaservısı">';
        echo '     <option value="var">var</option>';
        echo '     <option value="yok">yok</option>';
        echo '   </select>';
      
        echo ' </p>';
         
        echo '  <p>MİNİ BAR  : ';
          echo '<select name="mınıbar">';
             echo '<option value="var">var</option>';
             echo '<option value="yok">yok</option>';
           echo '</select>';
      
    echo '     </p>';
      
      
      echo '<p>ÇALIŞMA MASASI  : ';
      echo '    <select name="calismamasası">';
            echo ' <option value="var">var</option>';
            echo ' <option value="yok">yok</option>';
       echo ' </select>';
      
    echo '</p>';
     
 echo '   <p>GÜVENLİK KASASI : ';
        echo '  <select name="guvenlıkkasası">';
        echo '     <option value="var">var</option>';
         echo '    <option value="yok">yok</option>';
    echo '  </select>';
      
  echo '  </p> ';
      
    
echo '<td width="40"><input type="submit" name="guncelle" class="btn1" value="Güncelle" style="background-color:lightblue;width:80px;"/></td>';
echo '</tr></table>'; 
echo '</form><br><br>';



echo '<table bgcolor="LightGray" border="3" ><tr>';

echo '<td  width="120">cephe</td>';
echo '<td width="120">tur</td>';
echo '<td width="120">odano</td>';
echo '<td width="70">fiyat</td>';
echo '<td width="80">wifi</td>';
echo '<td width="100">sicaksu</td>';
echo '<td width="60">tv</td>';
echo '<td width="80">odaservısı</td>';
echo '<td width="60">mınıbar</td>';
echo '<td width="150">calismamasası</td>';
echo '<td width="150">guvenlıkkasası</td>';
echo '</tr></table>';



while($satir=mysqli_fetch_array($sonuc))
{
echo '<table bgcolor="LightGray" border="3" ><tr>';

echo '<td  width="120">'.$satir['cephe'].'</td>';
echo '<td width="120">'.$satir['tur'].'</td>';
echo '<td width="120">'.$satir['odano'].'</td>';
echo '<td width="70">'.$satir['fiyat'].'</td>';
echo '<td width="80">'.$satir['wifi'].'</td>';
echo '<td width="100">'.$satir['sicaksu'].'</td>';
echo '<td width="60">'.$satir['tv'].'</td>';
echo '<td width="80">'.$satir['odaservisi'].'</td>';
echo '<td width="60">'.$satir['minibar'].'</td>';
echo '<td width="150">'.$satir['calismamasasi'].'</td>';
echo '<td width="150">'.$satir['guvenlikkasasi'].'</td>';
echo '</tr></table>';

}

//error_reporting(0);

if(isset($_POST["guncelle"])){

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
 

$sqlekle="update ekle set fiyat='".$fıyat."',wifi='".$wifi."', sicaksu='".$sicaksu."',tv='".$tv."',odaservisi='".$odaservısı."',minibar='".$mınıbar."',calismamasasi='".$calismamasası."',guvenlikkasasi='".$guvenlıkkasası."',cephe='".$cephe."' , tur='".$tur."' where odano='".$odano."'  " ;

if($sonuc=mysqli_query($baglan,$sqlekle))
{
echo '<meta http-equiv="refresh" content="0;URL=guncel.php">';
}
}
 
?>