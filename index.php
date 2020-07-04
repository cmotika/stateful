<?php

$file = '/opt/app-root/src/data/state.txt';
//$file = 'state.txt';
$cnt = file_get_contents($file);
if (!$cnt) {
  print("error reading state<br><br>");
}
$cnt = intval(trim($cnt));
$cnt++;
if (!file_put_contents($file, $cnt)) {
  print("error wrinting state<br><br>");
}

?>

Hello Lufthansa (called <?php print($cnt); ?> times)