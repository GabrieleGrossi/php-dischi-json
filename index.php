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
                <div class="col-12">
                            <ul>
                                <li v-for="(disc, index) in discs">
                                    {{ disc.title }}
                                    {{ disc.author }}
                                    {{ disc.year }}
                                    {{ disc.poster }}
                                    {{ disc.genre }}
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </main>

    <script src="./script/main.js"></script>
</body>
</html>