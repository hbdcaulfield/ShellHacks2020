<?php
if(isset($_POST['BusName']) && isset($_POST['BusAdd'])) {
    $data = $_POST['BusName'] . '-' . $_POST['BusAdd'] . "\r\n";
    $ret = file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}
?>