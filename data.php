<?php
$arrDischi = [
    [
        'poster' => 'https://images.genius.com/c3b54f2b34473bd3d41448f8ea58811e.1000x1000x1.jpg',
        'titolo' => 'Persona',
        'artista' => 'Marracash',
        'genere' => 'Alternative hip pop',
        'anno' => '2019',
    ],
    [
        'poster' => 'https://media-assets.vanityfair.it/photos/61983b0d1c22052605133594/1:1/w_968,h_968,c_limit/MARRACASH_NOI,%20LORO,%20GLI%20ALTRI_cover%20b.jpg',
        'titolo' => 'Noi, loro, gli altri',
        'artista' => 'Marracash',
        'genere' => 'Hip pop',
        'anno' => '2021',
    ],
    [
        'poster' => 'https://m.media-amazon.com/images/I/51b4gWf5s1L._AC_SX355_.jpg',
        'titolo' => 'Hellvisback',
        'artista' => 'Salmo',
        'genere' => 'Hip pop',
        'anno' => '2016',
    ],
    [
        'poster' => 'https://m.media-amazon.com/images/I/61pTmydSkkL._AC_SY450_.jpg',
        'titolo' => 'Enemy',
        'artista' => 'Noyz Narcos',
        'genere' => 'Hip pop',
        'anno' => '2018',
    ],
    [
        'poster' => 'https://m.media-amazon.com/images/I/415nU9uf+rL._AC_SX450_.jpg',
        'titolo' => 'Completamente Sold Out',
        'artista' => 'Thegiornalisti',
        'genere' => 'Synth pop',
        'anno' => '2016',
    ],
    [
        'poster' => 'https://m.media-amazon.com/images/I/61K+CffxcXL._AC_SY355_.jpg',
        'titolo' => 'Mainstream',
        'artista' => 'Calcutta',
        'genere' => 'Indie pop',
        'anno' => '2015',
    ],
    [
        'poster' => 'https://i1.sndcdn.com/artworks-000102346597-ccpc6p-t240x240.jpg',
        'titolo' => 'QVC Vol. 5 Mixtape',
        'artista' => 'Gemitaiz',
        'genere' => 'Hip pop',
        'anno' => '2014',
    ],
    [
        'poster' => 'https://static.vascorossi.net/images/content/460554_29972_2_W1N_0_600_0_3933751/vasco-rossi-bollicine.jpg',
        'titolo' => 'Bollicine',
        'artista' => 'Vasco Rossi',
        'genere' => 'Rock',
        'anno' => '1983',
    ],
    [
        'poster' => 'https://m.media-amazon.com/images/I/91c1NRSOuLL._AC_SL1500_.jpg',
        'titolo' => 'Dove gli occhi non arrivano',
        'artista' => 'Rkomi',
        'genere' => 'Pop rap',
        'anno' => '2019',
    ],
    [
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/7/70/Drake_-_More_Life_cover.jpg',
        'titolo' => 'More life',
        'artista' => 'Drake',
        'genere' => 'Hip pop',
        'anno' => '2017',
    ],
];
header("Content-Type: application/json");
echo json_encode($arrDischi);
?>