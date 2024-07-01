<!-- QUESTO FILE RAPPRESENTA IL DATO ORIGINALE -->
<?php

$todolists = [
    [
        "titolo" => "Compra la spesa",
        "testo" => "Compra latte, pane, uova e frutta",
        "data" => "2024-07-02",
        "priorità" => "Alta"
    ],
    [
        "titolo" => "Porta l'auto dal meccanico",
        "testo" => "Controllo generale e cambio olio",
        "data" => "2024-07-05",
        "priorità" => "Media"
    ],
    [
        "titolo" => "Invia il report",
        "testo" => "Completa e invia il report mensile al capo",
        "data" => "2024-07-03",
        "priorità" => "Alta"
    ],
    [
        "titolo" => "Palestra",
        "testo" => "Allenamento completo di forza",
        "data" => "2024-07-01",
        "priorità" => "Bassa"
    ],
    [
        "titolo" => "Prenota visita medica",
        "testo" => "Prenota una visita di controllo dal dentista",
        "data" => "2024-07-10",
        "priorità" => "Media"
    ]
];

$jsonTodo = json_encode($todolists);
file_put_contents("./db/toDoList.json", $jsonTodo);


