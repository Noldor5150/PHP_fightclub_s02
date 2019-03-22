<?php

require '../bootloader.php';

$db = new Core\FileDB(ROOT_DIR.'/app/files/db.txt');
$modelGerimai = new \App\Model\ModelGerimai('stiprus', $db);
$esanti_vodke = $modelGerimai->load('bbz');
$esantis_viskis = $modelGerimai->load('wtf');
var_dump($esanti_vodke);

$vodke = new \App\Item\Gerimas();
$vodke->setData([
    'name' => 'Sobieskio',
    'amount_ml' => 700,
    'abarot' => 70.5
]);
$viskis = new \App\Item\Gerimas();
$viskis->setData([
    'name' => 'Jackas',
    'amount_ml' => 1500,
    'abarot' => 45.5
]);
$modelGerimai->insert('bbz', $viskis);
var_dump($viskis);

$modelGerimai->insert('wtf', $vodke);
var_dump($vodke);
$modelGerimai->deleteAll();


?>

