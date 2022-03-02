<?php
include __DIR__ . '/data/Movie.php';
include __DIR__ . '/models/Movie.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Movie</title>
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php foreach ($movies as $movie) {
                        $m = new Movie($movie['id'], $movie['title'], $movie['genre'], $movie['year'], $movie['description'], $movie['vote']); ?>
                        <div id="<?php echo $m->id ?>" class="movie">
                            <h3><strong>Titolo</strong>: <?php echo $m->title ?></h3>
                            <span><strong>Anno</strong>: <?php echo $m->year ?> </span>
                            <p><strong>Voto</strong>: <?php echo $m->vote ?></p>
                            <span><strong>Genere</strong>: <?php echo $m->genre ?></span>
                            <p><strong>Descrizione:</strong>
                                <br />
                                <?php echo $m->cutDescription() ?>
                            </p>
                        </div>
                    <?php } ?>
                </div>
            </div>
    </main>
</body>

</html>