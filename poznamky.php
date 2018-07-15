<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Jan Bednář | private web</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link  type="text/css" rel="stylesheet" href="https://rawgit.com/bedjan/php/master/w3.css">
<link rel="icon" href="https://github.com/bedjan/web_home/raw/master/browser-web-icon.png" type="image/x-icon" />
</head>

<!-- 
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

-->
 
<body>

<div class="w3-container w3-white w3-text-black">


<br>

<?php 

$fn = "data/poznamky.md"; 
$file = fopen($fn, "a+"); 



if($_POST['update']) fputs($file, $_POST['update']); 

//$text = fread($file, $size); 
readfile("data/poznamky.md");
fclose($file); 
?> 

<br>


<form action="<?=$PHP_SELF?>" method="post"> 
<textarea Name="update" cols="30" rows="5"><?=$text?></textarea><br/> 

<input type="submit" value="ULOŽIT"/> 

</form>

<h3><a href="?delete=1" href="javascript:history.go(0)#section">POZOR maže data/poznamky.md</a></h3>
<h3><a href="?delete=1" href="javascript:history.go(0)index.php#section" >POZOR maže data/poznamky.md</a></h3>

<?php
    if(isset($_GET['delete']))
    {
        unlink("data/poznamky.md");
    }
?>


<br>
<hr>
<form enctype="multipart/form-data" action="poznamky.php" method="POST">
    <h3>Vyber soubor a nahrej do adresáře data</h3>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="nahrát"></input>
  </form>

<?php
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "data/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "Soubor > ".  basename( $_FILES['uploaded_file']['name']). 
      " < byl nahrán";
    } else{
        echo "Nenahráno,vyber soubor a zkus znovu!";
    }
  }
?>

<br>
<hr>
<h3>Výpis souborů adresáře data</h3>
<?php
//path to directory to scan
$directory = "./data/";
 
//get all image files with a .jpg extension.
$files = glob($directory . "*.*");
 
//print each file name
foreach($files as $files)
{
echo $files;
}
?>





</div>

</body>
<a name="bottom"></a>
</html> 
