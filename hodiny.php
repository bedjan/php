<?php

$today = date("D");
switch($today){
    case "Mon":
        echo "Pondělí";
        break;
    case "Tue":
        echo "Úterý";
        break;
    case "Wed":
        echo "Středa";
        break;
    case "Thu":
        echo "Čtvrtek";
        break;
    case "Fri":
        echo "Pátek";
        break;
    case "Sat":
        echo "Sobota";
        break;
    case "Sun":
        echo "Neděle";
        break;
    default:
        echo "Tento den bez informaci.";
        break;
}
echo " | ";echo date("d.F, h:i | Y");
?>
