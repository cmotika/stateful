<?

//read state
$myfile = fopen("state.txt", "r");
$cnt = 0;
if ($myfile) {
	$cnt = fread($myfile,filesize("state.txt")).trim();
}
fclose($myfile);

//update state (count up)
$cnt++;

//write state
$fp = fopen('state.txt', 'w');
fwrite($fp, $cnt);
fclose($fp);

?>

Hello Lufthansa (called <? print($cnt); ?> times)