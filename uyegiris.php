<?php

$baglanti = @mysql_connect('localhost', 'root',''); 
$veritabani = @mysql_select_db('liman');
?>
<?php

ob_start(); 
session_start();
if(!isset($_SESSION["id"])){
  if(isset($_POST["giris"])){
  
$sql_check = mysql_query("select * from uye where kad='" . $_POST["ad"]. "' and sifre='" . $_POST["sifre"] . "'") or die(mysql_error());
 
if(mysql_num_rows($sql_check))  {
    $_SESSION["localhost"] = "true";
    $_SESSION["kad"] = $ad;
    $_SESSION["sifre"] = $sifre;
 header("Refresh: 0; url=limanotel.php");
}

else {
    if($_POST["ad"]=="" or $_POST["sifre"]=="") {
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
	
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
}}}
 
ob_end_flush();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMİN GİRİŞ</title>
</head>

<body>
<form method="POST"  >
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="439" height="313" align="center">
<tr>
  <td width="315"> <div align="center">
    <p>ÜYE  GİRİŞ  EKRANI</p>
    <p><a href="uyekayit.php" >Üye Olmak İçin Tıklayın </a></p>
    <p><a href="limanotel.php" >ANASAYFA </a></p>
  </div>  		 </td>
  <td width="97">&nbsp;</td>
</tr>
<tr>
<td height="58"> <div align="left">Kullanici Adi 
  <input type="text" name="ad"/>
</div></td>
 
<td></td>
<td width="11">&nbsp;</td>
</tr>
<tr>
<td><div align="center">Sifre 
  <input type="password" name="sifre"/>
</div></td>
<td></td>
<td>&nbsp;</td>
</tr>
<tr>
<td><div align="center">
  <input type="submit" name="giris" value="Giris"/>
</div></td>
  
 
<td><div align="center"></div></td>
<td>&nbsp;</td>
<tr>
</tr>

</tr>
</table>
</form>

</body>
</html>
