<?php
/*
Make a PHP array from the mimetypes.csv file
*/
$file = file_get_contents("mimetypes.csv");
$lines = explode("\n", $file);
$output = "[\n";
foreach ($lines as $l) {
	$line = explode(",", $l);
	for ($i = 1; $i < count($line); $i++) {
		$output .= "\t\"" . $line[$i] . "\" => \"" . $line[0] . "\",\n";
	}
}
$output .= "]";

file_put_contents("mimetypes.php", $output);
