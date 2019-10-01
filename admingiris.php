<?php

$baglanti = @mysql_connect('localhost', 'root',''); 
$veritabani = @mysql_select_db('liman');
?>
<?php

ob_start(); 
session_start();
if(!isset($_SESSION["id"])){
  if(isset($_POST["button"])){
$sql_check = mysql_query("select * from admin where kullaniciad='" . $_POST["kad"]. "' and sifre='" . $_POST["s"] . "'") or die(mysql_error());
 
if(mysql_num_rows($sql_check))  {
    $_SESSION["localhost"] = "true";
    $_SESSION["kullaniciad"] = $kad;
    $_SESSION["sifre"] = $s;
 header("Refresh: 0; url=adminpanel.php");
}
else {
    if($_POST["kad"]=="" or $_POST["s"]=="") {
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
}}}
 
ob_end_flush();
?>


<p>&nbsp;</p>
<form  method="POST" >
  <label></label>
  <p>&nbsp;</p>
  <blockquote>
    <blockquote>
      <blockquote>
        <blockquote>
          <blockquote>
            <blockquote>
              <blockquote>
                <blockquote>
                  <blockquote>
                    <blockquote>
                      <p>ADMİN GİRİŞ EKRANI</p>
                    </blockquote>
                  </blockquote>
                </blockquote>
              </blockquote>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote>
  </blockquote>
  <p>ADMİN ADI : 
    <input type="text" name="kad" id="kad" />
  </p>
  <blockquote>
    <blockquote>
      <p>ŞİFRE :
        <input type="password" name="s" id="s" />
        </p>
    </blockquote>
  </blockquote>
  <p>
    <label></label>
  </p>
  <blockquote>
    <blockquote>
      <p>
        <label></label>
        </p>
      <blockquote>
        <p>
          <input type="submit" name="button" id="button" value="GİRİŞ " />
        </p>
      </blockquote>
    </blockquote>
  </blockquote>
</form>
<p>&nbsp;</p>
