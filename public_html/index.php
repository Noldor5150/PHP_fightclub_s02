<?php

require '../bootloader.php';

$db = new Core\FileDB(ROOT_DIR.'/app/files/db.txt');
$modelGerimai = new \App\Model\ModelGerimai('stiprus', $db);
$esanti_vodke = $modelGerimai->load('bbz');
var_dump($esanti_vodke);

$vodke = new \App\Item\Gerimas();
$vodke->setData([
    'name' => 'Sobieskio',
    'amount_ml' => 700,
    'abarot' => 70.5
]);

$modelGerimai->insert('bbz', $vodke);
var_dump($vodke);



?>

