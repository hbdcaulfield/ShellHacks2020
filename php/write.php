<?php

$data=$_POST['BusName'];

$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>