<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Jan Bednář | private web</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link  type="text/css" rel="stylesheet" href="https://rawgit.com/bedjan/php/master/w3.css">
<link rel="icon" href="https://github.com/bedjan/web_home/raw/master/browser-web-icon.png" type="image/x-icon" />
</head>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
 
<body>



<div style="background-color:#ffffff; position:fixed;top: 0;width: auto;">
<p><?php $filename = "data/poznamky.md";if (file_exists($filename)){echo "Poznámky: ";readfile("data/poznamky.md");}else{echo "Aktuálně žádné poznámky.";};?><hr><?php echo date("D | d.F, h:i | Y"); ?>  <a href="#top" style="background-color:grey;color:#ffffff">==Začátek==</a>  <a href="#bottom" style="background-color:grey;color:#ffffff">==Konec==</a>  <a href="https://zivotniprostredi.php5.cz/doku.php?id=start" target="_blank" style="background-color:grey;color:#ffffff">==ZP==</a>  <a href="https://rawgit.com/bedjan/web_home/master/obsah_bednar_1.html" target="_blank" style="background-color:grey;color:#ffffff">==RADIA==</a>  <a href="http://bednar.eu5.org/poznamky.php" target="_blank" style="background-color:grey;color:#ffffff">==POZNAMKY==</a></p>
</div>


<div class="w3-container w3-white w3-text-black">


<hr>

<!-- skryte -->
<a name="top"></a>

<?php
// password **** nahradit
if(isset($_POST['submit_pass']) && $_POST['pass'])
{
 $pass=$_POST['pass'];
 if($pass=="****")
 {
  $_SESSION['password']=$pass;
 }
 else
 {
  $error="Spatne heslo";
 }
}
if(isset($_POST['page_logout']))
{
 unset($_SESSION['password']);
}
?>



<?php
if($_SESSION['password']=="****")
{
 ?>


<hr>
<hr>
<p>Upravit <a href="http://bednar.eu5.org/poznamky.php" target="_blank">POZNÁMKY</a></p>
<p>POZNÁMKY = VÝPIS</p>
<?php echo file_get_contents('http://bednar.eu5.org/data/poznamky.md'); ?>
<hr>
<hr>

<br>
<br>
<a href="http://bednar.eu5.org/upload.html" target="_blank">Data upload</a>
<a href="ftp://bednar.eu5.org/data/" target="_blank">Soubory v data po přihlášení</a>


<h4>Toto se zobrazí po zadaní hesla</h4>

<hr>
<p>Simplenote <a href="https://app.simplenote.com/publish/kDRBPl" target="_blank">POZNÁMKY</a></p>
<?php echo file_get_contents('https://app.simplenote.com/publish/kDRBPl'); ?>
<hr>
<p>Simplenote <a href="https://app.simplenote.com/publish/mBqsGK" target="_blank">WEBY PRIVAT</a></p>
<?php echo file_get_contents('https://app.simplenote.com/publish/mBqsGK'); ?>
<hr>
<p>Simplenote <a href="https://app.simplenote.com/publish/2xDyKv" target="_blank">TOP</a></p>
<?php echo file_get_contents('https://app.simplenote.com/publish/2xDyKv'); ?>
<hr>
<p>Gitlab LINKY</p>
<a href="https://gitlab.com/bedjan/01/blob/master/link.md">Linky</a>
<hr>

<hr>
<h5><a href="http://free.allforms.mailjol.net/u/e0857779.php" target="_blank">Poslat emailem vzkaz -> zobrazí se v dalším
okně</a></h5>

© Bedjan. All rights reserved. <a href="https://github.com/bedjan/web_home/blob/master/obsah_bednar.html" target="_blank">Editace webu</a>. 
<a href="https://github.com/bedjan/php/blob/master/w3.css" target="_blank">Editace css</a>. 
<a href="https://ramses.freewha.com/cgi-bin/amanager.cgi"
target="_blank">Cpanel | bednar.eu5.org/o1 </a>. <a href="http://bednar.eu5.org/ftp/"
target="_blank">FTP | bednar.eu5.org/bednar.eu5.org/o1 </a>. <a href="ftp://bednar.eu5.org/index.php"
target="_blank">Náhled na index.php pres ftp | bednar.eu5.org/o1 </a>
<hr>


 <form method="post" action="" id="logout_form">
  <input type="submit" name="page_logout" value="ODHLÁSIT">
 </form>

 <?php
}
else
{
 ?>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>
 <form method="post" action="" id="login_form">
  <h4>Pro zobrazení obsahu se přihlaš</h4>
  <input type="password" name="pass" placeholder="*******">
  <input type="submit" name="submit_pass" value="PŘIHLÁSIT">
  <p><font style="color:red;"><?php echo $error;?></font></p>
 </form>
 <?php	
}
?>





<!-- skryte -->

<hr>

<!--

<iframe style="min-height: 100%;position:absolute;width:100%;height:100%;" src="https://zivotniprostredi.php5.cz/doku.php?id=start" align="left" frameborder="0" width="100%" height="100%" scrolling="yes" target="_parent"></iframe>

-->



<br>

<hr>





</div>

</body>
<a name="bottom"></a>
</html> 
