<!-- Snack 1 -->


<?php

$matches = [
    [
        'casa' => 'Olimpia Milano',
        'ospite' => 'Cantú',
        'punteggio_casa' => 55,
        'punteggio_ospite' => 60
    ],
    [
        'casa' => 'Armani',
        'ospite' => 'Bologna',
        'punteggio_casa' => 65,
        'punteggio_ospite' => 70
    ],
    [
        'casa' => 'Venezia',
        'ospite' => 'Torino',
        'punteggio_casa' => 75,
        'punteggio_ospite' => 80
    ],
    [
        'casa' => 'Roma',
        'ospite' => 'Brescia',
        'punteggio_casa' => 85,
        'punteggio_ospite' => 90
    ],
    [
        'casa' => 'Firenze',
        'ospite' => 'Napoli',
        'punteggio_casa' => 95,
        'punteggio_ospite' => 100
    ]
];

echo "<h1>Squadre</h1>";

for($i = 0; $i < 5; $i++){
    echo $matches[$i]['casa'] . " - " . $matches[$i]['ospite'] . " | " . $matches[$i]['punteggio_casa'] . " - " . $matches[$i]['punteggio_ospite'] . '<br/>';
};


?>

