<?php
     $file = './data/index.html';
     $newfile = './index.html';
     if(!copy($file,$newfile))
     {
         echo "chyba při kopírovaní $file";
     }
     else
     {
         echo "Zkopírován soubor $file do $newfile\n";
     }
?>
