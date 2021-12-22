<?php 
$someFile = './sample.txt';
$expr     = "/\[.*\]/";
$content  = file_get_contents($someFile);
if($content === FALSE) die('Failed To Read Sample File');
preg_match_all($expr, $content, $instances);
// WE COULD MAKE THIS MUCH PRETTIER, FOREACH OVER IT, ETC
echo 'Text in Brackets: ' . print_r($instances, TRUE) . '<br>';
?>
