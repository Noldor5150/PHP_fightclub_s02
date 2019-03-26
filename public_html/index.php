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
    'abarot' => 70.5,
    'image'=>'/images/balls.jpg'
        ]);



$viskis = new \App\Item\Gerimas([
    'name' => 'Jackas',
    'amount_ml' => 1500,
    'abarot' => 45.5,
    'image'=>'/images/balls.jpg'
]);
$ginas = new \App\Item\Gerimas([
    'name' => 'Gordons',
    'amount_ml' => 700,
    'abarot' => 43.5,
    'image'=>'/images/balls.jpg'
]);
$likeris = new \App\Item\Gerimas([
    'name' => 'Starka',
    'amount_ml' => 500,
    'abarot' => 49.9,
    'image'=>'/images/balls.jpg'
]);

$modelGerimai->insert('viskis', $viskis);
$modelGerimai->insert('vodke', $vodke);
$modelGerimai->insert('ginas', $ginas);
$modelGerimai->insert('likeris', $likeris);


$visi_gerimai = $modelGerimai->loadAll();


$form = [
    'fields' => [
        'pavadinimas' => [
            'name' => 'pavadinimas',
            'label' => 'Iveskite pavadinima ',
            'type' => 'text',
            'placeholder' => 'Gerimo pavadinimas',
            'validate' => [
                'validate_not_empty',
            ],
        ],
        'amount_ml' => [
            'name' => 'amount_ml',
            'label' => 'Iveskite kieki ',
            'type' => 'number',
            'placeholder' => 'Gerimo turis',
            'validate' => [
                'validate_not_empty',
            ],
        ],
        'abarot' => [
            'name' => 'abarot',
            'label' => 'Iveskite abarota ',
            'type' => 'text',
            'placeholder' => 'Gerimo abarotai',
            'validate' => [
                'validate_not_empty',
            ],
        ],
        'image' => [
            'name' => 'image',
            'label' => 'Iveskite paveiksliuko url ',
            'type' => 'text',
            'placeholder' => '',
            'validate' => [
                'validate_not_empty',
            ],
        ]
    ],
    'buttons' => [
        'submit' => [
            'text' => 'Submit'
        ]
    ],
    'callbacks' => [
        'success' => [
            'form_success'
        ],
        'fail' => []
    ]
];
?>
<html>
    <head>
        <title></title>
        
    </head>
    <body>
        <div>
            <?php require '../core/views/form.php';?>
          
    </body>
       
    
</html>
