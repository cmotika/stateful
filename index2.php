<?

$file = './data/state.txt';
$cnt = file_get_contents($file);
$cnt++;
file_put_contents($file, $cnt);

?>

Hello Lufthansa (called <? print($cnt); ?> times)