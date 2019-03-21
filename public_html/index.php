<?php

require '../bootloader.php';

$db = new Core\FileDB(ROOT_DIR.'/app/files/db.txt');
$db->save();
?>

