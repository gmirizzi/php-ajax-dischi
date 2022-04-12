<?php include 'data.php' ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
</head>
<body>
    <main>
        <div id="container">
            <?php 
            foreach ($arrDischi as $disco) { ?>
                <div class="card">
                    <img src="<?= $disco['poster']?>" alt="<?= $disco['titolo']?>">
                    <div>
                        <h2><?= $disco['titolo']?></h2>
                        <div class="artista"><?= $disco['artista']?></div>
                        <div class="anno"><?= $disco['anno']?></div>
                    </div>
                </div><?php
            }
            ?>
        </div>
    </main>
</body>
</html>