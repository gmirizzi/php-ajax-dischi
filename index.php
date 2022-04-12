<?php #include 'data.php' 
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">

    <!-- link css -->
    <link rel="stylesheet" href="stile.css">
    <title>PHP Dischi</title>
</head>

<body>
    <div id="app">
        <main>
            <header>
                <img src="img/logo-spotify.png" alt="Logo Spotify" />
                <select>
                    <option value="">All</option>
                    <optgroup label="Genere">

                    </optgroup>
                    <optgroup label="Artista">

                    </optgroup>

                </select>
            </header>
            <div id="container">
                <!-- ciclo foreach con php per generare le card con i dischi -->
                <?/*php
                foreach ($arrDischi as $disco) { ?>
                    <div class="card">
                        <img src="<?= $disco['poster'] ?>" alt="<?= $disco['titolo'] ?>">
                        <div>
                            <h2><?= $disco['titolo'] ?></h2>
                            <div class="artista"><?= $disco['artista'] ?></div>
                            <div class="anno"><?= $disco['anno'] ?></div>
                        </div>
                    </div><?php
                        }
                            */ ?>
                <!-- ciclo v-for per generare le card -->
                <div v-for="disco in arrDischi" class="card">
                    <img :src="disco.poster" :alt="`Copertina ` + disco.titolo">
                    <div>
                        <h2>{{disco.titolo}}</h2>
                        <div class="artista">{{disco.artista}}</div>
                        <div class="anno">{{disco.anno}}</div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- link allo script -->
    <script src="script.js"></script>
</body>

</html>