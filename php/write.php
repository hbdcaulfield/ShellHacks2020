<?php
              
if(isset($_POST['BusName']))
{
$data=$_POST['BusName'];

$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>