<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

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

while($sa=mysqli_fetch_array($sonuc))
{
echo '<table  blue" border="2" ><tr>';
echo '<td  width="20">'.$sa['id'].'</td>';
echo '<td  width="250">'.$sa['cephe'].'</td>';
echo '<td width="70">'.$sa['tur'].'</td>';
echo '<td width="70">'.$sa['fiyat'].'</td>';
echo '<td> <a href="silme.php?id='.$sa['id'].'" onclick="return uyari();">Sil</a> </td>';
echo '</tr></table>';

}error_reporting(0);
$silinecekID = $_GET['id'];


$sonuc=mysqli_query($baglan,"DELETE from ekle  where id=".$silinecekID);
 
if($sonuc>0){
echo "Başarıyla silindi,2 sn. bekleyin";
header( "refresh:1;url=silme.php" ); 
 }


 
?>