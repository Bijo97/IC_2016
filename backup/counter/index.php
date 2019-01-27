<?php
$today = date("Y-m-d");
$file = 'counter/count-log.txt';
$lines = file($file);
$new_lines = array();
$found = false;
foreach ($lines as $line) {
	$date = substr($line, 0, 10);
	if ($date == $today) {
	$number = intval(substr($line,11));
	$number++;
	$line = $date . " " . $number;
	$found = true;
	}
	$new_lines []= $line;
}
if($found == false) {
$add = PHP_EOL . $today . " 1";
file_put_contents($file, $add, FILE_APPEND);
}
else {file_put_contents($file, $new_lines);}
?>