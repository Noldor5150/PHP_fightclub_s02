<?php

require '../bootloader.php';
$form = [
    'fields' => [
        'pavadinimas' => [
            'label' => 'Iveskite pavadinima ',
            'type' => 'text',
            'placeholder' => 'Gerimo pavadinimas',
            'validate' => [
                'validate_not_empty',
            ],
        ],
        'amount_ml' => [
            'label' => 'Iveskite kieki ',
            'type' => 'number',
            'placeholder' => 'Gerimo turis',
            'validate' => [
                'validate_not_empty',
            ],
        ],
        'abarot' => [
            'label' => 'Iveskite abarota ',
            'type' => 'text',
            'placeholder' => 'Gerimo abarotai',
            'validate' => [
                'validate_not_empty',
            ],
        ],
        'image' => [
            'label' => 'Iveskite paveiksliuko url ',
            'type' => 'file',
            'placeholder' => '',
            'validate' => [
               'validate_field_file'
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

function validate_field_file($input, &$field,&$safe_input){
    $file= $_FILES[$field['id']]?? flase;
    if($file){
        if($file['error']==0) {
            return true;
        }
    }
    $field['error_msg'] = 'neikelei failo';
}
function form_success($safe_input, $form) {
    $db = new Core\FileDB(ROOT_DIR . '/app/files/db.txt');
    $model_gerimai = new App\model\ModelGerimai('kokteiliai',$db);
    $gerimas = new \App\Item\Gerimas([
        'name' => $safe_input['pavadinimas'],
        'amount_ml' => $safe_input['amount_ml'],
        'abarot' => $safe_input['abarot'],
        'image' => $safe_input['image'],
    ]);
    $id = time() . '_' . rand(0, 10000);
    $model_gerimai->insert($id, $gerimas);
}


if (!empty($_POST)) {
    $safe_input = get_safe_input($form);
    $success = validate_form($safe_input, $form);

}

$db = new Core\FileDB(ROOT_DIR . '/app/files/db.txt');
$model_gerimai = new App\model\ModelGerimai( 'kokteiliai',$db);
//$model_gerimai->insert('viskis', $viskis);
//$model_gerimai->insert('vodke', $vodke);
//$model_gerimai->insert('ginas', $ginas);
//$model_gerimai->insert('likeris', $likeris);
?>
<html>
    <head>
        <title>Kokteiliu meniu</title>
    </head>
    <body>
        <?php foreach ($model_gerimai->loadAll() as $gerimas): ?>
            <div>
                <p>Pavadinimas: <?php print $gerimas->getName(); ?></p>
                <p>Kiekis: <?php print $gerimas->getAmount(); ?></p>
                <p>Abarotai: <?php print $gerimas->getAbarot(); ?></p>
                <p><img src="<?php print $gerimas->getImage(); ?>"></p>
            <?php endforeach; ?>
        </div>
        <div>
            <?php require ROOT_DIR . '/core/views/form.php'; ?>
        </div>
    </body>
</html>