<?php

$file = '/opt/app-root/src/data/state.txt';
$cnt = file_get_contents($file);
$cnt++;
file_put_contents($file, $cnt);

?>

Hello Lufthansa (called <?php print($cnt); ?> times)