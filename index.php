<?php
include_once __DIR__ . "/db.php";

// var_dump($movies)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>

    <!-- bootstrap cdn css -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>

<body class="bg-black">

    <main class="py-5">
        <h1 class="text-center text-white pb-3">
            Catalogo film in uscita
        </h1>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-5">
                <?php foreach ($movies as $movie) : ?>
                    <div class="col">
                        <div class="card border-0 ">
                            <div class="card_top pb-2">
                                <img class="img-fluid" src="<?= $movie->poster ?>" alt="<?= $movie->title ?>">
                            </div>
                            <div class="card_bottom">
                                <h3>
                                    <?= $movie->title ?>
                                </h3>
                                <small>
                                    Genere: 
                                    <?= $movie->genre ?>
                                    <br>
                                    Uscita: 
                                    <?= $movie->year ?>
                                </small>
                                <div class="description mt-3" style="height: 200px; overflow: auto;">
                                    <p><?= $movie->description ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </main>

</body>

</html>