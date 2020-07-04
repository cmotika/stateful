<?

$file = '/data/state.txt';
$cnt = file_get_contents($file);

?>

Hello Lufthansa (called <? print($cnt); ?> times)