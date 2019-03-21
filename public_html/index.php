<?php

require '../bootloader.php';

$db = new Core\FileDB(ROOT_DIR.'/app/files/db.txt');
$db->save();

$modelGerimai = new \App\Model\ModelGerimai();

$vodke = new \App\Item\Gerimas();
$vodke->setData([
    'name' => 'Sobieskio',
    'amount_ml' => 700,
    'abarot' => 70.5
]);
var_dump($vodke);

?>

