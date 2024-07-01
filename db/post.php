<?php
if(isset($_GET["toDoTitle"]) &&
    isset($_GET["toDoText"]) &&
    isset($_GET["toDoPriority"])){

    //prendo i data
    $data =file_get_contents("./toDoList.json");

    //modifico il dato da JSON a PHP - decodifico
    $data = json_decode($data, true);

    //aggiungo la nuova todo all-array
    $data[] = [
        "titolo" =>$_GET["toDoTitle"],
        "testo" => $_GET["toDoText"],
        "priorità" => $_GET["toDoPriority"]
    ];

    //ri-codifico da PHP A JSON
    $jsonData = json_encode($data);

    //riscrivo nel file e salvo
    file_put_contents("./toDoList.json", $jsonData);

    

} 