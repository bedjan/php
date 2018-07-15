<?php 

$fn = "data/poznamky.md"; 
$file = fopen($fn, "a+"); 



if($_POST['update']) fputs($file, $_POST['update']); 

$text = fread($file, $size); 
readfile("data/poznamky.md");
fclose($file); 
?> 

<br>


<form action="<?=$PHP_SELF?>" method="post"> 
<textarea Name="update" cols="30" rows="5"><?=$text?></textarea><br/> 

<input type="submit" value="ULOŽIT"/> 

</form>


<a href="poznamky.php?delete=1" onclick="location.href='poznamky.php';" target="_blank">POZOR smaže poznamky.md</a>

<?php
    if(isset($_GET['delete']))
    {
        unlink("data/poznamky.md");
        require_once("poznamky.php");
    }
?>
