<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- STYLE.CSS -->
    <link rel="stylesheet" href="./style/style.css">

    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP-JSON Todo List</title>
</head>
<body>
    
<div id="app">
    <header>
        <h1>TODO LIST</h1>
    </header>

    <main>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>To Do List section</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
            <div class="card" style="width: 18rem;" v-for="toDo in toDos">
                <div class="card-body">
                    <h5 class="card-title">{{ toDo.titolo }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Priorità: {{toDo.priorità}}</h6>
                    <p class="card-text">{{ toDo.testo}}</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    </main>


</div>

<!-- VUE 3 CDN -->
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<!-- AXIOS CDN -->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<!-- MAIN.JS PATH -->
<script src="./script/main.js"></script>

</body>
</html>