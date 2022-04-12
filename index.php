<?php include 'data.php' ?>
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
    <main>
        <div id="container">
            <?php
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
                        ?>
        </div>
    </main>
</body>

</html>