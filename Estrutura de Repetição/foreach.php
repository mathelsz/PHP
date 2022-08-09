<?php
    //             0         1       2     3        4
    $frutas = ['Morango','Abacaxi','Uva','Maçã','Banana','Goiaba']; //quando ver '[]' no php é array pae

    $tudo = [
        'Com caroço' => ['Uva', 'Abacate', 'Ameixa'],
        'Sem caoroço' => ['Morango', 'Banana', 'Abacaxi']
    ];

    echo '<p>'.$frutas[2].'</p>';

    echo '<p>'.$tudo['Com caroço'][0].'</p>';


    foreach ($frutas as $fruta){
        echo '<p>'.$fruta.'</p>';
    }
    
?>