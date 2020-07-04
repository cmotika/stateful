<?
error_reporting(E_ALL);

$file = '/opt/app-root/src/data/state.txt';
$cnt = file_get_contents($file);
if (!$cnt) {
 	print("error reading state file<br><br>");	
} else {
 	print("read state file<br><br>");	
}

?>

Hello Lufthansa (called <? print($cnt); ?> times)