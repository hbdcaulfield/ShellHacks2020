<?php
$data='Hello World';

$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
?>