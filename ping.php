<?php
$ip = "www.seznam.cz";
$exec = exec( "ping -c 3 -s 64 -t 64 ".$ip, $output, $return );
echo $exec;
echo "<br />----------------<br />";
print_r( $output );
echo "<br />----------------<br />";
print_r( $return );
?>
