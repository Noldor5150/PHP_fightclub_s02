<?php

require '../bootloader.php';

$db = new Core\FileDB(ROOT_DIR . '/app/files/db.txt');
$modelGerimai = new \App\Model\ModelGerimai('stiprus', $db);
$esanti_vodke = $modelGerimai->load('vodke');
$esantis_viskis = $modelGerimai->load('viskis');
$esantis_ginas = $modelGerimai->load('ginas');
$esantis_likeris = $modelGerimai->load('likeris');


$vodke = new \App\Item\Gerimas([
    'name' => 'Sobieskio',
    'amount_ml' => 700,
    'abarot' => 70.5
        ]);



$viskis = new \App\Item\Gerimas([
    'name' => 'Jackas',
    'amount_ml' => 1500,
    'abarot' => 45.5
]);
$ginas = new \App\Item\Gerimas([
    'name' => 'Gordons',
    'amount_ml' => 700,
    'abarot' => 43.5
]);
$likeris = new \App\Item\Gerimas([
    'name' => 'Starka',
    'amount_ml' => 500,
    'abarot' => 49.9
]);

$modelGerimai->insert('viskis', $viskis);
$modelGerimai->insert('vodke', $vodke);
$modelGerimai->insert('ginas', $ginas);
$modelGerimai->insert('likeris', $likeris);


$visi_gerimai = $modelGerimai->loadAll();

var_dump($visi_gerimai);

?>
<html>
    <head>
        <title></title>
        
    </head>
    <body>
        <div>
            <?php foreach ($visi_gerimai as $gerimas):?>
            
            <h2><?php print $gerimas->getName();?></h2>
            <h3><?php print $gerimas->getAbarot();?></h3>
            <h4><?php print $gerimas->getAmount();?></h4>
            
            <?php endforeach;?>
        </div>
    </body>
       
    
</html>
