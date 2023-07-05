<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- My Style -->
    <link rel="stylesheet" href="./style/style.css">
    <title>Php-Json Dischi</title>
</head>
<body>
    <header>
    <img src="logo-small.svg" alt="" class="col-2 offset-md-1">
    </header>
    <main>
        <div id="app">
            <div class="container">
                <div class="row">
                        <div v-for="(disc, index) in discs" :key="index" class="col-3">
                            <div class="card">
                                <img :src="disc.poster" alt="Album Cover" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ disc.title }}
                                    </h5>
                                    <p class="card-text">
                                        {{ disc.author }}
                                    </p>
                                    <h5>
                                        {{ disc.year }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </main>

    <script src="./script/main.js"></script>
</body>
</html>