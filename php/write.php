<?php

if(isset($_POST['BusName']))
{
$data=$_POST['BusName'];

$fp = fopen('/home/hdita/Documents/ShellHacks2020/ShellHacks2020/data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>